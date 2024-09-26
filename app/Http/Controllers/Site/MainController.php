<?php

namespace App\Http\Controllers\Site;

use App\Mail\SendLogo;
use App\Models\Category;
use App\Models\Product;
use App\Models\Font;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Stripe\Charge;
use Stripe\Exception\CardException;
use Stripe\Stripe;
use App\Services\EmailService;
use App\Services\LogoService;
use App\Services\SessionService;
use Error;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Stripe\StripeClient;
use Illuminate\Support\Facades\Session;
use Imagick;
use ImagickPixel;

class MainController extends \App\Http\Controllers\Controller
{

    public function __construct(
        public SessionService $sessionService,
        public EmailService $emailService,
        public LogoService $logoService,
    ) {}
    public function index()
    {
        $categories = Category::where('is_top', 1)
            ->where(function (Builder $query) {
                $query->where('image', '<>', '')
                    ->orWhereHas('products');
            })
            ->orderBy('id', 'DESC')
            ->get()
            ->map(fn(Category $category) => $category->image ? $category : $category->append('latest_product'));

        return view('site/main', compact('categories'));
    }

    public function selectColor()
    {

        return view('site/selectcolor');
    }

    public function selectFont()
    {
        return view('site/selectfont');
    }


    public function selectCategory()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('site/selectcategory', compact('categories'));
    }


    public function selectLogo()
    {

        $category = session('category', null); // Default to null if session data is not set

        // Check if a category ID is available
        if ($category) {
            // Fetch products where `category_id` matches the single category ID
            $products = Product::where('category_id', '=', $category)
                ->orderBy('id', 'DESC')
                ->paginate(12);
        } else {
            // Handle the case where no category ID is available (optional)
            $products = Product::orderBy('id', 'DESC')->paginate(12);
        }
        $categories = Category::orderBy('name', 'ASC')->get();
        $favourites = auth()->user()?->favourites->toArray();
        return view('site/selectlogo', compact('categories', 'products', 'favourites'));
    }


    public function maker()
    {
        $userId = auth()->user()?->id;
        $image = session('image');
        $productId = Product::where('image', $image)->value('id');
        // if ($product) {
        //     $productId = $product->id;
        // }
        $hasOrder = Order::where('product_id', $productId)
            ->where('user_id',  $userId)
            ->where('status', 'paid')
            ->exists();
        $selectedProduct = Product::find(Session::get('product-id'));
        $fonts = Font::all();
        return view('site/maker', compact('hasOrder', 'selectedProduct','fonts'));
    }

    public function thankYou()
    {
        return view('site/thank-you');
    }
    public function declined()
    {
        return view('site/payment-decline');
    }
    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $total = $request->input('total');
        $logoEncodedString = $request->input('logoDataUrl');
        $userId = $request->input('userid');
        $productId = $request->input('product-id');
        $stripeToken = $request->input('stripeToken');
        try {
            Charge::create([
                'amount' => $total * 100, // Amount in cents
                'currency' => 'usd',
                'description' => 'Logo charge',
                'source' => $stripeToken
            ]);
            $order = Order::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'amount' => $total
            ]);
            list($type, $logoEncodedString) = explode(';', $logoEncodedString);
            list(, $extension) = explode('/', $type);
            list(, $logoEncodedString) = explode(',', $logoEncodedString);
            $logoString = base64_decode($logoEncodedString);
            $fileName = "{$userId}_{$productId}.{$extension}";
            File::ensureDirectoryExists(public_path('orders'));
            File::put(public_path("orders/$fileName"), $logoString);
            $this->sessionService->clearSessionData();
            $this->emailService->sendLogo($order);
            return redirect()->route('thankyou');
        } catch (CardException $e) {
            return redirect()->route('declined')->with('message', $e->getMessage());
        }
    }
    public function selectLogoCategory($category)
    {

        // Check if a category ID is available
        if ($category) {
            $categoryObj = Category::where('slug', $category)->firstOrFail();
            // Fetch products where `category_id` matches the single category ID
            // $products = Product::where('slug', '=', $category)
            //                    ->orderBy('id', 'DESC')
            //                    ->get();

            $products = Product::whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            })
                ->orderBy('id', 'DESC')
                ->paginate(20);
            $cmsData = $categoryObj->cmsData();
            $faqData = $categoryObj->faqData();
            $headingsData = $categoryObj->headings();
            $categoryObj = $categoryObj->toArray();
        } else {
            // Handle the case where no category ID is available (optional)
            $products = Product::orderBy('id', 'DESC')->paginate(20);
        }

        $categories = Category::orderBy('id', 'DESC')->get();
        $favourites = auth()->user()?->favourites->toArray();
        return view('site.new-logo', compact('categories', 'products', 'category', 'categoryObj', 'cmsData', 'faqData', 'favourites', 'headingsData'));
    }

    public function preview()
    {
        $userId = auth()->user()?->id;
        $image = session('image');
        $productId = Product::where('image', $image)->value('id');

        // if ($product) {
        //     $productId = $product->id;
        // }
        //  die($productId."AAAAAA".auth()->user()->id );

        $hasOrder = Order::where('product_id', $productId)
            ->where('user_id',  $userId)
            ->where('status', 'paid')
            ->exists();

        $product = Order::where('product_id', $productId)
            ->where('user_id', $userId)
            ->where('status', 'paid')
            ->first();

        // Fetch the product from the database
        $selectedProduct = Product::find(Session::get('product-id'));

        return view('site/preview', compact('hasOrder', 'product', 'selectedProduct'));
    }

    public function packages()
    {
        return view('site/packages');
    }

    public function checkout()
    {
        return view('site/checkout');
    }

    public function bkthankYou()
    {
        return view('site/thank-you');
    }

    public function bkcharge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $total = $request->input('total');
        $logoEncodedString = $request->input('logoDataUrl');
        $userId = $request->input('userid');
        $productId = $request->input('product-id');
        $stripeToken = $request->input('stripeToken');

        try {
            Charge::create([
                'amount' => $total * 100, // Amount in cents
                'currency' => 'usd',
                'description' => 'Logo charge',
                'source' => $stripeToken
            ]);

            Order::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'amount' => $total
            ]);

            list($type, $logoEncodedString) = explode(';', $logoEncodedString);
            list(, $extension) = explode('/', $type);
            list(, $logoEncodedString) = explode(',', $logoEncodedString);

            $logoString = base64_decode($logoEncodedString);
            $fileName = "{$userId}_{$productId}.{$extension}";

            File::ensureDirectoryExists(public_path('orders'));

            File::put(public_path("orders/$fileName"), $logoString);

            return view('site.thank-you');
        } catch (CardException $e) {
            return view('site.payment-decline', [
                'errorMessage' => $e->getMessage()
            ]);
        }
    }

    public function saveLogo(Request $request)
    {
        $data = $request->all();
        $this->logoService->saveLogo(session()->get('imgDataURL'), $data['userId'], $data['productId']);

        Order::updateOrCreate([
            'user_id' => $data['userId'],
            'product_id' => $data['productId']
        ]);

        // $this->sessionService->clearSessionData();
    }

    public function bksaveSVG(Request $request)
    {
        // Validate the request
        $request->validate([
            'svg' => 'required|string'
        ]);

        // Get the SVG data
        $svgData = $request->input('svg');
        $userId = auth()->id();
        $productId = session()->get('product-id');
        
        // Generate a unique filename
        $fileName = $userId.'_'. $productId. '.svg';

        // Define the path where you want to save it
        $filePath = public_path('svgs/' . $fileName);

        // Make sure the directory exists
        if (!file_exists(public_path('svgs'))) {
            mkdir(public_path('svgs'), 0777, true);
        }

        // Save the SVG data to the file
        file_put_contents($filePath, $svgData);
        
         // Insert the order into the database with status 'draft'
        $order = new Order();
        $order->user_id = $userId; 
        $order->product_id = $productId; 
        $order->status = 'draft';
        $order->save();

        return response()->json(['success' => true, 'message' => 'SVG saved successfully']);
    }
 

   

    public function saveSVG(Request $request)
    {

      

        // Validate the request
        $request->validate([
            'svg' => 'required|string'
        ]);

        // Get the SVG data
        $svgData = $request->input('svg');
        $userId = auth()->id();
        $productId = session()->get('product-id');
        
        // Generate a unique filename without an extension
        $fileName = $userId . '_' . $productId;
        
        // Define the paths where you want to save the files
        $svgPath = public_path('svgs/' . $fileName . '.svg');
        $pngPath = public_path('svgs/' . $fileName . '.png');

        // Make sure the directory exists
        if (!file_exists(public_path('svgs'))) {
            mkdir(public_path('svgs'), 0777, true);
        }
      
        // Save the SVG data to the file
        file_put_contents($svgPath, $svgData);

        // Convert SVG to PNG using Imagick
        try {
            $imagick = new Imagick();
            $imagick->setBackgroundColor(new ImagickPixel('transparent')); // Set background to transparent
            $imagick->readImageBlob($svgData); // Read the SVG data
            $imagick->setImageFormat("png32"); // Set the image format to PNG
            $imagick->writeImage($pngPath); // Save the PNG file
            $imagick->clear();
            $imagick->destroy();
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to convert SVG to PNG: ' . $e->getMessage()], 500);
        }

        // Insert the order into the database with status 'draft'
         

        $existingOrder = Order::where('user_id', $userId)
                      ->where('product_id', $productId)
                      ->first();

        if (!$existingOrder) {
            $order = new Order();
            $order->user_id = $userId;
            $order->product_id = $productId;
            $order->status = 'draft';
            $order->save();
        }

        
        return response()->json(['success' => true, 'message' => 'SVG and PNG saved successfully']);
    }


    function putImgStringIntoSession(Request $request)
    {
        session()->put('imgDataURL', $request->dataURL);
    }

    public function initializeCharge(Request $request)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET'));

        try {
            $checkout_session = $stripe->checkout->sessions->create([
                'payment_method_types' => ['card'],
                'ui_mode' => 'embedded',
                'line_items' => [[
                    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => session()->get('package-name'),
                        ],
                        'unit_amount' => (float)$request->input('price') * 100, // Amount in cents,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'return_url' => url('checkPaymentStatus?session_id={CHECKOUT_SESSION_ID}'),
            ]);
            session()->put('price', (float)$request->input('price'));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Log::error($th->getTraceAsString());
            throw $th;
        }

        return response()->json([
            'clientSecret' => $checkout_session->client_secret,
        ]);
    }

    public function checkPaymentStatus(Request $request)
    {
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        try {
            $session = $stripe->checkout->sessions->retrieve($request->session_id);
        } catch (Error $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
        return response()->json([
            'status' => $session->status,
        ]);
    }

    public function checkPaymentStatusView()
    {
        return view('site.check-payment-status');
    }

    public function orderComplete(Request $request)
    {
        $userId = auth()->id();
        $productId = session()->get('product-id');
        $logoString = $request->input('logoString');

        $this->logoService->saveLogo($logoString, $userId, $productId);

        $order = Order::updateOrCreate([
            'user_id' => $userId,
            'product_id' => $productId,
        ], [
            'amount' => session()->get('price'),
            'status' => 'paid',
        ]);

        $this->emailService->sendLogo($order);

        $this->sessionService->clearSessionData();
    }

    public function orders()
    {
        //$userWithOrders = transformArrayToObject(auth()->user()->load(['orders' => fn($query) => $query->with('product')->where('status', 'paid')])->toArray());
        $userWithOrders = transformArrayToObject(
            auth()->user()
                ->load([
                    'orders' => fn($query) => $query
                        ->with('product')
                        ->whereIn('status', ['paid', 'draft']) // Fetch orders with both 'paid' and 'draft' statuses
                ])
                ->toArray()
        );
        
        return view('site.orders', [
            'user' => $userWithOrders
        ]);
    }

    function accountDetails()
    {
        $user = auth()->user();
        return view('site.account-details', [
            'user' => $user
        ]);
    }
}

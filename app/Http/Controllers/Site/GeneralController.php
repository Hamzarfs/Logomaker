<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ContactUs;
use App\Mail\ContactUsLP;
use App\Mail\CustomerMail;
use App\Mail\CustomLogo;
use App\Models\Category;
use App\Rules\Recaptcha;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class GeneralController extends \App\Http\Controllers\Controller
{

    public function aboutUs()
    {
        return view('site/aboutus');
    }

    public function graphicDesigning()
    {
        return view('site/graphic-designing');
    }

    public function stationeryDesigning()
    {
        return view('site/stationery-designing');
    }

    public function howItWorks()
    {
        return view('site/how-it-works');
    }

    // -------------- General Pages //
    public function logodesigncalifornia()
    {
        return view('site/logo-design-california');
    }

    public function logodesignflorida()
    {
        return view('site/logo-design-florida');
    }

    public function logodesigntexas()
    {
        return view('site/logo-design-texas');
    }

    public function logodesignpennsylvania()
    {
        return view('site/logo-design-pennsylvania');
    }

    public function logodesignillinois()
    {
        return view('site/logo-design-illinois');
    }

    public function logodesignohio()
    {
        return view('site/logo-design-ohio');
    }
    public function logodesignnewjersey()
    {
        return view('site/logo-design-new-jersey');
    }

    public function logodesignarizona()
    {
        return view('site/logo-design-arizona');
    }

    public function logodesignnewyork()
    {
        return view('site/logo-design-new-york');
    }

    public function logodesignvirginia()
    {
        return view('site/logo-design-virginia');
    }
    public function frequentlyaskedquestion()
    {
        return view('site/frequently-asked-question');
    }
    public function contactUs()
    {
        return view('site/contact-us');
    }
    public function termscondition()
    {
        return view('site/terms-condition');
    }
    public function privacypolicy()
    {
        return view('site/privacy-policy');
    }
    public function thanks()
    {
        return view('site/thanks');
    }

    public function lppage()
    {
        return view('site/lp-page');
    }

    public function customlogo()
    {
        $categories = Category::where('is_top', 1)
            ->where(function (Builder $query) {
                $query->where('image', '<>', '')
                    ->orWhereHas('products');
            })
            ->orderBy('id', 'DESC')
            ->get()
            ->map(fn(Category $category) => $category->image ? $category : $category->append('latest_product'));
        return view('site/custom-logo', compact('categories'));
    }


    public function printing()
    {
        return view('site/printing');
    }

    public function contactUsSubmit(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new Recaptcha],
        ]);

        $data = $request->all();
        $users = User::role('admin')->pluck('email');
        $users = [...$users, 'adnankhan125@gmail.com', 'ridaali.rfs@gmail.com', 'javeriahzakir90@gmail.com', 'adil.rfs1@gmail.com', 'nomanrfs@gmail.com', 'info@rfslogodesign.com'];
        try {
            Mail::to($users)->send(new ContactUs($data));
            Mail::to($data['email'])->send(new CustomerMail($data));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Log::error($th->getTraceAsString());
            return back()->with([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
        return back()->with([
            'success' => true,
        ]);
    }

    public function contactUsSubmitLP(Request $request)
    {
        $data = $request->all();
        $users = User::role('admin')->pluck('email');
        $users = [...$users, 'adnankhan125@gmail.com', 'ridaali.rfs@gmail.com', 'javeriahzakir90@gmail.com', 'adil.rfs1@gmail.com', 'nomanrfs@gmail.com', 'info@rfslogodesign.com'];
        try {
            Mail::to($users)->send(new ContactUsLP($data));
            Mail::to($data['email'])->send(new CustomerMail($data));
            $this->hubspotAPI($data);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Log::error($th->getTraceAsString());
            return back()->with([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
        return redirect('thanks');
    }

    public function customLogoSubmit(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new Recaptcha],
        ]);
        $data = $request->all();
        $users = User::role('admin')->pluck('email');
        $users = [...$users, 'adnankhan125@gmail.com', 'ridaali.rfs@gmail.com', 'javeriahzakir90@gmail.com', 'adil.rfs1@gmail.com', 'nomanrfs@gmail.com', 'info@rfslogodesign.com'];
        try {
            Mail::to($users)->send(new CustomLogo($data));
            Mail::to($data['email'])->send(new CustomerMail($data));
            $this->hubspotAPI($data);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Log::error($th->getTraceAsString());
            return back()->with([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
        return redirect('thanks');
    }

    private function hubspotAPI(array $data)
    {
        $hubspot_url = 'https://api.hsforms.com/submissions/v3/integration/submit/47721008/cabd4e2f-166b-47a5-b896-c59224703cdc';

        $postData = [
            'fields' => [
                [
                    'name' => 'email',
                    'value' => $data['email']
                ],
                [
                    'name' => 'firstname',
                    'value' => $data['name']
                ],
                [
                    'name' => 'phone',
                    'value' => $data['phone'] // Corrected to phone
                ],
                [
                    'name' => 'message',
                    'value' => $data['message']
                ],
            ],
            'context' => [
                // Only include hutk if it exists
                'hutk' => isset($_COOKIE['hubspotutk']) && !empty($_COOKIE['hubspotutk']) ? $_COOKIE['hubspotutk'] : null,
                'pageUri' => 'https://rfslogodesign.com', // Current page URL
                'pageName' => $data['title'] ?? 'RFS Inquiry'
            ]
        ];

        if (isset($data['title'])) {
            $postData['fields'][] = [
                'name' => 'package_name',
                'value' => $data['title']
            ];
        }

        // Remove null values from the context
        if (empty($postData['context']['hutk'])) {
            unset($postData['context']['hutk']); // Remove hutk if it is empty or missing
        }
        // Send data to HubSpot
        $ch = curl_init($hubspot_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Execute the request
        $response = curl_exec($ch);
        // Check for errors
        if (curl_errno($ch)) {
            Log::error('HubSpot API request error: ' . curl_error($ch));
            // echo 'HubSpot API request error: ' . curl_error($ch);
        } else {
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($status_code == 200) {
                //echo "Data successfully sent to HubSpot";
            } else {
                // Display the response to debug the error
                //echo "Failed to send data to HubSpot. Status code: $status_code. Response: " . $response;
            }
        }
        // Close the connection
        curl_close($ch);
    }

    // general pages
    function siteMap()
    {
        $categories = Category::where('is_top', true)->get();
        return view('site.site-map', compact('categories'));
    }

    public function websiteDesignDevelopment()
    {
        return view('site.website-design-development');
    }

    public function customWebsiteDesignDevelopment()
    {
        return view('site.custom-website-design-development');
    }

    public function wordpressWebsiteDevelopment()
    {
        return view('site.wordpress-website-development');
    }

    public function shopifyWebsiteDevelopment()
    {
        return view('site.shopify-website-development');
    }

    public function eCommerceWebsiteDevelopment()
    {
        return view('site.e-commerce-website-development');
    }
}

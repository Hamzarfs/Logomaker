<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ContactUs;
use App\Mail\CustomLogo;
use App\Models\Category;
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
    public function customlogo()
    {
        // $categories = Category::where('is_top', 1)
        // ->with(['products' => function ($query) {
        //     $query->limit(1000); // Ensure to fetch only one product per category
        // }])
        // ->orderBy('id', 'DESC')
        // ->get();
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
        $data = $request->all();
        $users = User::role('admin')->pluck('email');
        $users = [...$users, 'adnankhan125@gmail.com', 'ridaali.rfs@gmail.com'];
        try {
            Mail::to($users)->send(new ContactUs($data));
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

    public function customLogoSubmit(Request $request)
    {
        $data = $request->all();
        $users = User::role('admin')->pluck('email');
        $users = [...$users, 'adnankhan125@gmail.com', 'ridaali.rfs@gmail.com'];
        try {
            Mail::to($users)->send(new CustomLogo($data));
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
    // general pages
    function siteMap()
    {
        $categories = Category::where('is_top', true)->get();
        return view('site.site-map', compact('categories'));
    }
}

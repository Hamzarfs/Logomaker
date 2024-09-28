<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SessionDataController extends \App\Http\Controllers\Controller
{
    public function storeSessionData(Request $request)
    {
        if ($request->has('company')) {
            $company = $request->input('company');
            Session::put('company', $company);

            if ($request->has('flow') && $request->input('flow') == "home") {
                return redirect()->route('select-color');
            } else if ($request->has('flow') && $request->input('flow') == "category") {
                return redirect()->route('logo-maker');
            }
        }

        if ($request->has('colors')) {
            $colors = $request->input('colors');
            Session::put('colors', $colors);
            return redirect()->route('select-font');
        }

        if ($request->has('font')) {
            $font = $request->input('font');
            Session::put('font', $font);
            return redirect()->route('select-category');
        }

        if ($request->has('category')) {
            $category = $request->input('category');
            Session::put('category', $category);
            return redirect()->route('logo-maker');
        }

    }

    public function storeSessionDataLogo(Request $request)
    {

        if ($request->has('company')) {
            $company = $request->input('company');
            Session::put('company', $company);
        }

        if ($request->has('category')) {
            $font = $request->input('category');
            Session::put('category', $font);
        }


        return redirect()->route('logo-maker');
    }


    public function storeSessionDataImage(Request $request)
    {
        if ($request->has('company')) {
            $company = $request->input('company');
            Session::put('company', $company);
        }

        if ($request->has('font')) {
            $company = $request->input('font');
            Session::put('font', $company);
        }

        if ($request->has('image')) {
            $image = $request->query('image');
            Session::put('image', $image);
            Session::put('image-load', 'process');
        }

        if ($request->has('product-id')) {
            $productId = $request->query('product-id');
            Session::put('product-id', $productId);
        }

        return redirect()->route('preview');
    }

    // for draft svg to set for canva
    public function setSessionImage(Request $request)
    {
        
        if ($request->has('image')) {
            $image = $request->query('image');
            Session::put('image', $image);
            Session::put('image-load', 'order');
            
        }

       
        return redirect()->route('maker');
    }

    public function storePrice(Request $request)
    {

        if ($request->has('price')) {
            $price = $request->input('price');
            Session::put('price', $price);
        }

        if ($request->has('name')) {
            $name = $request->input('name');
            Session::put('package-name', $name);
        }


        return redirect()->route('checkout');
    }
}

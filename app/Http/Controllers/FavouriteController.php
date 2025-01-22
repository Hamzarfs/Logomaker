<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FavouriteController extends Controller
{
    function add(Request $request)
    {
        try {
            $fav = auth()->user()->favourites()->create([
                'product_id' => $request->input('productId'),
            ]);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Log::error($th->getTraceAsString());
            return response()->json(['success' => false]);
        }
        return response()->json(['success' => true, 'favourite_id' => $fav->id]);
    }

    function remove(Favourite $favourite) {
        try {
            $favourite->delete();
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Log::error($th->getTraceAsString());
            return response()->json(['success' => false]);
        }
        return response()->json(['success' => true]);
    }

    function index() {
        $favourites = auth()->user()->favourites()->with('product.category')->paginate(12);
        return view('site.favourites', [
            'favourites' => $favourites
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Font;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class FontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fonts = Font::paginate(10000);
        return view('admin.fonts.index', [
            'fonts' => $fonts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fonts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /**
         * @var UploadedFile
         */
        ["font" => $file] = $request->validate([
            "font" => "required|file|extensions:otf,ttf",
        ]);

        try {
            list($name, $extension) = explode('.', $file->getClientOriginalName());
            $fullName = "$name.$extension";
            $file->move(public_path("fonts"), $fullName);

            Font::create([
                'name' => $fullName,
                'slug' => str($name)->slug().".$extension",
            ]);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            Log::error($th->getTraceAsString());
            throw $th;
        }

        return redirect()->route('admin.font.index')->with('success', "Font added successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Font $font)
    {
        File::delete(public_path("fonts/$font->name"));
        $font->delete();
        return redirect()->route('admin.font.index')->with('success', "Font deleted successfully!!");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{
    /**
     * Display the specified image.
     *
     * @param  string  $image
     * @return \Illuminate\Http\Response
     */
    public function show($image)
    {
        // Perform any necessary authorization checks here
        // Example: if (!auth()->check()) { abort(403); }

        //$path = storage_path('app/private/category-image/' . basename($image));
        $path = base_path('logos/' . basename($image)); 
         if (!file_exists($path)) {
            abort(404, 'Image not found.');
        }

        return response()->file($path, [
            'Content-Type' => mime_content_type($path),
        ]);
    }
}

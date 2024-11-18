<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = Blog::orderBy('id', 'DESC')->get();
         

        return view('admin.blog.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    try {
        // Validate request data
        $data = $request->validate([
            'title' => 'required|max:255', 
            'description' => 'required', 
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg',
            'meta_title' => 'required|max:255',
            'meta_desc' => 'required|max:255',
        ]);
      
        $storeData = [
            'title' => $request->title, 
            'description' => $request->description,      
            'image' => $request->image,           
            'meta_title' => $request->meta_title, 
            'meta_desc' => $request->meta_desc,   
        ];

        // Handle image upload if it exists
        if (Arr::exists($data, 'image')) {
            $imageName = sprintf("%s.%s", $data['title'], $data['image']->getClientOriginalExtension());
            $data['image']->move(public_path('blog'), $imageName);
            $imagePath = "blog/$imageName";
            $storeData['image'] = $imagePath;
        }
      
        // Create the blog post
        $blog = Blog::create($storeData);

        // Debugging output
        // var_dump($storeData);
        // die("AAAAAAAAAAAAA");

        // Redirect back with success message
        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully.');
    } catch (\Exception $e) {
        // Handle error and log it
        die($e->getMessage());
        \Log::error('Error creating blog: ' . $e->getMessage());

        // Optionally, you can redirect back with an error message
        return redirect()->route('admin.blog.index')->with('error', 'Failed to create blog. Please try again.');
    }
}

    public function edit($blog)
    {       
        // dd(123123);
        $data = Blog::where('id', $blog)->first();
        // dd($data);
        // $cmsData = $data->cmsData();
        // $faqData = $data->faqData();
        // $headingsData = $data->headings();
        // dd(123);
        return view('admin.blog.edit', compact('data'));
    }

    
    



 /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'title' => 'required|max:255',
                'description' => 'required',
                'image' => 'nullable|image|mimes:png,jpg,jpeg,svg',
                'meta_title' => 'required|max:255',
                'meta_desc' => 'required|max:255',
            ]);

            $blog = Blog::findOrFail($id);
            $updateData = [
                'title' => $request->title,
                'description' => $request->description,
                'meta_title' => $request->meta_title,
                'meta_desc' => $request->meta_desc,
            ];

            // Handle image replacement
            if ($request->hasFile('image')) {
                if ($blog->image && file_exists(public_path($blog->image))) {
                    unlink(public_path($blog->image));
                }
                $imageName = sprintf("%s.%s", Str::slug($request->title), $request->image->getClientOriginalExtension());
                $request->image->move(public_path('blog_images'), $imageName);
                $updateData['image'] = "blog_images/$imageName";
            }

            $blog->update($updateData);

            // Updating dynamic content (sections, FAQs, headings)
            // $blog->contents()->delete();
            DB::transaction(function () use ($request, $blog) {
                $sectionsData = $request->input('section', []);
                foreach ($sectionsData as $i => $value) {
                    foreach ($value as $key => $v) {
                        $blog->contents()->create([
                            'key' => sprintf("section-%d-%s", $i + 1, $key),
                            'value' => $v,
                        ]);
                    }
                }

            
                $headingsData = $request->input('heading', []);
                foreach ($headingsData as $i => $value) {
                    $blog->contents()->create([
                        'key' => sprintf("heading-%d", $i + 1),
                        'value' => $value,
                    ]);
                }
            });

            return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully.');
        } catch (\Exception $e) {
            die($e->getMessage());
            \Log::error('Error updating blog: ' . $e->getMessage());
            return redirect()->route('admin.blog.index')->with('error', 'Failed to update blog.');
        }
    }






    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail(decrypt($id));

            // Delete associated image
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $blog->delete();

            return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
        } catch (\Exception $e) {
            \Log::error('Error deleting blog: ' . $e->getMessage());
            return redirect()->route('admin.blog.index')->with('error', 'Failed to delete blog.');
        }
    }
}

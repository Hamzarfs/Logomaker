<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg',
            'meta_title' => 'required|max:255',
            'meta_desc' => 'required|max:255',
            'content' => 'required',
            'heading' => 'required',

            'faq' => 'array',
            'faq.*' => 'array',
            'faq.*.title' => 'nullable|string',
            'faq.*.content' => 'nullable|string',

            'section' => 'required|array',
            'section.*' => 'required|array',
            'section.*.title' => 'required|string',
            'section.*.content' => 'required|string',

            'headingg' => 'required|array',
            'headingg.*' => 'required|string',
        ]);

        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug . '-logo-maker';
        $counter = 1;

        while (Category::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $imagePath = "";

        if (Arr::exists($data, 'image')) {
            $imageName = sprintf("%s.%s", $data['name'], $data['image']->getClientOriginalExtension());
            $data['image']->move(public_path('category'), $imageName);
            $imagePath = "category/$imageName";
        }

        $category = Category::create([
            'name' => $request->name,
            'image' => $imagePath,
            'slug' => $uniqueSlug,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'content' => $request->content,
            'heading' => $request->heading,
            'is_top' => $request->is_top,
        ]);

        $sectionsData = $request->input('section');
        $faqsData = $request->input('faq');
        $headingsData = $request->input('headingg');

        DB::transaction(function () use ($sectionsData, $faqsData, $category, $headingsData) {
            foreach ($sectionsData as $i => $value) {
                foreach ($value as $key => $v) {
                    $category->contents()->create([
                        'key' => sprintf("section-%d-%s", $i + 1, $key),
                        'value' => $v,
                    ]);
                }
            }

            foreach ($faqsData as $i => $value) {
                foreach ($value as $key => $v) {
                    $category->contents()->create([
                        'key' => sprintf("faq-%d-%s", $i + 1, $key),
                        'value' => $v,
                    ]);
                }
            }

            foreach ($headingsData as $i => $value) {
                $category->contents()->create([
                    'key' => sprintf("heading-%d", $i + 1),
                    'value' => $value,
                ]);
            }
        });

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');
    }

    public function edit($category)
    {
        $data = Category::where('id', decrypt($category))->with('contents')->first();
        $cmsData = $data->cmsData();
        $faqData = $data->faqData();
        $headingsData = $data->headings();
        return view('admin.category.edit', compact('data', 'cmsData', 'faqData', 'headingsData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // dd($request->all());
        // return back()->withInput();

        // $request->validate([
        //     'name' => 'required|max:255',
        //     'meta_title' => 'required|max:255',
        //     'meta_desc' => 'required|max:255',
        //     'content' => 'required',
        //     'heading' => 'required',
        // ]);

        $data = $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg',
            'meta_title' => 'required|max:255',
            'meta_desc' => 'required|max:255',
            'content' => 'required',
            'heading' => 'required',

            'faq' => 'required|array',
            'faq.*' => 'required|array',
            'faq.*.title' => 'required|string',
            'faq.*.content' => 'required|string',

            'section' => 'required|array',
            'section.*' => 'required|array',
            'section.*.title' => 'required|string',
            'section.*.content' => 'required|string',

            'headingg' => 'required|array',
            'headingg.*' => 'required|string',
        ]);

        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug . '-logo-maker';;
        $counter = 1;

        while (Category::where('slug', $uniqueSlug)->where('id', '!=', $category->id)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $imagePath = "";

        if (Arr::exists($data, 'image')) {
            if ($category->image && file_exists($oldImage = public_path($category->image)))
                unlink($oldImage);

            $imageName = sprintf("%s.%s", $data['name'], $data['image']->getClientOriginalExtension());
            $data['image']->move(public_path('category'), $imageName);
            $imagePath = "category/$imageName";
        }

        $category->update([
            'name' => $request->name,
            'image' => $imagePath,
            'slug' => $uniqueSlug,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'content' => $request->content,
            'heading' => $request->heading,
            'is_top' => $request->is_top,
        ]);

        $category->contents()->delete();

        $sectionsData = $request->input('section');
        $faqsData = $request->input('faq');
        $headingsData = $request->input('headingg');

        DB::transaction(function () use ($sectionsData, $faqsData, $category, $headingsData) {
            foreach ($sectionsData as $i => $value) {
                foreach ($value as $key => $v) {
                    $category->contents()->create([
                        'key' => sprintf("section-%d-%s", $i + 1, $key),
                        'value' => $v,
                    ]);
                }
            }

            foreach ($faqsData as $i => $value) {
                foreach ($value as $key => $v) {
                    $category->contents()->create([
                        'key' => sprintf("faq-%d-%s", $i + 1, $key),
                        'value' => $v,
                    ]);
                }
            }
            foreach ($headingsData as $i => $value) {
                $category->contents()->create([
                    'key' => sprintf("heading-%d", $i + 1),
                    'value' => $value,
                ]);
            }
        });


        // Category::where('id', $request->id)->update([
        //     'name' => $request->name,
        //     'slug' => $uniqueSlug,
        //     'meta_title' => $request->meta_title,
        //     'meta_desc' => $request->meta_desc,
        //     'content' => $request->content,
        //     'heading' => $request->heading,
        //     'is_top' => $request->is_top,
        // ]);
        return redirect()->route('admin.category.index')->with('info', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        Category::where('id', decrypt($id))->delete();
        return redirect()->route('admin.category.index')->with('error', 'Category deleted successfully.');
    }
}

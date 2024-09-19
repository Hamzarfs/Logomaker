<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Font;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $imageService;
    /**
     * Display a listing of the resource.
     */
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;

        $category = Category::get();
        view()->share('category', $category);

        $collection = Collection::get();
        view()->share('collection', $collection);

        $data = Product::orderBy('id', 'DESC')->get();
        view()->share('data', $data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fonts = Font::all();

        return view('admin.products.create', [
            'fonts' => $fonts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'image' => 'required|image',
            'color' => 'required|hex_color',
            'font' => 'required|exists:fonts,id',
            'logo_position' => 'string|nullable',

            'logomaker' => 'required|array',
            'logomaker.*' => 'string|nullable',
            'preview' => 'required|array',
            'preview.*' => 'string|nullable',
            'canva' => 'required|array',
            'canva.*' => 'string|nullable',
        ]);

        // Generate unique slug
        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        while (Product::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        // Create new product instance
        $product = new Product();
        $product->name = $request->name;

        $product->category_id = $request->category;
        $product->slug = $uniqueSlug;
        $product->color2 = $request->color2;

        $product->background_color = $request->background_color;
   	    $product->company_name = $request->company_name;
        // $product->company_spacing = $request->company_spacing;
        // $product->company_font = $request->company_font;
        $product->slogan_name = $request->slogan_name;
        // $product->slogan_spacing = $request->slogan_spacing;
        // $product->slogan_font = $request->slogan_font;


        $product->font_id = $data['font'];
        $product->color = $data['color'];
        $product->logo_position = $data['logo_position']; // Now a single value
        $product->logomaker_left = $data['logomaker']['left'];
        $product->logomaker_top = $data['logomaker']['top'];
        $product->logomaker_font_size = $data['logomaker']['font'];
        $product->logomaker_slogan_left = $data['logomaker']['slogan_left'];
        $product->logomaker_slogan_top = $data['logomaker']['slogan_top'];
        $product->logomaker_slogan_size = $data['logomaker']['slogan_size'];
        $product->logomaker_slogan_spacing = $data['logomaker']['slogan_spacing'];


        $product->preview_left = $data['preview']['left'];
        $product->preview_top = $data['preview']['top'];
        $product->preview_font_size = $data['preview']['font'];
        $product->preview_slogan_left = $data['preview']['slogan_left'];
        $product->preview_slogan_top = $data['preview']['slogan_top'];
        $product->preview_slogan_size = $data['preview']['slogan_size'];
        $product->preview_slogan_spacing = $data['preview']['slogan_spacing'];

        $product->canva_left = $data['canva']['left'];
        $product->canva_top = $data['canva']['top'];
        $product->canva_font_size = $data['canva']['font'];
        $product->canva_slogan_left = $data['canva']['slogan_left'];
        $product->canva_slogan_top = $data['canva']['slogan_top'];
        $product->canva_slogan_size = $data['canva']['slogan_size'];
        $product->canva_slogan_spacing = $data['canva']['slogan_spacing'];

        // $product->save();
        // $productId = $product->id;
        $product->image = $this->imageService->compressAndStoreImage($request->file('image'), $uniqueSlug, 'product');
        $product->thumbnail = $this->imageService->makeImageThumbnail($product->image);
        $product->save();
        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }

    private function handleProductSliderImages($images, $productId)
    {
        if ($images) {
            $uniqueSlug = 'product-slider-img' . time();
            foreach ($images as $image) {
                $realImage = $this->imageService->compressAndStoreImage($image, $uniqueSlug, 'slider');
                ProductImage::create([
                    'product_id' => $productId,
                    'image' => $realImage,
                ]);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Product::where('id', decrypt($id))->first();
        $productImages = ProductImage::where('product_id', $data->id)->get();
        $subcategory = SubCategory::where('category_id', $data->category_id)->get();
        $fonts = Font::all();
        return view('admin.products.edit', compact('productImages', 'data', 'subcategory', 'fonts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function getsubcategory(Request $request)
    {
        $subcategory = SubCategory::where('category_id', $request->category)->get();
        return view('admin.products.subcategory', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        // $request->validate([
        //     'name' => 'required|max:255',
        //    // 'collection' => 'required',
        //     'category' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust max file size as needed

        // ]);
        // old();
        // dd($request->all());
        $rules = [
            'name' => 'required|string|max:255',
            'category' => 'required',
            'color' => 'required|hex_color',
            'font' => 'required|exists:fonts,id',
            'logo_position' => 'string|nullable',
            'logomaker' => 'required|array',
            'logomaker.*' => 'string|nullable',
            'preview' => 'required|array',
            'preview.*' => 'string|nullable',
            'canva' => 'required|array',
            'canva.*' => 'string|nullable',
        ];

        if ($request->hasFile('image')) {
            $rules['image'] = 'image|mimes:jpeg,png,jpg,svg|max:2048'; // Adjust max file size as needed
        }

        $data = $request->validate($rules);

        $baseSlug = Str::slug($request->name);
        $uniqueSlug = $baseSlug;
        $counter = 1;
        while (Product::where('slug', $uniqueSlug)->where('id', '!=', $request->id)->exists()) {
            $uniqueSlug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $product = Product::find($request->id);
        $product->name = $request->name;
        // $product->collection_id = $request->collection;
        $product->category_id = $request->category;
        // $product->sub_category_id = $request->subcategory;
        $product->slug = $uniqueSlug;

        if ($real_image = $request->file('image')) {
            // Old Image remove
            // $product = Product::where('id', $request->id)->first();
            $image_path = public_path('category-image/' . $product->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            // Added new image
            $productRealImage = 'category-image/';
            $realImage = $product->slug . "." . $real_image->clientExtension();
            $real_image->move($productRealImage, $realImage);
            $product->image = $realImage;

            $thumbnail_path = public_path('category-image/thumbnails/' . $product->thumbnail);
            if ($product->thumbnail && file_exists($thumbnail_path) ) {
                unlink($thumbnail_path);
            }
            $product->thumbnail = $this->imageService->makeImageThumbnail($product->image);
        }

        $product->font_id = $data['font'];
        $product->color = $data['color'];
        $product->color2 = $request->color2;

        $product->background_color = $request->background_color;


        $product->logo_position = $data['logo_position'];
        $product->logomaker_left = $data['logomaker']['left'];
        $product->logomaker_top = $data['logomaker']['top'];
        $product->logomaker_font_size = $data['logomaker']['font'];

        $product->company_name = $request->company_name;
        // $product->company_spacing = $request->company_spacing;
        // $product->company_font = $request->company_font;
        $product->slogan_name = $request->slogan_name;
        // $product->slogan_spacing = $request->slogan_spacing;
        // $product->slogan_font = $request->slogan_font;


        $product->logomaker_slogan_left = $data['logomaker']['slogan_left'];
        $product->logomaker_slogan_top = $data['logomaker']['slogan_top'];
        $product->logomaker_slogan_size = $data['logomaker']['slogan_size'];
        $product->logomaker_slogan_spacing = $data['logomaker']['slogan_spacing'];

        $product->preview_left = $data['preview']['left'];
        $product->preview_top = $data['preview']['top'];
        $product->preview_font_size = $data['preview']['font'];
        $product->preview_slogan_left = $data['preview']['slogan_left'];
        $product->preview_slogan_top = $data['preview']['slogan_top'];
        $product->preview_slogan_size = $data['preview']['slogan_size'];
        $product->preview_slogan_spacing = $data['preview']['slogan_spacing'];


        $product->canva_left = $data['canva']['left'];
        $product->canva_top = $data['canva']['top'];
        $product->canva_font_size = $data['canva']['font'];
        $product->canva_slogan_left = $data['canva']['slogan_left'];
        $product->canva_slogan_top = $data['canva']['slogan_top'];
        $product->canva_slogan_size = $data['canva']['slogan_size'];
        $product->canva_slogan_spacing = $data['canva']['slogan_spacing'];


        $product->save();
        // $productId = $product->id;

        // if ($request->hasFile('image')) {
        //     foreach ($request->file('image') as $image) {
        //         $realImage = $request->slug . "-" . rand(1, 9999) . "-" . date('d-m-Y-h-s') . "." . $image->getClientOriginalExtension();
        //         $path = $image->move('product-slider-images', $realImage);
        //         ProductImage::create([
        //             'product_id' => $productId,
        //             'image' => $realImage,
        //         ]);
        //     }
        // }

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the external image.
     */
    public function removeImage($id)
    {
        $product = ProductImage::where('id', $id)->first();
        $image_path = public_path('product-slider-images/' . $product->image);
        if (file_exists($image_path)) {
            //unlink($image_path);
        }
        $product->delete();
        return redirect()->back()->with('warning', 'Product image removed successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::where('id', decrypt($id))->first();
        if ($product) {
            $image_path = public_path('category-image/' . $product->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $product->delete();
        }
        // $productCollectionId = decrypt($id);
        // $imagesToDelete = ProductImage::where('product_id', $productCollectionId)->get();
        // foreach ($imagesToDelete as $image) {
        //     $imagePath = public_path('product-slider-images/' . $image->image);
        //     // Delete the record from the database
        //     $image->delete();
        //     // Unlink (delete) the image from storage
        //     if (file_exists($imagePath)) {
        //         unlink($imagePath);
        //     }
        // }
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }
}

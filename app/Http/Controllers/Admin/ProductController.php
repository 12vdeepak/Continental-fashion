<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Article;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Country;
use App\Models\Fabric;
use App\Models\Material;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Promotional;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Wear;
use App\Models\Weight;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        // Fetch categories from the database
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $materials = Material::all();
        $weights = Weight::all();
        $promotions = Promotional::all();
        $wears = Wear::all();
        $articles = Article::all();
        $sizes = Size::all();
        $colors = Color::all();
        $fabrics = Fabric::all();
        $countries = Country::all();
        $brands = Brand::all();

        return view('admin.product.create', compact('categories', 'sub_categories', 'materials', 'weights', 'promotions', 'wears', 'articles', 'sizes', 'colors', 'fabrics', 'countries', 'brands'));
    }


    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();

            // Create product
            $product = Product::create([
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'product_name' => $request->product_name,
                'product_details' => $request->product_details,
                'material_id' => $request->material_id,
                'weight_id' => $request->weight_id,
                'article_id' => $request->article_id,
                'fabric_id' => $request->fabric_id,
                'pack_poly' => $request->pack_poly,
                'country_id' => $request->country_id,
                'manufacturer_name' => $request->manufacturer_name,
                'add_stoke' => $request->add_stoke,
                'category_1_price' => $request->category_1_price,
                'category_2_price' => $request->category_2_price,
                'category_3_price' => $request->category_3_price,
                'category_4_price' => $request->category_4_price,
                'actual_product_price' => $request->actual_product_price,
                'sale' => $request->sale,
                'sale_percentage' => $request->sale_percentage,
                'promotion_id' => $request->promotion_id,
                'wear_id' => $request->wear_id,
                'remarks' => $request->remarks,
            ]);

            // Attach sizes, colors, and brands
            $product->sizes()->attach($request->size_ids);
            $product->colors()->attach($request->color_ids);
            $product->brands()->attach($request->brand_ids);

            // Handle product images
            if ($request->hasFile('product_images')) {
                $images = $request->file('product_images');
                foreach ($images as $index => $image) {
                    $path = $image->store('product_images', 'public');

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $path,
                        'is_primary' => $index === 0 // First image is primary
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('products.index')
                ->with('message', 'Product created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'An error occurred: ' . $e->getMessage())->withInput();
        }
    }




    public function edit($id)
    {
        // Fetch categories from the database
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $materials = Material::all();
        $weights = Weight::all();
        $promotions = Promotional::all();
        $wears = Wear::all();
        $articles = Article::all();
        $sizes = Size::all();
        $colors = Color::all();
        $fabrics = Fabric::all();
        $countries = Country::all();
        $brands = Brand::all();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product', 'categories', 'sub_categories', 'materials', 'weights', 'promotions', 'wears', 'articles', 'sizes', 'colors', 'fabrics', 'countries', 'brands'));
    }

    public function update(ProductRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $product = Product::findOrFail($id);

            // Update product details
            $product->update([
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'product_name' => $request->product_name,
                'product_details' => $request->product_details,
                'material_id' => $request->material_id,
                'weight_id' => $request->weight_id,
                'article_id' => $request->article_id,
                'fabric_id' => $request->fabric_id,
                'pack_poly' => $request->pack_poly,
                'country_id' => $request->country_id,
                'manufacturer_name' => $request->manufacturer_name,
                'add_stoke' => $request->add_stoke,
                'category_1_price' => $request->category_1_price,
                'category_2_price' => $request->category_2_price,
                'category_3_price' => $request->category_3_price,
                'category_4_price' => $request->category_4_price,
                'actual_product_price' => $request->actual_product_price,
                'sale' => $request->sale,
                'sale_percentage' => $request->sale_percentage,
                'promotion_id' => $request->promotion_id,
                'wear_id' => $request->wear_id,
                'remarks' => $request->remarks,
            ]);

            // Sync relationships with empty array fallbacks
            $product->sizes()->sync($request->size_ids ?? []);
            $product->colors()->sync($request->color_ids ?? []);
            $product->brands()->sync($request->brand_ids ?? []);

            // Handle image updates
            if ($request->hasFile('product_images')) {
                // Delete old images
                foreach ($product->images as $oldImage) {
                    Storage::disk('public')->delete($oldImage->image_path);
                    $oldImage->delete();
                }

                // Upload new images
                foreach ($request->file('product_images') as $index => $image) {
                    $path = $image->store('product_images', 'public');
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $path,
                        'is_primary' => $index === 0 // First image is primary
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('products.index')->with('message', 'Product updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'An error occurred while updating the product.')->withInput();
        }
    }

    public function show($id)
    {
        $product = Product::with(['category', 'subCategory', 'material', 'weight', 'brands'])->findOrFail($id);

        return view('admin.product.show', compact('product'));
    }



    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete images
        if ($product->product_images) {
            $images = json_decode($product->product_images, true);
            foreach ($images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $product->delete();
        return redirect()->route('products.index')->with('message', 'Product deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Models\Color;
use App\Models\Image;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Admin\AdminProduct;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->only(['catalog', 'sortBy', 'search']);
        $listAllProducts = AdminProduct::filterProductsAdmin($filters)->paginate(12)->appends($filters);
        $catagories = Catalog::all();
        return view("admin.products.index", compact("listAllProducts", "catagories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listCatalog = Catalog::all();
        return view('admin.products.create', compact('listCatalog'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();

        // Lưu sản phẩm mới
        $product = Product::create($validated);

        // Lưu màu sắc
        foreach ($validated['colors'] as $color) {
            Color::create([
                'product_id' => $product->id,
                'color' => $color,
            ]);
        }

        // Lưu hình ảnh
        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('', $filename, 'product_images');
            Image::create([
                'product_id' => $product->id,
                'url' => 'images/products/' . $filename,
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $catalogs  = Catalog::all();
        $product->load('colors', 'images');
        return view("admin.products.edit", compact("catalogs", "product"));
    }

    /**
     * Update the specified resource in storage.
     */


    //  bình thường sẽ xài string $id 
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'catalog_id' => 'required|integer',
            'ten' => 'required|string|max:255',
            'gia' => 'required|integer',
            'giamgia' => 'nullable|integer',
            'quantity' => 'required|integer',
            'status' => 'required|boolean',
            'motachitiet' => 'nullable|string',
            'colors' => 'nullable|array',
            'colors.*' => 'string|max:255',
            'new_colors' => 'nullable|array',
            'new_colors.*' => 'string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'delete_images' => 'nullable|array',
        ]);

        $product->update([
            'catalog_id' => $validated['catalog_id'],
            'ten' => $validated['ten'],
            'gia' => $validated['gia'],
            'giamgia' => $validated['giamgia'],
            'quantity' => $validated['quantity'],
            'status' => $validated['status'],
            'motachitiet' => $validated['motachitiet'],
        ]);

        // Update colors
        $existingColors = array_filter($request->input('colors', []), function ($value) {
            return !is_null($value) && $value !== '';
        });
        $newColors = array_filter($request->input('new_colors', []), function ($value) {
            return !is_null($value) && $value !== '';
        });
        $allColors = array_merge($existingColors, $newColors);
        $product->colors()->delete();
        foreach ($allColors as $color) {
            $product->colors()->create(['color' => $color]);
        }

        // Delete old images
        if ($request->has('delete_images')) {
            foreach ($request->input('delete_images') as $imageUrl) {
                $image = $product->images()->where('url', $imageUrl)->first();
                if ($image) {
                    // Xóa tệp ảnh từ thư mục lưu trữ
                    Storage::disk('product_images')->delete(basename($imageUrl));
                    $image->delete();
                }
            }
        }

        // Add new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('', $filename, 'product_images');

                $product->images()->create(['url' => 'images/products/' . $filename]);
            }
        }

        return back()->with('successUpdateProduct', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    // default là string $id
    public function destroy(Product $product)
    {
        // Delete images from product storage
        foreach ($product->images as $image) {
            // Xóa tệp ảnh từ thư mục lưu trữ
            Storage::disk('product_images')->delete(basename($image->url));
            $image->delete();
        }
        $product->colors()->delete();
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa thành công');
    }
}
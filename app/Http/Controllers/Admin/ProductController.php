<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\ClientLogo;
use App\Models\Admin\ProductImage;
use App\Http\Controllers\Controller;
use App\Models\Admin\ProductClient;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productList = Product::latest()->get();
        return view('admin.pages.product.product_list', compact('productList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = ClientLogo::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        return view('admin.pages.product.product_create', compact('categories', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'category_id' => 'required',
            'title' => 'required|unique:products,title',
            'description' => 'required',
            'image' => 'required',
            'multi_image' => 'required'
        ], [
            'client.required' => 'Select client name',
            'category_id.required' => 'Select cagegory name',
            'title.required' => 'Please enter product title',
            'description.required' => 'Please enter product description',
            'image.required' => 'Please enter product gallery image',
            'image.multi_image' => 'Please enter product image',

        ]);

        $productCreate = new Product();
        $productCreate->category_id = $request->input('category_id');
        $productCreate->title = $request->input('title');
        $productCreate->description = $request->input('description');
        $productCreate->slug = SlugService::createSlug(Product::class, 'slug', $request->title);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $productCreate->image = $filename;
        }

        $ok = $productCreate->save();

        $product_id = $productCreate->id;

        if ($ok == true) {
            //Multiple image upload start
            $g_image = $request->multi_image;
            foreach ($g_image as $img) {
                $dataImage = $img;
                $imageName = hexdec(uniqid()) . '.' . $dataImage->getClientOriginalName();
                $directory = 'uploads/product/gallery/';
                $dataImage->move($directory, $imageName);
                $imageUrl = $directory . $imageName;
                ProductImage::insert([
                    'product_id' => $product_id,
                    'image' => $imageUrl,
                ]);
            }

            $client_table = $request->client;
            foreach ($client_table as $item) {
                $dataClient = $item;
                ProductClient::insert([
                    'client_id' => $dataClient,
                    'product_id' => $product_id,
                ]);
            }
            return redirect()->route('product.index')->with('message', 'Product added successfully!!');
        } else {
            return redirect()->route('product.index')->with('message', 'Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productShow = Product::findOrFail($id);
        return view('admin.pages.product.product_details', compact('productShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productEdit = Product::findOrFail($id);
        $categories = Category::where('status', 1)->get();
        $clients = ClientLogo::where('status', 1)->get();
        $g_images = ProductImage::where('product_id', $id)->get();
        $p_clients = ProductClient::where('product_id', $id)->get();
        return view('admin.pages.product.product_edit', compact('productEdit', 'categories', 'clients', 'g_images', 'p_clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|',
            'description' => 'required',
            // 'image' => 'required',
        ], [
            'category_id.required' => 'Select cagegory name',
            'title.required' => 'Please enter product title',
            'description.required' => 'Please enter product description',
            // 'image.required' => 'Please enter product thumbnail image',

        ]);

        $productUpdate = Product::findOrFail($id);
        $productUpdate->category_id = $request->input('category_id');
        $productUpdate->title = $request->input('title');
        $productUpdate->description = $request->input('description');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $productUpdate->image = $filename;
        }
        $productUpdate->status = $request->input('status') == true ? '1' : '0';
        $productUpdate->save();

        return redirect()->route('product.index')->with('message', 'product update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //product delete method

    public function destroy($id)
    {

        $productDestroy = Product::findOrFail($id);
        $productDestroy->delete();
        return redirect()->route('product.index')->with('destory', 'Product Deleted Successfully!');
    }
    //product images delete method

    public function productImages($id)
    {
        $productImageDestroy = ProductImage::findOrFail($id);
        $productImageDestroy->delete();
        return redirect()->back()->with('destory', 'Product Deleted Successfully!');
    }

    //product images added method
    public function addMoreImage(Request $request)
    {
        $product_id = $request->p_id;
        $g_image = $request->multi_image;
        foreach ($g_image as $img) {
            $dataImage = $img;
            $imageName = hexdec(uniqid()) . '.' . $dataImage->getClientOriginalName();
            $directory = 'uploads/product/gallery/';
            $dataImage->move($directory, $imageName);
            $imageUrl = $directory . $imageName;
            ProductImage::insert([
                'product_id' => $product_id,
                'image' => $imageUrl,
            ]);
        }
        return redirect()->back()->with('message', 'Product image added Successfully!');
    }

    //client delete method
    public function clientDelete($id)
    {
        $clientDestroy = ProductClient::findOrFail($id);
        $clientDestroy->delete();
        return redirect()->back()->with('destory', 'client Deleted Successfully!');
    }

    //client added method

    public function addMoreClient(Request $request){
        $product_id = $request->p_id;
        
        if(ProductClient::where('client_id', $request->client)->exists()) {
            // dd('Data not added');
            return redirect()->back()->with('message', 'client already exist');
        } else {
            $client_id = $request->client;
            foreach ($client_id as $item) {
                $dataClient = $item;
                ProductClient::insert([
                    'client_id' => $dataClient,
                    'product_id' => $product_id,
                ]);
                // dd('Data added');
                return redirect()->back()->with('message', 'client added successfully!');
            }
        }
        
    }

}

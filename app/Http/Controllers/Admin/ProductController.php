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
        return view('admin.pages.product.product_create', compact('categories','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

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
        return view('admin.pages.product.product_details',compact('productShow'));
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
        $categories = Category::where('status',1)->get();
        $clients = ClientLogo::where('status',1)->get();

        $g_images = ProductImage::where('product_id', $id)->get();
        $p_clients = ProductClient::where('product_id', $id)->get();
        return view('admin.pages.product.product_edit',compact('productEdit','categories','clients', 'g_images', 'p_clients'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { {
            $productDestroy = Product::findOrFail($id);
            $productDestroy->delete();
            return redirect()->route('product.index')->with('destory', 'Product Deleted Successfully!');
        }
    }
}

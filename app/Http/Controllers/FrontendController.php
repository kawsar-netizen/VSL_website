<?php

namespace App\Http\Controllers;

use App\Models\Admin\Team;
use App\Models\Admin\About;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Serviec;
use App\Models\Admin\ClientLogo;
use App\Models\Admin\ProductImage;
use App\Models\Admin\ProductClient;
use App\Models\Admin\ClientTestimonial;

class FrontendController extends Controller
{
    public function index(){

        $sliderItem = Slider::where('status',1)->latest()->get();

        $companyAbout = About::latest()->get();

        $clientLogo = ClientLogo::where('status',1)->limit(6)->latest()->get();

        $ourService = Serviec::where('status',1)->latest()->get();

        $clientTestimonial = ClientTestimonial::where('status',1)->latest()->get();

        $ourProduct = Product::where('status',1)->limit(6)->latest()->get();

        $ourTeam = Team::where('status',1)->get();



        return view('frontend.pages.index',compact('sliderItem','companyAbout','clientLogo','ourService','clientTestimonial','ourProduct','ourTeam'));
    }

    public function productDetails($slug){
        $productSlug = Product::where('slug', $slug)->first();
        $productID = $productSlug->id;
        $productImage = ProductImage::where('product_id',$productID)->get();
        $productclient = ProductClient::where('product_id',$productID)->get();
        return view('frontend.pages.productDetails', compact('productSlug', 'productImage','productclient'));
    }
}

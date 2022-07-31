<?php

namespace App\Http\Controllers;

use App\Models\Admin\Team;
use App\Models\Admin\About;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use App\Models\Admin\Serviec;
use App\Models\Admin\ClientLogo;

class FrontendController extends Controller
{
    public function index(){

        $sliderItem = Slider::where('status',1)->latest()->get();

        $companyAbout = About::latest()->get();

        $clientLogo = ClientLogo::where('status',1)->limit(6)->latest()->get();

        $ourService = Serviec::where('status',1)->latest()->get();

        $ourTeam = Team::where('status',1)->get();

        return view('frontend.pages.index',compact('sliderItem','companyAbout','clientLogo','ourService','ourTeam'));
    }
}

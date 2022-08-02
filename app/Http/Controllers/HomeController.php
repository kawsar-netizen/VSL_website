<?php

namespace App\Http\Controllers;

use App\Models\Admin\Team;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Models\Admin\Product;
use App\Models\Admin\Serviec;
use App\Models\Admin\ClientLogo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalProduct = Product::count();
        $totalService = Serviec::count();
        $totalClient = ClientLogo::count();
        $totalEmployee = Team::count();
        $totalContact = Contact::count();
        return view('admin.pages.dashboard',compact('totalProduct','totalService','totalClient','totalEmployee','totalContact'));
    }
}

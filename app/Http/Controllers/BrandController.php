<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('welcome');
    }

    // public function profile(){
    //     return view('pages.brand-profile');
    // }
    public function dashboard(){
        // dd('Dashboard Reached');
        return view('brand-dashboard.index');
    }


    public function display(){
        return view('components.footer');
    }
}

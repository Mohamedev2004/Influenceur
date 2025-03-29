<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function profile(){
        return view('pages.influencer-profile');
    }
    public function dashboard(){
        return view('influencer-dashboard.index');
    }
}

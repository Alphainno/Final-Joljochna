<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterSetting;

class HomeController extends Controller
{
    public function landingPage(){
         $footerSettings = FooterSetting::first();
         return view('pages.landing', compact('footerSettings'));
    }

     public function aboutPage(){
         return view('pages.about');
    }

    public function othersProjects(){
         return view('pages.othersProject');
    }

     public function dashboard(){
         return view('admin.dashboard');
    }
}

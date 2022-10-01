<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function singleProduct()
    {
        return view('userEnd.singleProduct');
    }
    public function aboutUs()
    {
        return view('userEnd.aboutUs');
    }
    public function contact()
    {
        return view('userEnd.contact');
    }
    public function products()
    {
        return view('userEnd.products');
    }
    public function categories()
    {
        return view('userEnd.categories');
    }
}

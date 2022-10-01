<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function productList()
    {
        return View('admin.productList');
    }
    public function productAdd()
    {
        return View('admin.productAdd');
    }
    public function productView()
    {
        return View('admin.productView');
    }
    public function productEdit()
    {
        return View('admin.productEdit');
    }
}

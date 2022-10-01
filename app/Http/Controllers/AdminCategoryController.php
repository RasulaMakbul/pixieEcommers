<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function categoryList()
    {
        return View('admin.categoryList');
    }
    public function categoryView()
    {
        return View('admin.categoryView');
    }
    public function categoryEdit()
    {
        return View('admin.categoryEdit');
    }
    public function categoryAdd()
    {
        return View('admin.categoryAdd');
    }
}

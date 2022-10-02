<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function categoryList()
    {
        $categories = Category::all();
        return View('admin.categoryList', [
            'category' => $categories
        ]);
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

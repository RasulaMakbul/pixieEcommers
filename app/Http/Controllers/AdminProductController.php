<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
        return View('admin.productList', [
            'data' => $products
        ]);
    }
    public function productView($id)
    {
        $singleProduct = Product::find($id);
        return View('admin.productView', compact('singleProduct'));
    }
    public function destroy($id)
    {
        $singleProduct = Product::find($id);
        $singleProduct->delete();
        return redirect()->route('products.allProducts');
    }

    public function productAdd()
    {
        return View('admin.productAdd');
    }

    public function productEdit()
    {
        return View('admin.productEdit');
    }
}

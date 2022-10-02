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
    public function productAdd()
    {
        return View('admin.productAdd');
    }

    public function storeProducts(Request $request)
    {
        Product::create([
            'productName' => $request->productName,
            'categoryName' => $request->categoryName,
            'unitPrice' => $request->unitPrice,
            'stock' => $request->stock,
            'visibility' => $request->visibility ? true : false,
            'description' => $request->description
        ]);
        return redirect(route('products.allProducts'));
    }

    public function ProductEdit($id)
    {
        $product = Product::find($id);
        return view('admin.productEdit');
    }
    public function productUpdate(Request $request)
    {
        $requestData = [
            'productName' => $request->productName,
            'categoryName' => $request->categoryName,
            'unitPrice' => $request->unitPrice,
            'stock' => $request->stock,
            'visibility' => $request->visibility ? true : false,
            'description' => $request->description
        ];
        return redirect(route('products.allProducts'));
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
}

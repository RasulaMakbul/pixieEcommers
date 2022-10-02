<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singleProduct', [UserController::class, 'singleProduct']);
Route::get('/aboutUs', [UserController::class, 'aboutUs']);
Route::get('/products', [UserController::class, 'products']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/categories', [UserController::class, 'categories']);

Route::get('/blank', [AdminController::class, 'blank']);
Route::get('/error', [AdminController::class, 'error']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);


Route::get('/productList', [AdminProductController::class, 'productList'])->name('products.allProducts');
Route::get('/productView/{id}', [AdminProductController::class, 'productView'])->name('products.show');
Route::get('/product/{id}/delete', [AdminProductController::class, 'destroy'])->name('products.destroy');
Route::get('/productEdit', [AdminProductController::class, 'productEdit']);
Route::get('/product/create', [AdminProductController::class, 'productAdd'])->name('products.create');



Route::get('/categoryList', [AdminCategoryController::class, 'categoryList'])->name('categories.allCategories');
Route::get('/categoryView', [AdminCategoryController::class, 'categoryView']);
Route::get('/categoryEdit', [AdminCategoryController::class, 'categoryEdit']);
Route::get('/categoryAdd', [AdminCategoryController::class, 'categoryAdd']);


Route::get('/userList', [AdminController::class, 'userList']);
Route::get('/userView', [AdminController::class, 'userView']);

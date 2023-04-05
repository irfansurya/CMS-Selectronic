<?php

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});



Route::get('/product', [ProductController::class, 'index']);
Route::get('/products/{product:slug}', [ProductController::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Product Category',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('products', [
        'title' => "Product dari Category : $category->nama",
        'products' => $category->products->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('products', [
        'title' => "Product dari Auhor : $author->name",
        'products' => $author->products->load('category', 'author'),
    ]);
});


Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

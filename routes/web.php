<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route :: get('/products',[
    ProductsController::class, 'index'
])->name('products');

Route :: get('/products/{productName}/{id}',[
    ProductsController::class, 
    'detail'
])->where([
    'productName' => '[a-zA-Z0-9]+',
    'id' => '[0-9]+'
]);
Route :: get('/about',[
    ProductsController::class, 'about'
]);
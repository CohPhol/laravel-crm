<?php

use App\Modules\Products\Http\Controllers\Dashboard\ProductController;
use App\Modules\Products\Http\Livewire\Product;
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

Route::group([
    'prefix' => 'dashboard',
    'as' => 'products::dashboard.',
    'middleware' => [
        'auth'
    ],
], function () {
    Route::resource('products', ProductController::class);
    Route::get('prudocts', Product::class);
});

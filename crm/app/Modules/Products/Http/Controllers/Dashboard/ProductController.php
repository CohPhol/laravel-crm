<?php

namespace App\Modules\Products\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Modules\Products\Models\Product;
use App\Modules\Products\Http\Requests\CreateProduct;
use App\Modules\Products\Http\Requests\UpdateProduct;

class ProductController extends Controller
{
    public function index()
    {
        return view('products::dashboard.products.index');
    }

    public function list()
    {
        return view('products::dashboard.products.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Pagination extends Controller
{
    //
    public function products()
    {
        $data = Product::paginate(10);

        return view('pagination', ['products' => $data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mstproduct;
use App\Syscompany;
use DB;

class PackageController extends Controller
{
    //
    public function index()
    {
        $products = Mstproduct::join('mst_currency', 'mst_product.currency_id', '=', 'mst_currency.id')->select('mst_product.*',DB::raw('mst_currency.code as currency_code'))->orderBy('mst_product.rating','desc')->orderBy('mst_product.price','desc')->get();
        $company = Syscompany::first();
        
        return view('pages.packages', compact('products','company'));
    }
}

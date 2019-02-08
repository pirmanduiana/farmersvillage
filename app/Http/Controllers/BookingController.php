<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mstproduct;
use App\Trntestimonial;
use DB;
use App\Syscompany;

class BookingController extends Controller
{
    //
    public function index()
    {
        $products = Mstproduct::join('mst_currency', 'mst_product.currency_id', '=', 'mst_currency.id')->select('mst_product.*',DB::raw('mst_currency.code as currency_code'))->orderBy('mst_product.rating','desc')->orderBy('mst_product.price','desc')->limit(4)->get();
        $testimonies = Trntestimonial::all();
        $company = Syscompany::first();
        
        return view('pages.booking', compact('products','testimonies','company'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mstproduct;
use App\Trntestimonial;
use DB;

class BookingController extends Controller
{
    //
    public function get_bestoffers()
    {
        $products = Mstproduct::join('mst_currency', 'mst_product.currency_id', '=', 'mst_currency.id')->select('mst_product.*',DB::raw('mst_currency.code as currency_code'))->orderBy('mst_product.rating','desc')->orderBy('mst_product.price','desc')->limit(4)->get();
        $testimonies = Trntestimonial::all();
        
        return view('pages.booking', compact('products','testimonies'));
    }

}

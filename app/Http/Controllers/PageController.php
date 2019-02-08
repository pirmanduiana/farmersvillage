<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Syscompany;
use App\Mstproduct;

class PageController extends Controller
{
    //
    public function about_page()
    {        
        $company = Syscompany::first();
        
        return view('pages.aboutus', compact('company'));
    }

    public function product_page($product_id)
    {
        $company = Syscompany::first();
        $product = Mstproduct::where('mst_product.id',$product_id)->join('mst_currency','mst_currency.id','=','mst_product.currency_id')->join('mst_product_category','mst_product_category.id','=','mst_product.category_id')->select('mst_product.*', DB::raw('mst_currency.code as currency_code'), DB::raw('mst_product_category.name as category_name'))->first();

        return view('pages.product', compact('company','product'));
    }
}

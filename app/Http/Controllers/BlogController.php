<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Syscompany;
use App\Trnblog;
use App\Mstblogcategory;

class BlogController extends Controller
{
    //
    public function index()
    {        
        $company = Syscompany::first();
        $blog_post = Trnblog::where("published", 1)->join("admin_users","trn_blog.user_id","=","admin_users.id")->join("mst_blog_category","trn_blog.category_id","=","mst_blog_category.id")
        ->select("trn_blog.*",DB::raw("admin_users.name as user_full_name"),DB::raw("mst_blog_category.name as category_name"));
        $categories = Mstblogcategory::all();

        $all_post = $blog_post->orderBy("created_at","desc")->get();
        $latest_post = $blog_post->orderBy("created_at","desc")->limit(2)->get();
        $archives = Trnblog::select(DB::raw('YEAR(created_at) year, MONTH(created_at) month, MONTHNAME(created_at) month_name'))
        ->groupBy('year')
        ->groupBy('month')
        ->groupBy('created_at')
        ->distinct()
        ->orderBy('year', 'desc')
        ->orderBy('month', 'desc')
        ->get();
        
        return view('pages.blog', compact('company','all_post','categories','latest_post','archives'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Syscompany;

class BlogController extends Controller
{
    //
    public function index()
    {        
        $company = Syscompany::first();
        
        return view('pages.blog', compact('company'));
    }
}

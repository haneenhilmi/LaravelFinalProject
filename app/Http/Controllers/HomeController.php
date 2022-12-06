<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{

    public  function index()
    {
        return view('Admin.dashboard');
    }
    public function redirect()
    {
        
        return view('publicSite.pages.Stores');
    }
    
}

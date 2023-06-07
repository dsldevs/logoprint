<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\chapter;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
       $chapter = chapter::all();
       $categories = category::where('active', 1)->get();
       return view('admin.index', ['categories'=>$categories]);
    }
    //
}

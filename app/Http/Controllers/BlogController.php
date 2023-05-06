<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index');
    }
    public function manage()
    {
        return view('admin.blogs.manage');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyBlogController extends Controller
{
    public function index() {
        return "<h1>My Blog</h1>";
    }
}

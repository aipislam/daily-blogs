<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MyBlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Blog Name',
        'blog_text' => [
            [
                'id' => 1,
                'content' => 'jkljrklwe sadhjfdsa hdsjfhfsd dshfsjdh gruohrh ghrjk
                dskljdsflkj afsdlkjfdss fjdska dfs;lfsdal;',
            ],
            [
                'id' => 2,
                'content' => 'jkljrklwe sadhjfdsa hdsjfhfsd dshfsjdh gruohrh ghrjk
                dskljdsflkj afsdlkjfdss fjdska dfs;lfsdal;',
            ]
        ]
    ]);
});

Route::get('/hello', function () {
    return '<h1>Hello, World!</h1>';
});

Route::get('/my_page', function () {
    return "This is my page";
});
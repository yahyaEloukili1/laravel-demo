<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function blog($id = 1, $author = 'anass')
    {
        $posts = [
            1 => ['title' => '<a>learn laravel 6</a>'],
            2 => ['title' => 'learn angular 8']
        ];
        return view('posts.show', [
            'data' => $posts[$id],
            'author' => $author
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class SitemapController extends Controller
{
    public function index()
    {
        $post = posts::orderBy('updated_at', 'DESC') ->first();
        $kategori = Category::orderBy('updated_at', 'DESC')->first();

        return response()->view('sitemap.index',
            [
                'post' => $post,
                'kategori' => $kategori
            ]) -> header('Content-Type','text/xml');
    }

    public function posts()
    {
        $posts = Post::all();
        return response()->view('sitemap.posts',
            [
                'posts' => $posts,
            ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = Category::all();
        return response()->view('sitemap.categories',
            [
                'categories' => $categories,
            ])->header('Content-Type', 'text/xml');
    }

}





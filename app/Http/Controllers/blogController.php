<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function Home(){
        $all_posts = Post::select('id', 'post_title', 'post_content', 'img')->get();
        $title = 'Blog Home Page';
        return  view('Frontend.Home', compact('title', 'all_posts'));
    }

    public function Category(){
        return view('Frontend.Category', ['title' => 'Blog Home Page']);
    }

    public function Articale(){
        return view('Frontend.Articale', ['title' => 'Blog Articale Page']);
    }

    public function About(){
        return view('Frontend.About', ['title' => 'Blog About Page']);
    }

    public function Contact(){
        return view('Frontend.Contact', ['title' => 'Blog Contact Page']);
    }
}

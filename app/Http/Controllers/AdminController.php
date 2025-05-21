<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard(){
        $all_posts = Post::select('id', 'post_title', 'author_id', 'created_at')->get();
        $all_post_count = $all_posts->count();
        $all_user_count = User::count();
        $title = 'Admin Dashboard Page';
        return view('Backend.Dashboard', compact('all_posts', 'all_post_count', 'all_user_count', 'title'));
    }

    public function CreatePostView(){
        $all_category = Category::select('id', 'category_name')->get();
        $title = 'Admin Create Post Page';
        return view('Backend.CreatePost', compact('all_category', 'title'));
    }

    public function CreatePost(Request $request){
        $post = new Post;
        $post->post_title = $request->title;
        $post->slug = $request->slug;
        $post->post_category = $request->category;
        $post->post_content = $request->content;
        $post->author_id = 1;
        if($post->save()){
            return redirect()->route('SuccessView');
        } else {
            return 'Post Not Published';
        }
    }


    public function viewpost(){
        return view('Backend.ViewPost', ['title' => 'Admin View Page']);
    }

    public function editpsot(){
        return view('Backend.EditPost', ['title' => 'Admin Edit Page']);
    }

    public function deletepost(){
        return view('Backend.DeletePost', ['title' => 'Admin Delete Page']);
    }

    public function SuccessView(){
        return view('Backend.SuccessView', ['title' => 'Success Message']);
    }
}
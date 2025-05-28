<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard(){
        $all_posts = Post::select('id', 'slug', 'post_title', 'author_id', 'created_at')->get();
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

    public function ViewPost($slug){
        $post = Post::where('slug', $slug)->first();
        $title = $post->post_title;
        $category_name = Category::where('id', $post->post_category)->first();
        $category_name = $category_name->category_name;
        return view('Backend.ViewPost', compact('title', 'post', 'category_name'));
    }

    public function EditPost($slug){
        $post = Post::where('slug', $slug)->first();
        $category_name = Category::where('id', $post->post_category)->first();
        $all_category = Category::select('id', 'category_name')->get();
        $category_name = $category_name->category_name;
        $title = $post->post_title;
        return view('Backend.EditPost', compact('post', 'all_category', 'category_name', 'title'));
    }

    public function EditUpdate(Request $request){
        $post_id = Post::where('slug', $request->slug)->first();
        $post = Post::find($post_id->id);
            if (!$post) {
            return 'Post Not Found';
        }
        $post->post_title = $request->title;
        $post->slug = $request->slug;
        $post->post_category = $request->category;
        $post->post_content = $request->content;
        if($post->update()){
            return redirect()->route('SuccessView');
        }
        else{
            return 'Post Not Published';
        }
    }

    public function DeletePost($post_id){
        $post = Post::find($post_id);
            if(!$post){
                return 'Post Not Found';
            }
            if($post->delete()){
                return redirect()->route('SuccessView');
            }
            else{
                return 'Post Not Deleted';
            }
        // return view('Backend.DeletePost', ['title' => 'Admin Delete Page']);
    }

    public function SuccessView(){
        return view('Backend.SuccessView', ['title' => 'Success Message']);
    }
}
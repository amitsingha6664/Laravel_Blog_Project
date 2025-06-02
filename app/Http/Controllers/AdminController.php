<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;


class AdminController extends Controller
{
    public function Dashboard(){
        $all_posts = Post::select('id', 'slug', 'post_title', 'author_id', 'created_at')->get();
        $all_post_count = $all_posts->count();
        $all_user_count = User::count();
        $title = 'Admin Dashboard Page';
        return view('Backend.Dashboard', compact('all_posts', 'all_post_count', 'all_user_count', 'title'));
    }

    public function Create_Post_View(){
        $all_category = Category::select('id', 'category_name')->get();
        $title = 'Admin Create Post Page';
        return view('Backend.CreatePost', compact('all_category', 'title'));
    }

    public function Create_Post(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'category' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        if ($validator->passes()) {
            $post = new Post;
            $post->post_title = $request->title;
            $post->slug = $request->slug;
            $post->post_category = $request->category;
            $post->post_content = $request->content;
            $post->author_id = 1;
            if($post->save()){
                return redirect()->back()->with('success', 'Post Created Successfully');
            } else {
                return 'Post Not Published';
            }
        } 
    }

    public function View_Post($slug){
        $post = Post::where('slug', $slug)->first();
        $title = $post->post_title;
        $category_name = Category::where('id', $post->post_category)->first();
        $category_name = $category_name->category_name;
        return view('Backend.ViewPost', compact('title', 'post', 'category_name'));
    }

    public function Edit_Post($slug){
        $post = Post::where('slug', $slug)->first();
        $category_name = Category::where('id', $post->post_category)->first();
        $category_name = $category_name->category_name;
        $all_category = Category::select('id', 'category_name')->get();
        $title = $post->post_title;
        return view('Backend.EditPost', compact('post', 'category_name', 'all_category', 'title'));
    }

    public function Edit_Update(Request $request){
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
            return redirect()->back()->with('success', 'Post Edit Successfully');
        }
        else{
            return 'Post Not Published';
        }
    }

    public function Delete_Post($post_id){
        $post = Post::find($post_id);
            if(!$post){
                return 'Post Not Found';
            }
            if($post->delete()){
                return redirect()->back()->with('success', 'Post Delete Successfully');
            }
            else{
                return redirect()->back()->with('error', 'Post Could Not Be Deleted');
            }
    }

    public function Success_View(){
        return view('Backend.SuccessView', ['title' => 'Success Message']);
    }
}
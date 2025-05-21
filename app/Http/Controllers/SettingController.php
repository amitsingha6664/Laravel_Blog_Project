<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class SettingController extends Controller
{
    public function GeneralSettingsView(){
        return view('Backend.GeneralSettings', ['title' => 'General Settings']);
    }

    public function ProfileSettingsView(){
        return view('Backend.ProfileSettings', ['title' => 'Profile Settings']);
    }

    public function AddCategoryView(){
        return view('Backend.AddCategory',['title' => 'Add New Category',]);
    }

    public function AddCategory(Request $request){
        $category = new Category;
        $category->category_name = $request->category;
        $category->slug = $request->slug;
        $category->description = $request->category_description;
        if($category->save()){
            return redirect()->route('SuccessView');
        }
        else{
            return 'Category Not Add';
        }
    }

    public function test(){
        return Post::all();
    }
}

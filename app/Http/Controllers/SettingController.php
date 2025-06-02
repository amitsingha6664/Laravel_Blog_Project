<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class SettingController extends Controller
{
    public function General_Settings_View(){
        return view('Backend.GeneralSettings', ['title' => 'General Settings']);
    }

    public function Profile_Settings_View(){
        return view('Backend.ProfileSettings', ['title' => 'Profile Settings']);
    }

    public function Edit_Profile_View(){
        return view('Backend.EditProfile', ['title' => 'Profile Settings']);
    }

    public function Add_Category_View(){
        return view('Backend.AddCategory',['title' => 'Add New Category',]);
    }

    public function Add_Category(Request $request){
        $category = new Category;
        $category->category_name = $request->category;
        $category->slug = $request->slug;
        $category->description = $request->category_description;
        if($category->save()){
            return redirect()->back()->with('success', 'Category Add Successfully');
        }
        else{
            return 'Category Not Add';
        }
    }
}

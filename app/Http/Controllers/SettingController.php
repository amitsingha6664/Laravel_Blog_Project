<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class SettingController extends Controller
{
    public function General_Settings_View(){
        return view('Backend.GeneralSettings', ['title' => 'General Settings']);
    }

    public function Users_List_View(){
        $user_count = User::count();
        $all_user = User::select('id', 'name', 'role', 'created_at')->get();
        $title = 'Users List';
        return view('Backend.UsersListView', compact('all_user', 'user_count', 'title'));
    }

    public function Add_New_User(){
        $title = 'Add New User Create';
        return view('Backend.AddNewUser', compact('title'));
    }

    public function User_Create(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = $request->password;
        if($user->save()){
            return redirect()->back()->with('success', 'New User Add Successfuly!');
        }
        else{
            redirect()->back()->with('error', 'New User Add Failed');
        }
    }

    public function User_Profile_View($user_id){
        $user = User::where('id', $user_id)->first();
            if(!$user){
                return 'User Not Found';
            }
        $user = User::select('name', 'email', 'role')->first();
        $title = 'Profile View';
        return view('Backend.UserProfileView', compact('user', 'title'));
    }

    public function Delete_User($user_id){
        $user = User::find($user_id);
        if(!$user){
            return 'User Not Found';
        }
        if($user->delete()){
            return redirect()->back()->with('success', 'User Delete Successfuly');
        }
        else{
            return redirect()->back()->with('User Delete Failed');
        }
    }

    public function Profile_Settings_View(){
        $title = 'Profile Settings';
        return view('Backend.ProfileSettings', compact('title', 'all_user'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Profile;
use Auth;

class ProfileController extends Controller
{//controllerではログインしている人がプロフィールを入力してあるかをチェック登録の有無で表示するbladeを切り替える
     public function index()
    {
        $user = Auth::user();
        $profile = new Profile();
        if (Auth::guest()) {
            return redirect()->route('login');
        }else if (is_array ($profile) && count($profile)>0) {
                  return('posts.user');
        }else{
             return view('posts.createProfile');
        }
    }
    
    
    
 public function store(Request $request)
    {
        var_dump($request->input('post_name'));exit;
        $user = Auth::user();
        $profile = new Profile();
        $profile->post_id = $request->input('post_name');
        $profile->user = $user->name;
        $profile->comment = $request->input('content');
        $comment->save();
        
        return redirect()->route('posts.user');
    }   
    
    
    
}
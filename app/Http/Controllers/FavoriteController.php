<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Post;
use Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        
        $_favorite = new Favorite();
        $favorites = $_favorite::where('user', $user->name)->get();
        $favorite_list = [];
        foreach ($favorites as $f) {
            array_push($favorite_list, $f->post_id);
        }

        $posts = Post::find($favorite_list);
        return view('posts.favorite', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        
        $user = Auth::user();
        $favorite = new Favorite();
        $save_data = $favorite::where('post_id', $request->input('post_id'))->where('user', $user->name)->get();
        if (count($save_data) == 0) {
            $favorite->user = $user->name;
            $favorite->post_id = $request->input('post_id');
            $favorite->save();
        }

        return redirect()->route('favorite.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$f)
    {
        //var_dump($request->input('post_id'), $f);exit;
        $favorite = new Favorite();
        //$favorite::destroy($f);
        $favorite::where('post_id', $f)->delete();
        return redirect()->route('favorite.index');
        
    }
}

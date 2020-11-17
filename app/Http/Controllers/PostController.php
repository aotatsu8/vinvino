<?php

namespace App\Http\Controllers;

use App\Post;
use App\Wine;
use App\Like;
use App\Comment;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wines = Wine::all();
        return view('posts.create', compact('wines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        
        
        $post = new Post();
        // var_dump($request->input('wine'));exit;
        $post->title = $request->input('title');
        $post->fruits = $request->input('fruits') == null ? ''  : implode(',', $request->input('fruits'));
        $post->flower = $request->input('flower') == null ? ''  : implode(',', $request->input('flower'));
        $post->dairyspices = $request->input('dairyspices') == null ? ''  :  implode(',', $request->input('dairyspices'));
        $post->other = $request->input('other') == null ? ''  : implode(',', $request->input('other'));
        $post->estimation = $request->input('estimation') == null ? ''  : implode(',', $request->input('estimation'));
        $post->content = $request->input('content');
        $post->url = $request->input('wine') == null ? '' : $request->input('wine');
        $post->save();

        return redirect()->route('posts.show', ['id' => $post->id])->with('message', 'Post was successfully created.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $user = Auth::user();
        $comments = Comment::where('post_id', $post->id)->get();
        $likes = Like::where('post_id', $post->id)->get();
        $count = count($likes);
        
        // 自分がいいねしているかチェック
        $flg = 0;
        foreach($likes as $like) {
            if ($like->user == $user->name) {
                $flg = 1;
            }
        }
        return view('posts.show', compact('post', 'comments', 'count', 'flg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }*/

     public function edit(Post $post)
    {
        $wines = Wine::all();
        return view('posts.edit', compact('wines','post'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
         $request->validate([
           'title' => 'required',
            'content' => 'required',
        ]);
        
        
        
        $post->title = $request->input('title');
        $post->fruits = $request->input('fruits') == null ? ''  : implode(',', $request->input('fruits'));
        $post->flower = $request->input('flower') == null ? ''  : implode(',', $request->input('flower'));
        $post->dairyspices = $request->input('dairyspices') == null ? ''  : implode(',', $request->input('dairyspices'));
        $post->other = $request->input('other') == null ? ''  : implode(',', $request->input('other'));
        $post->estimation = $request->input('estimation') == null ? ''  : implode(',', $request->input('estimation'));
        $post->content = $request->input('content');
        $post->url = $request->input('wine') == null ? '' : $request->input('wine');
        $post->save();
        
        return redirect()->route('posts.show', ['id' => $post->id])->with('message', 'Post was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
         $post->delete();

        return redirect()->route('posts.index');
    }
}

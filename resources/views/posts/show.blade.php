@extends('layouts.layouts')

@section('title', 'VinVino')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
             <p class="card-text">{{ $post->fruits }}</p>
              <p class="card-text">{{ $post->flower }}</p>
               <p class="card-text">{{ $post->dairyspices }}</p>
               <p class="card-text">{{ $post->other }}</p>
                @component('posts.chart',
                    ['post'=>$post->estimation, 'key'=>'1'])
                @endcomponent
            <p class="card-text">{{ $post->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                @if($post->url =='')
                
                @else
                <a class="btn btn-outline-success"href="{{ $post->url }}" target="_blank">購入ページへGO</a>
                @endif
                <a href="/comment/{{ $post->id }}" class="btn btn-outline-primary">
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-left-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                </svg>
                    コメント
                </a>
                <form method="POST" action="/favorite" id="favorite">
                    @csrf
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                </form>
                <button class="btn btn-outline-primary" type="submit" form="favorite">
                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmarks-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
                         <path fill-rule="evenodd" d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                 </svg>
                   お気に入り追加
                </button> 
                @if ($flg == 1)
                    <form method="POST" action="/like/{{ $post->id }}" id="likedel">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                    </form>
                    <button class="btn btn-outline-primary" type="submit" form="likedel">
                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                       </svg><span>{{$count}}</span>
                    </button>
                @else
                    <form method="POST" action="/like" id="like">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                    </form>
                    <button class="btn btn-outline-primary" type="submit" form="like">
                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                       </svg><span>{{$count}}</span>
                    </button>
                @endif

                <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit</a>
                <form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @foreach ($comments as $comment)
        <div class="card">
            <div class="card-body">
                <p>{{$comment->created_at}}</p>
                <p>{{$comment->user}}</p>
                <p>{{$comment->comment}}</p>
                 <form action="/comment/{{ $comment->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    @endforeach









    <a href="/posts/{{ $post->id }}/edit">Edit</a>
    <a href="/posts">Back</a>

@endsection
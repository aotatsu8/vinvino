@extends('layouts.layouts')

@section('title', 'VinVino')

@section('content')



<h1>Favorite</h1>
@foreach ($posts as $f)
  <div class="card">
    <div class="card-body">
      <p>{{$f->title}}</p>
      <p>{{$f->fruits}}</p>
      <p>{{$f->flower}}</p>
      <p>{{$f->dairyspices}}</p>
      <p>{{$f->other}}</p>
       @component('posts.chart',
            ['post'=>$f->estimation, 'key'=>$loop->iteration])
       @endcomponent
                 <p class="card-text">{{ $f->content }}</p>
        <div class="d-flex" style="height: 36.4px;">
               @if($f->url =='')
                
                @else
                <a class="btn btn-outline-success"href="{{ $f->url }}" target="_blank">購入ページへGO</a>
                @endif
                 <a href="/posts/{{ $f->id }}" class="btn btn-outline-primary">Show</a>
            <form action="/favorite/{{ $f->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="post_id" value="{{ $f->id }}">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </div>
    </div>
  </div>
@endforeach


 










<a href="/posts">Back</a>
@endsection
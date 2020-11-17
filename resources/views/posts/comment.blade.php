@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')



<h1>Comment</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div>
    <form method="POST" action="/comment">
        @csrf
        <div class="form-group">
            <input type="hidden" name="post_id" value="{{$id}}">
            <textarea class="form-control" name="content">{{old('content')}}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</div>
    <a href="/posts">Back</a>
    @endsection
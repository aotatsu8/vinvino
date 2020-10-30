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
    <div class="form-group">
        <textarea class="form-control" name="content">{{old('content')}}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</div>
    <a href="/posts">Back</a>
    @endsection
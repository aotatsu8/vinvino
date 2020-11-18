@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>Profile</h1>
<form>
<div class="card">
  <div class="card-header">
    <h2> {{$profile->name}} </h2>
  </div>
  <div class="card-body">
    <p class="card-text"> {{$profile->myself}} </p>
  </div>
</div>
</form>







@endsection
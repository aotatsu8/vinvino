@extends('layouts.layouts')

@section('title', 'VinVino')

@section('content')

<h1>My Profile</h1>
<div class="card">
  <!--<img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">-->
  <div class="card-body">
      <form method="POST" action="/user">
      @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">お名前</label>
    <input type="text" class="form-control" name="post_name" id="formGroupExampleInput"  placeholder="名前を入力してください">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">自己紹介</label>
     <textarea class="form-control" name="content" placeholder="自己紹介を入力してください"></textarea>
  </div>
   <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
</div>
</div>
<a href="/posts">Back</a>







@endsection
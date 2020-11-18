@extends('layouts.layouts')

@section('title', 'VinVino')

@section('content')

<h1>Editing Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="card">
    <div class="card-body">
<form method="POST" action="/posts/{{ $post->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
    </div>
    
    
    
    
    
    
    
    <select name="wine">
        <option value="">選択なし</option>
        @foreach ($wines as $wine)
            <option value="{{ $wine->url }}">
                {{ $wine->name }}
            </option>
        @endforeach
    </select>
    
    
     {{--<div class="form-group">
        <button class="btn btn-outline-primary">
            <svg width="1.0625em" height="1em" viewBox="0 0 17 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg>
        </button>
    </div>--}}
     <div class="form-group" >
        <label for="exampleCheckBox">Aroma</label>
        <br>
        <p>果物・ナッツ</p>
    <div class="form-check form-check-inline" >
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="レモン">
         <label class="form-check-label" for="inlineCheckbox1">レモン</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="ライム">
         <label class="form-check-label" for="inlineCheckbox1">ライム</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="オレンジ">
         <label class="form-check-label" for="inlineCheckbox1">オレンジ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="グレープフルーツ">
         <label class="form-check-label" for="inlineCheckbox1">グレープフルーツ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="イチゴ">
         <label class="form-check-label" for="inlineCheckbox1">イチゴ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="ラズベリー">
         <label class="form-check-label" for="inlineCheckbox1">ラズベリー</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="ダークチェリー">
         <label class="form-check-label" for="inlineCheckbox1">ダークチェリー</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="カシス">
         <label class="form-check-label" for="inlineCheckbox1">カシス</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="イチジク">
         <label class="form-check-label" for="inlineCheckbox1">イチジク</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="パイナップル">
         <label class="form-check-label" for="inlineCheckbox1">パイナップル</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="バナナ">
         <label class="form-check-label" for="inlineCheckbox1">バナナ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="パッションフルーツ">
         <label class="form-check-label" for="inlineCheckbox1">パッションフルーツ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="ライチ">
         <label class="form-check-label" for="inlineCheckbox1">ライチ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="マンゴー">
         <label class="form-check-label" for="inlineCheckbox1">マンゴー</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="桃">
         <label class="form-check-label" for="inlineCheckbox1">桃</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="洋梨">
         <label class="form-check-label" for="inlineCheckbox1">洋梨</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="りんご">
         <label class="form-check-label" for="inlineCheckbox1">りんご</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="アプリコット">
         <label class="form-check-label" for="inlineCheckbox1">アプリコット</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="アーモンド">
         <label class="form-check-label" for="inlineCheckbox1">アーモンド</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="ヘーゼルナッツ">
         <label class="form-check-label" for="inlineCheckbox1">ヘーゼルナッツ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="レーズン">
         <label class="form-check-label" for="inlineCheckbox1">レーズン</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="fruits[]" value="コンポート">
         <label class="form-check-label" for="inlineCheckbox1">コンポート</label>
    </div>
    <p>花</p>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="flower[]" value="バラ">
         <label class="form-check-label" for="inlineCheckbox1">バラ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="flower[]" value="すみれ">
         <label class="form-check-label" for="inlineCheckbox1">すみれ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="flower[]" value="アカシア">
         <label class="form-check-label" for="inlineCheckbox1">アカシア</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="flower[]" value="ジャスミン">
         <label class="form-check-label" for="inlineCheckbox1">ジャスミン</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="flower[]" value="ユーカリ">
         <label class="form-check-label" for="inlineCheckbox1">ユーカリ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="flower[]" value="シダ">
         <label class="form-check-label" for="inlineCheckbox1">シダ</label>
    </div>
    <p>乳製品・スパイス</p>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dairyspices[]" value="バター">
         <label class="form-check-label" for="inlineCheckbox1">バター</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dairyspices[]" value="パン">
         <label class="form-check-label" for="inlineCheckbox1">パン</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dairyspices[]" value="シナモン">
         <label class="form-check-label" for="inlineCheckbox1">シナモン</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dairyspices[]" value="コリアンダー">
         <label class="form-check-label" for="inlineCheckbox1">コリアンダー</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dairyspices[]" value="黒胡椒">
         <label class="form-check-label" for="inlineCheckbox1">黒胡椒</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="dairyspices[]" value="バニラ">
         <label class="form-check-label" for="inlineCheckbox1">バニラ</label>
    </div>
    <p>その他</p>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" name="other[]" value="タバコ">
         <label class="form-check-label" for="inlineCheckbox1">タバコ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="ピーマン">
         <label class="form-check-label" for="inlineCheckbox1">ピーマン</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="マッシュルーム">
         <label class="form-check-label" for="inlineCheckbox1">マッシュルーム</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="カカオ">
         <label class="form-check-label" for="inlineCheckbox1">カカオ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]"  value="コーヒー">
         <label class="form-check-label" for="inlineCheckbox1">コーヒー</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]"  value="紅茶">
         <label class="form-check-label" for="inlineCheckbox1">紅茶</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="キャラメル">
         <label class="form-check-label" for="inlineCheckbox1">キャラメル</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="なめし革">
         <label class="form-check-label" for="inlineCheckbox1">なめし革</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="ジビエ">
         <label class="form-check-label" for="inlineCheckbox1">ジビエ</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="火打ち石">
         <label class="form-check-label" for="inlineCheckbox1">火打ち石</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="石灰">
         <label class="form-check-label" for="inlineCheckbox1">石灰</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="ゼラニウム">
         <label class="form-check-label" for="inlineCheckbox1">ゼラニウム</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="硫黄">
         <label class="form-check-label" for="inlineCheckbox1">硫黄</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="腐葉土">
         <label class="form-check-label" for="inlineCheckbox1">腐葉土</label>
    </div>
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="other[]" value="干し草">
         <label class="form-check-label" for="inlineCheckbox1">干し草</label>
    </div>
    </div>
    
     <div class="form-group">
        <label for="exampleEstimation">Estimation</label>
        <p>甘味</p>
        <input type="range" name="estimation[]" class="form-control-range">
         <p>渋味</p>
        <input type="range" name="estimation[]" class="form-control-range">
         <p>酸味</p>
        <input type="range" name="estimation[]" class="form-control-range">
         <p>香り</p>
        <input type="range" name="estimation[]" class="form-control-range">
         <p>余韻</p>
        <input type="range" name="estimation[]" class="form-control-range">
         <p>ボディ</p>
        <input type="range" name="estimation[]" class="form-control-range">
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea class="form-control" name="content">{{ old('content') == '' ? $post->content : old('content') }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
</div>
</div>
<a href="/posts/{{ $post->id }}">Show</a> | 
<a href="/posts">Back</a>

@endsection
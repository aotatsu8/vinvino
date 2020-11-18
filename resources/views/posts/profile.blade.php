@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@master/devicon.min.css"></head>

<style>

header {
  display: block;
  overflow: hidden;
  position: relative;
  padding-bottom: 2em;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px; }

  .profile {
  width: 100%;
  margin: 3em auto 1em auto;
  border-radius: 8px;
  padding-bottom: 1.5em;
  background-color: #dde1e2;
  box-shadow: #bdc3c7 0 5px 5px; }
  
  .bg {
    width:100%;
    height:50%;
  border-bottom: 8px solid #5cc0ff; }

.bio:hover > .desc {
  cursor: pointer;
  opacity: 1; }

.avatarcontainer {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  width: 150px;
  height: 200px;
  display: block; }

.avatar {
  width: 100%;
  height:100%;
  border: 8px solid #5cc0ff;
  border-radius: 50%;
  overflow: hidden;
  position: relative; }

.data {
  margin-top: .6em;
  color: #81878b; }
  .data li {
    width: 32%;
    text-align: center;
    display: inline-block;
    font-size: 1.5em;
    font-family: 'Lato';
   }
    .data li:last-child {
      border: none; }
    .data li span {
      display: block;
      text-transform: uppercase;
      font-family: 'Quicksand';
      font-size: .5em;
      margin-top: .6em;
      font-weight:700;
    }

.desc {
  position: absolute;
  top: 0;
  background-color: rgba(0, 0, 0, 0.6);
  width: 100%;
  height: 100%;
  padding: 1.2em 1em 0 1em;
  color: white;
  text-align: center;
  opacity: 0;
  }
  .desc h3 {
    font-family: "Lato";
    font-size: 1.2em;
    margin-bottom: .5em; }
  .desc p {
    font-size: .9em;
    font-family: 'Quicksand';
    line-height: 1.5em; }

.follow {
 margin: 1.5em auto 0 auto;
  background-color: #2589cc;
  width: 150px;
  color: white;
  font-family: "Lato";
  text-align: center;
  padding: .5em;
  border-radius: 5px;}
  .follow:hover {
    background-color: #167abd;
    cursor: pointer; }
    
    .sns{
    text-align:center;
    }
   button.btn.btn-primary {
    margin: 1rem;
}
    
  
</style>
<body>
<script>
  //Follow Button Effect

$(document).ready(

    function iniciar(){
    $('.follow').on("click", function(){
        $('.follow').css('background-color','#34CF7A');
        $('.follow').html('<div class="icon-ok"></div> Following');
    }); 
    }

);
</script>
    <div class="profile">
        <header>
            <div class="bio">
        <img src="{{ asset('../storage/img/DSC_0010.jpg') }}" alt="background" class="bg">
                <div class="desc">
                    <h3>自己紹介</h3>
                    <p>1992.11.4 長野県生まれ東京都在住。18歳の時に上京。<br>
                    このシステムはLaravelの学習の為に、初めて作った作品です。<br>
                    ワイン好きの人が自分が飲んだワインを記録し、それについて他ユーザーが<br>
                    コメントやいいねができ、ワインに詳しくない人がこれを見て参考にできるような作品を作りました。<br>
                    趣味はスポーツ、音楽、散歩、お酒。<br>
                    お酒は特にワインが好きで<br>
                    2019年にソムリエ資格を取得。<br></p>
                </div>
            </div>
            
            <div class="avatarcontainer">
                <img src="{{ asset('../storage/img/DSCF8436-Edit.jpg') }}" alt="avatar" class="avatar">
                        <div class="icon-twitter"></div>
            </div>


        </header>

        <div class="sns">
           <button type="button" class="btn btn-primary"><i class="devicon-twitter-plain"></i>Twitter</button>
           <button type="button" class="btn btn-primary"><i class="devicon-facebook-plain"></i>Facebook</button>
        </div>

    </div>
    
</body>
</html>



<a href="/posts">Back</a>


@endsection
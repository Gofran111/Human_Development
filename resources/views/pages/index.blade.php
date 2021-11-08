@extends('layouts.master')
{{-- @section('title')
    <p>this is paragraph</p>
@endsection --}}

@section('content')

<html>
    <head>
    <title>Lotus</title>
    <!--meta  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keyword"   content="">
     <!-- files css -->
     <link rel="stylesheet" href="css/Css/home.css" />

   
    </head>
    <body>

<!-- home section -->
@if ($img == 0)
   <div class="home"> 
@else
   @if ($img == 1)
   <div class="home home1"> 
   @else
   @if ($img == 2)
   <div class="home home2">   
   @else
   @if ($img == 3)
   <div class="home home3"> 
   @else
   @if ($img == 4)
   <div class="home home4">  
   @else
   @if ($img == 5)
   <div class="home home5">  
   @else
       
   @endif  
   @endif   
   @endif  
   @endif    
   @endif
@endif

<div class="overlay">
    <div class="home-content">
<h2 class="title">Gaining knowledge of various mediums creates<br>
     a combination of amusement and learning</h2>
<p class="home-desc">Attention to health psychological<br> priority and not well well</p><br>

    @csrf
    @guest
  <a class="btn ben-start hover-opacity" href="{{ route('login') }}" title="Log in">Log in </a>
    @endguest
    </div><!-- ./home-content -->
    </div><!-- ./overlay -->
</div><!-- ./home -->


<div class="section_header">
    <div class="text"><br>
    <h2 class="h2"><a href="{{url('/about')}}" title="Book page">Books</a></h2><br>
   <pre>         Are you having problems in your life?
    You're lost and don't know what 
        you want We have everything you need
        A wide variety of books on psychology
    and psychological counseling that 
can help you overcome all that</pre>
    </div></div>
<!--image move for books-->
<div id="im">
<div id="box">
    <img src="css/1.jpg">
</div>

<!--<div class="i">
    <img src="css/prev.jpg" width="10px" height="10px" class="prew" onclick="prewimge()">
</div>
<div class="i1">
    <img src="css/next.jpg" width="10px" height="10px" class="next" onclick="nextimge()">
</div>--><!-- ./i -->
</div><!--./im-->

    <div class="text2">
        <h1 class="h1"><a href="{{url('/services')}}" title="Videos page">Videos</a></h1><br><br>
        <pre >      Looking for learning and knowledge in a modern way,
      full of fun and new experiences You will find
      with us everything you want from the most efficient 
      specialists and researchers in the field of human
      development,including guiding videos to help you overcome
      the problems of daily life, and educational lectures.
      To be aware of everything new about human development
</pre></div>

<!--image move for course-->
    <div id="im2">
<div id="box2">
    <img src="css/1c.jpg">
</div>
<!--
<div class="i2">
    <img src="css/prev.jpg" width="10px" height="10px" class="prew" onclick="prewimge()">
</div>
<div class="i3">
    <img src="css/next.jpg" width="10px" height="10px" class="next" onclick="nextimge()">
</div>-->
</div>

<script type="text/javascript" src="js/img.js"></script>
<script type="text/javascript" src="js/imgcourse.js"></script>

</body>

</html>







    @endsection
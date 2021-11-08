@extends('layouts.master')

@section('content')
<style>
    span{
        font-family:serif;
        font-weight: BOLD; 
        font-size: 20px;
        
    }
    h3{
        color: blueviolet;
        font-style: italic;
        
    }

    .d1{
        background-color: rgb(206, 204, 204);
        width: 30%;
        height: 10rem;
        padding: 10px;
        border-radius: 10%;
        overflow:auto;
    }
    .hr{
        margin-top: 18% ;
        background-color: #444;
        border: 0;
        height: 1px;
    }
    .span{
        font-size: 15px;
        color:crimson;
    }
    h6{
        font-weight: bold;
        color: blue;
    }
    input[type="image"]{
        width: 4rem;
        height: 3rem;
        
    }
    
</style>

<div class="float-right d1">
       <h6>Contact With Developers On Facebook</h6>
       <span class="span">Admin: </span><a href="https://www.facebook.com/profile.php?id=100027146480897" title="https://www.facebook.com">Jofran Ar</a><br>
       <span class="span">Admin: </span><a href="https://www.facebook.com/profile.php?id=100025741574074" title="https://www.facebook.com">Bayan Kahttab</a><br>
       <span class="span">Editor: </span><a href="https://www.facebook.com/profile.php?id=100008982125483" title="https://www.facebook.com">Kadija Ahme</a><br>
       <span class="span">Editor: </span><a href="" title="https://www.facebook.com">Alisar Badoore</a><br>
    </div>
  

    <h1>This is Editor and Admin Page</h1>
    
    <h3>Here You Can Change Settinge : </h3>
<hr>
   
    <div>
        <form action="/settings" method="POST">
            {{ csrf_field() }}
            <span>Stop Comments:</span>
             <input type="checkbox" onChange="this.form.submit()" name="stop_comments" {{ $stop_comments == 1 ? 'checked' : ' ' }}>
             <br>
             <span>Change Home Image: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="image" src="css/img/nn.jpg" for="img">
             <input type="image" src="css/img/a.jpg" for="img1">
             <input type="image" src="css/img/66.jpg" for="img2">
             <input type="image" src="css/img/88.jpeg" name="img3">
             <input type="image" src="css/img/a5.jpg" name="img4">
             <input type="image" src="css/img/44.jpeg" name="img5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox" name="img"  onChange="this.form.submit()" {{ $img == 0 ? 'checked' : ' ' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox" name="img1" onChange="this.form.submit()" {{ $img == 1 ? 'checked' : ' ' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox" name="img2" onChange="this.form.submit()" {{ $img == 2 ? 'checked' : ' ' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox" name="img3" onChange="this.form.submit()" {{ $img == 3 ? 'checked' : ' ' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox" name="img4" onChange="this.form.submit()" {{ $img == 4 ? 'checked' : ' ' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="checkbox" name="img5" onChange="this.form.submit()" {{ $img == 5 ? 'checked' : ' ' }}>
        </form>
    </div>

 <div class="float-right d1">
    <h6>Contact With Editors Team On Thier Email</h6>
    @foreach ($users as $user)
        @if($user->hasRole('Editor') )
           <span class="span" style="color: black;">{{$user->name}} </span><a href="https://gmail.com" title="https://gmail.com"> {{$user->email}}</a><br>
        @endif
    @endforeach
</div>
   <hr class="hr">
   <script>
    var thed = new Date(),
    MyIso = thed.toLocaleString();
    document.write(MyIso);
   </script>
@endsection

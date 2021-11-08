@extends('layouts.master')

@section('content')


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Title</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($posts as $post)
                          <tr>
                              <th scope="row">{{$post->id}}</th>
                              <td>{{$post->title}}</td>
                              <td><a href="{{'/posts/' . $post->id}}" class="btn btn-primary">Show post</a></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .title {
                font-size: 84px;
            }
        .content {
                text-align: center;             
                text-decoration: none;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-top: 20%;
                margin-bottom: 30px;
            }
            body{
                background-image: url(css/img/beauty-lotus-flower-abstract-logo-vector-5511559.jpg);
                background-repeat: no-repeat;
                background-size: 50%;
                position: relative;
            }
        
</style>
 </head>
 <body id="p">
    <div class="content">
        <div class="title m-b-md">
           <a style="color:black" href="{{url('/')}}" title="Louts Home" id="a">  Human Development </a>
        </div>

        <div class="links">
            <a href="{{url('/')}}" title="Louts Home" id="a1">Home</a>
            <a href="{{url('/about')}}" title="Louts Books" id="a2">Books</a>           
            <a href="{{url('/services')}}" title="Louts Videos" id="a3">Videos</a>
          
        </div>
 </body>
 </html>

@endsection

@extends('layouts.master')
@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>{{$data->name}}</h1>
   
<hr>
<iframe src="{{url('storage/books/'.$data->file)}}" frameborder="1" style="width: 100%; height:1000px;"></iframe>
<br>
<h3> {{$data->description}}</h3>
<hr>
<div class="card card-default">
    <div class="card-header">Comments</div>
<div class="card-body">
    @foreach ($data->comments as $comment)
        <div style=" border: 3px dotted orange;; padding: 8px;display: block; margin:5px;">
           <span style="color: rgb(61, 12, 32);font-weight: bold; padding:1px;">{{$comment->user->name}} : </span> 
            {{$comment->body}}
            @auth
              @if(auth()->user()->id ==$comment->user_id)
             <small class="text-muted">   
                 <form action="{{$data->id}}/{{$comment->id}}/destroy" method="POST"class="float-right" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn-danger ">Delete</button>
                </form>
                @endif
                @endauth
           <p style="float:right; margin:3px;">{{$comment->created_at}} </p></small>
        </div>
    @endforeach
</div>
</div>
<hr>
@if ($stop_comments == 1)

   <h3>OOPSS!!!....Coments Are Currently Stoped </h3>
    
@else
    @auth
    <form action="{{'/view/' . $data->id }}/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="body" ><h4>Write a comment</h4></label>
            <textarea type="body" name="body" cols="30" rows="2" class="form-control"></textarea>
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    @endauth
@endif



<div style="height: 100px;"></div>
</body>
</html>


@endsection
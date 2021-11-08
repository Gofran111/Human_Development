@extends('layouts.master')

@section('content')

<div class="container" style="margin-top: 5%;">
  <h2>Laravel signal file upload and save</h2>
  <hr>
  <form class="form-horizontal" action="{{url('about')}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- {!!Form::open(array('url'=>'insertfile', 'method'=>'POST' ,'class'=>'form-horizontal', 'files'=>true)) !!} --}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control file_title_c" id="file_title_c" placeholder="Enter Name">
      </div>
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-10">
        <textarea type="text" name="description" cols="30" rows="4" class="form-control file_title_c" placeholder="write description auther ...  "></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload:</label>
      <div class="col-sm-10">          
        <input type="file" class="filename"  name="file">
      </div>
    </div>

    {{-- <div class="form-group">
      <label class="control-label col-sm-2" for="img">Book Image:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control-file"  name="img" id="img">
      </div>
    </div> --}}

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  {{-- {!!Form::close() !!} --}}
</div>


@endsection

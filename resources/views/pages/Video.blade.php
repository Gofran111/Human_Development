@extends('layouts.master')

@section('content')
   {{-- <h1>{{$title}}</h1>
   <ul class="list-group">
       @if (count($services) > 0)
        @foreach ($services as $service)
            <li>{{$service}}</li>
        @endforeach
       @endif
   </ul> --}}
   <html>
<head>
 
       <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/HD.css" />    
</head>
<body>
  <a href=top></a>
      <div id="image">
        <img src="css/img/1.jpg"  width="1200px" height="400px">
     </div>
     <hr>
  <h2 style="display:inline;">Human Development Videos </h2>
  @if(Auth::check() && (Auth::user()->hasRole(['Admin','Editor'])|| Auth::user()->hasRole('Editor')))
  <small>To Upload some Videos....<a href="posts/upload">Upload</a></small>
  @endif
 <br><br>
  
     <form action="/services" method="POST">
      @csrf
             <input placeholder="Search or enter name or auther" class="c0123 c0125 mt-3 border-bottom" type="text" id="q" name="q" style="width: 90%; height:2rem;border-color: transparent;">
             <button class="c0126 c0136 c0129 c0137 c0110 border-bottom" aria-hidden="true" aria-disabled="true" aria-label="Search or enter web address" tabindex="-1" style="height:2rem;border-color: transparent;"><span class="c0132 c0138"><svg viewBox="0 0 16 16" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;"><path d="M10.5 0C11.0052 0 11.4922 0.0651042 11.9609 0.195312C12.4297 0.325521 12.8672 0.510417 13.2734 0.75C13.6797 0.989583 14.0495 1.27865 14.3828 1.61719C14.7214 1.95052 15.0104 2.32031 15.25 2.72656C15.4896 3.13281 15.6745 3.57031 15.8047 4.03906C15.9349 4.50781 16 4.99479 16 5.5C16 6.00521 15.9349 6.49219 15.8047 6.96094C15.6745 7.42969 15.4896 7.86719 15.25 8.27344C15.0104 8.67969 14.7214 9.05208 14.3828 9.39062C14.0495 9.72396 13.6797 10.0104 13.2734 10.25C12.8672 10.4896 12.4297 10.6745 11.9609 10.8047C11.4922 10.9349 11.0052 11 10.5 11C9.84896 11 9.22396 10.8906 8.625 10.6719C8.03125 10.4531 7.48438 10.138 6.98438 9.72656L0.851562 15.8516C0.752604 15.9505 0.635417 16 0.5 16C0.364583 16 0.247396 15.9505 0.148438 15.8516C0.0494792 15.7526 0 15.6354 0 15.5C0 15.3646 0.0494792 15.2474 0.148438 15.1484L6.27344 9.01562C5.86198 8.51562 5.54688 7.96875 5.32812 7.375C5.10938 6.77604 5 6.15104 5 5.5C5 4.99479 5.0651 4.50781 5.19531 4.03906C5.32552 3.57031 5.51042 3.13281 5.75 2.72656C5.98958 2.32031 6.27604 1.95052 6.60938 1.61719C6.94792 1.27865 7.32031 0.989583 7.72656 0.75C8.13281 0.510417 8.57031 0.325521 9.03906 0.195312C9.50781 0.0651042 9.99479 0 10.5 0ZM10.5 10C11.1198 10 11.7031 9.88281 12.25 9.64844C12.7969 9.40885 13.2734 9.08594 13.6797 8.67969C14.0859 8.27344 14.4062 7.79688 14.6406 7.25C14.8802 6.70312 15 6.11979 15 5.5C15 4.88021 14.8802 4.29688 14.6406 3.75C14.4062 3.20312 14.0859 2.72656 13.6797 2.32031C13.2734 1.91406 12.7969 1.59375 12.25 1.35938C11.7031 1.11979 11.1198 1 10.5 1C9.88021 1 9.29688 1.11979 8.75 1.35938C8.20312 1.59375 7.72656 1.91406 7.32031 2.32031C6.91406 2.72656 6.59115 3.20312 6.35156 3.75C6.11719 4.29688 6 4.88021 6 5.5C6 6.11979 6.11719 6.70312 6.35156 7.25C6.59115 7.79688 6.91406 8.27344 7.32031 8.67969C7.72656 9.08594 8.20312 9.40885 8.75 9.64844C9.29688 9.88281 9.88021 10 10.5 10Z"></path></svg></span></button>
            </form>
 {{-- Don't chang this  --}}
 {{-- -----------------------------------------------------------------------------------   --}}
<br><br>
 <div class="row">
   <div class="col-md-9">
     <div class="row">
       <div class="row">

        @csrf
           @foreach ($videos as $video)
             <div class="col-md-6">
                <div class="col-mb-4"  style="min-width:17rem;">
                       {{-- <img src="{{asset('storeage/coverImages/'.$data->image)}}" alt="" height="200"> --}}
                   <div class="card-header bg-dark text-white">
                           {{$video->name}}
                   </div>  
                   <div class="card-body mb-4">
                         <div class="card-title">
                           <h4> {{$video->description}}</h4>
                         </div>
                         <div class="card-text">
                           {{$video->file}}
                         </div>
                         <hr><hr>
                         <a href="{{'/viewVideo/' . $video->id}}" class="btn btn-primary float-left mr-2"> View</a>
                         @if(Auth::check() &&( Auth::user()->hasRole(['Admin','Editor']) ||Auth::user()->hasRole('Editor')))
                         <form action="/pages/{{$video->id}}/deleteVideo" method="POST" >
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger float-left">Delete</button>
                        </form>
                        @else
                              @auth
                                    <a href="{{'/pages/downloadVideo/' . $video->file}}" class="btn btn-success float-left"> Download</a>
                              @endauth
                        @endif
             </div>
                 </div>
               </div>

               <a href=#top>
                <img src="css/11.webp" width=100 height="200" class="style" >
              </a>
           @endforeach
     
   </div>
  </div>
     
   </div>
  <div class="col-md-3">
    <div class="card ml-3" style="max-width:10rem; ">
      <div class="card-header bg-info text-white">Stats.</div>
         <div class="card-body">
           <p class="card-text">All Videos: {{$count}}</p>
         </div>
    </div>
 </div>


</div>

{{-- <div class="row">
 <div class="col-md-12 d-flex justify-content-center">
   {{$video->links()}}
 </div>
</div> --}}



<div style="height: 100px;"></div>
</body>
</html>
@endsection
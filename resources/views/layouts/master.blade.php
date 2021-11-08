<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ env('APP_NAME', 'HumanDevelopment') }}</title>
</head>
<body>
    @include('includes.navabar')
   

    <div class="container">
         <div class="mb-3"></div>
             <hr>
        @include('includes.messages')
    
        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>


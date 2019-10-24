<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $seo['title'] }}</title>

    <!-- Styles CSS -->
    <!-- bootstrap css -->    
    <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <!-- awesome css -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- my mine.css -->
    <link rel="stylesheet" href="{{ asset('public/css/mine.css') }}">

    @yield('css')

</head>
<body>
    <header>
        <img src="{{ asset('public/images/scholarship.jpg')}}" alt="">
    </header>
    <div class="container">
       @yield('main')
    </div>
<!-- Scripts JS -->   
<!-- bootstrap script -->
<script src="{{ asset('public/js/app.js') }}"></script>
<!-- jquery scripts -->
<script src="{{ asset('public/js/jQuery-2.2.0.min.js') }}"></script>
<script src="{{ asset('public/js/jquery-ui.min.js') }}"></script>  
<!-- Sweet Alert script -->
<script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script>

@yield('js')

</body>
</html>

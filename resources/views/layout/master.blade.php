<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset(path:'/bootstrap/css/bootsrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    

</head>

<body>
<div class="d-flex flex-column min-vh-100">
    {{-- baris1 header/navbar --}}
    @include('layout.menubar')
    
    {{-- baris2 konten --}}
    <div class="flex-grow-1">
        @yield('content')
    </div>

    {{-- baris3 footer --}}
    @include('layout.footer')
</div>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    @extends('layout.baseplate')
    @section('content')
    @if(session('success'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('success') }}
        
    </div>
@endif

<div class="pt-3">
    
<div class=" py-3 container border rounded" style="background-color: purple;">
    
    <h4 class="fw-bold text-center d-flex justify-content-center pt-3 text-white">STATISTIC</h4>
    <div class="row pt-5">
       @foreach ($sa as $item)
       <div class="container-fluid col-4 bg-dark p-4 text-white border rounded fw-bold"><span class="bg-white rounded p-3 px-4 text-black">{{ $fotocount }}</span>
    Total Foto Created
    </div>
       <div class="container-fluid col-4 bg-dark p-4 text-white border rounded fw-bold"><span class="bg-white rounded p-3 px-4 text-black">{{ $albumcount }}</span>
    Total Album Created
    </div>
    
       @endforeach

    
    </div>    
<div class="pt-5">
    <h6 class="fw-bold text-white">User Profile:</h6></div>
    </div>
</div>
    @endsection
</body>

</html>
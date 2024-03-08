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

<nav aria-label="breadcrumb" class="pt-2 px-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">{{ request()->segment(2) }}</li>
    </ol>
</nav>
    <div class="pt-3">
    
<div class=" py-3 container border rounded px-3" style="background-image: linear-gradient(-155deg,rgba(159, 129, 242, 0.708) 45%,rgba(255, 255, 255, 0.08) 15%),linear-gradient(258deg,rgba(132, 87, 255, 0.1),rgba(77,8,211,.2));background-color: rgba(88, 74, 214, 0.9);">
    
    <h1 class="fw-bold text-center d-flex justify-content-center pt-3 text-white" style="font-family:Arial, Helvetica, sans-serif">STATISTIC</h4>
    <div class="row pt-5">
    
       <div class="container-fluid col-4 bg-dark p-4 text-white border rounded fw-bologld "><span class="bg-white rounded p-3 px-4 text-black fw-bold">{{ $fotocount }}</span>
   <span class="px-3 fw-bold">Total Foto Counted</span>
    </div>
       <div class="container-fluid col-4 bg-dark p-4 text-white border rounded fw-bold"><span class="bg-white rounded p-3 px-4 text-black fw-bold">{{ $albumcount }}</span>
        <span class="px-3">Total Album Created</span>
    </div>
    
     
    </div>
    
    </div>    
    @endsection
</body>

</html>
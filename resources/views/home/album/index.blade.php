<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" title="{{ $title }}">
    <title>{{ $title }}</title>
</head>
<body>
    @extends('layout.baseplate')
    @section('content')
    
<nav aria-label="breadcrumb" class="pt-2 px-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Album /</li>
    </ol>
</nav>
    @endsection
</body>
</html>
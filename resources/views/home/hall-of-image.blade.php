<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
@extends('layout.baseplate')

@section('content')
<div class="p-3">
    
    <div class="pagetitle">
        <h1 style="color:#1b31fc;">Hall of Image</h1>
    </div>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item active"><a href="{{ url('/hall') }}">Hall of Image</a></li>
        </ol>
    </nav>

</div>
@endsection
</body>
</html>
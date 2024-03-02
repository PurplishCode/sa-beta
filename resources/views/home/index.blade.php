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

        <table class="table table-striped" border="1">

    <tr>
        <th>Id</th>
        <th>Foto Recorded:</th>
    </tr>
    <tr>
        @foreach($sa as $key)
    <td>{{ $key[0]->foto_amount }}</td>
    <td>{{ $key[0]->album_amount }}</td>
        @endforeach
       
    </tr> 
    </table>
   
    
    @endsection
</body>

</html>
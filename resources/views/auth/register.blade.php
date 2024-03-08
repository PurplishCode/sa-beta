<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta title="{{ $title }}">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>

<body>
    <section class="d-flex justify-content-center min-vh-100 align-items-center">
        <div class="container card bg-dark" style="width:700px;height:600px;">
            <div class="d-flex justify-content-center py-3">
                <h3 class="fw-bold " style="color:rgb(184, 85, 250)"> CREATE ACCOUNT</h3>
            </div>
            <div class="row py-4">
                <div class="col text-white">
                    <form action="{{ route('session.input') }}", method="POST">
                        @csrf
                        @method('POST')
                        <label for="username" class="fw-bold py-2">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Your username..">
                        @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                </div>
                <div class="col text-white">
                    <label for="password" class="fw-bold py-2">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Ex. Password123">
                </div>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

            </div>
            <div class="row py-1">
                <div class="col text-white">
                    <label for="namaLengkap" class="fw-bold py-2">Nama Lengkap:</label>
                    <input type="text" class="form-control" name="namaLengkap" placeholder="Your full name..">
                    @if ($errors->has('namaLengkap'))
                    <span class="text-danger">{{ $errors->first('namaLengkap') }}</span>
                    @endif
                </div>
                <div class="col text-white">
                    <label for="email" class="fw-bold py-2">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="@example.com">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="row py-2 px-3">
                    <div class="col">
                        <label for="" class="fw-bold text-white py-2">Alamat:</label>
                        <textarea name="alamat" class="form-control" style="resize: none;width:105%"
                            placeholder="Ex. Jl Bumi Manti 2"></textarea>
                        @if ($errors->has('alamat'))
                        <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        @endif
                    </div>
                </div>
                <div class="d-flex justify-content-center text-center py-3">
                    <button class="btn p-3 fw-bold text-white form-control" type="submit" style="background-color: purple;">SIGN UP</button>
                </div>
            </div>
            </form>

<div class="row">
    <div class="col">    <p class="text-white">Already have an account? <span><a href="{{ route('session.index') }}">Sign in!</a></span></p> 
    </div>
</div>
</div>
        </div>
        </div>

    </section>
    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
</body>

</html>
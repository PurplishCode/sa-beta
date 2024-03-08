<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>

<body>
    <section class="d-flex justify-content-center align-items-center min-vh-100">

        <div class="card bg-dark" style="width:400px;height:600px;">
           
            <div class="text-white d-flex justify-content-center">
                <h2 class="fw-bold py-2">LOGIN</h2>

            </div>
            <div class="d-flex justify-content-center" style="box-sizing:border-box">

                <img src="{{ asset('logo-removebg-preview.png') }}" alt="logo" class="border rounded-circle"
                    width="150px">
            </div>
            <div>
                <form action="{{ route('session.post') }}" method="POST" class="form-group text-white px-3 pt-4 needs-validation" novalidate>
                    @csrf
                    @method('POST')
                    <div><label for="email" class="fw-bold py-2">Email:</label>
                        <input type="text" name="email" class="form-control rounded" placeholder="@example.com" required value="{{ Session::get('email') }}">
                        <div class="invalid-feedback">Silakan masukkan Email.</div>
                    </div>
                    <div class="py-3"><label for="password" class="fw-bold py-2">Password</label>
                        <input type="password" name="password" class="form-control rounded" placeholder="Your password" value="{{ Session::get('password') }}" required>
                        <div class="invalid-feedback">Silakan masukkan Password.</div>
                    </div>
                    <div class="py-4 d-flex justify-content-center"><button class="btn p-3 fw-bold text-white"
                            type="submit" style="width: 300px; background-color:purple;">SIGN IN</button></div>
                </form>
                @if(session('error'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ session('error') }}
                    
                </div>
            @endif
            @if(session('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('success') }}
                
            </div>
        @endif
            </div>
        </div>
    </section>


    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
</body>

</html>
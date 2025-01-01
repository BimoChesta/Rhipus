<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-..." crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <style>
        body {
            background-image: url('https://pfst.cf2.poecdn.net/base/image/fd1bdb201c59513befe9b9c29d3167a3903a05f9009abb5dbf86fce8569ad8c9?w=1024&h=768&pmaid=252773843');
            background-size: cover;
            background-position: center;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .form-control {
            border-radius: 5px;
        }

        .btn {
            transition: background-color 0.3s, color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>

    @stack('style')
    <title>Toko Online | {{ $title }}</title>
</head>

<body class="d-flex flex-column min-vh-100">

<main class="flex-grow-1 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg" style="width: 30rem; border-radius: 10px;">
        <div class="card-header text-center" style="background-color: rgba(0, 128, 0, 0.8); border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <h5 class="text-white mb-0">{{ $name }}</h5>
        </div>
        <form action="{{ route('loginProses') }}" method="POST" class="p-4">
            @csrf
            @if (session('error'))
                <div class="alert alert-danger">
                    <strong>Oppss...!</strong> {{ session('error') }}
                </div>
            @endif
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" autocomplete="off" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-light">Login Now</button>
                <a href="#" class="btn btn-light">Lupa Password?</a>
            </div>
            <div class="d-grid gap-2 mt-3">
            <a href="http://127.0.0.1:8000" class="btn btn-danger">Kembali sebagai user</a>
            </div>
        </form>
    </div>
</main>

@include('sweetalert::alert')

<footer class="text-center py-3 mt-auto">
    <small>&copy; {{ date('Y') }} Toko Online. All rights reserved.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-..." crossorigin="anonymous"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@stack('scripts')
</body>

</html>
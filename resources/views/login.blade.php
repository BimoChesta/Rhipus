<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css boost -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Masuk | Rhipus</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/global.css" />
  <link rel="stylesheet" href="/css/masuk.css" />
  <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- MAIN -->
  <main class="d-flex h-100 w-100 align-items-center justify-content-center">
    <div class="container w-75">
      <div class="row">
        <div class="col rounded-start-4 bg-secondary-80 text-center p-5 d-flex align-items-center justify-content-center">
          <div>
            <img src="/img/logoo.png" alt="Logo Rhipus" class="img-fluid">
            <p class="text-white mt-4">Untuk tetap terhubung dengan kami,<br>silahkan masuk dengan akun anda</p>
          </div>
        </div>
        <div class="col rounded-end-4 bg-primary-80 p-5">
          <h2 class="fw-bold text-white text-center mb-4">Masuk</h2>
          {{ Auth::user() }}
          <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label fw-bold text-white">Nama Pengguna</label>
              <input autocomplete="off" type="text" class="form-control bg-white-50 border-0" id="username" name="username">
                    @error('username')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-bold text-white">Kata Sandi</label>
              <input autocomplete="off" type="password" class="form-control bg-white-50 border-0" id="password" name="password">
                    @error('password')
                            <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <button type="submit" name="submit" class="btn button-secondary-80 rounded-pill px-5 py-2 fw-bold text-white d-block mx-auto mt-5"><a href="/" class="small color-light-primary">MASUK</a></button>
            <div class="d-flex align-items-center mt-3 gap-1 justify-content-center">
              <div class>
              <p class="m-0 small text-white">Belum punya akun?<a href="/daftar" class="small color-light-primary"> Daftar</a></p>
            </div>
          </form>
      </div>
    </div>
  </main>
  <!-- END MAIN -->
<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

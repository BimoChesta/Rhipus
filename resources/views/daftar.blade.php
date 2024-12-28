<x-layout>
    @section('head')
        <title>Daftar | Rhipus</title>
        <link rel="stylesheet" href="/css/masuk.css" />
    @endsection
    <!-- MAIN -->
    <main class="d-flex min-vh-100 w-100 align-items-center justify-content-center">
        <div class="container w-75">
            <div class="row">
                <div
                    class="col rounded-start-4 bg-secondary-80 text-center p-5 d-flex align-items-center justify-content-center">
                    <div>
                        <img src="/img/logoo.png" alt="Logo Rhipus" class="img-fluid">
                        <p class="text-white mt-4">Bergabunglah dengan kami,<br>untuk mewujudkan bumi bersih tanpa sampah
                        </p>
                    </div>
                </div>
                <div class="col rounded-end-4 bg-primary-80 p-5">
                    <h2 class="fw-bold text-white text-center mb-5">Buat Akun</h2>
                    <form method="POST" action="{{ route('daftar') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold text-white">Nama Pengguna</label>
                            <input autocomplete="off" type="text" class="form-control bg-white-50 border-0"
                                id="username" name="username">
                                @error('username')
                                    <small class="mt-2 text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold text-white">Kata Sandi</label>
                            <input autocomplete="off" type="password" class="form-control bg-white-50 border-0"
                                id="password" name="password">
                                @error('password')
                                    <small class="mt-2 text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label fw-bold text-white">Konfirmasi Kata
                                Sandi</label>
                            <input autocomplete="off" type="password" class="form-control bg-white-50 border-0"
                                id="password_confirmation" name="password_confirmation">
                                @error('password_confirmation')
                                    <small class="mt-2 text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <button type="submit" class="btn button-secondary-80 rounded-pill px-5 py-2 fw-bold text-white d-block mx-auto mt-5">
                            DAFTAR
                        </button>
                        <div class="d-flex align-items-center mt-3 gap-1 justify-content-center">
                            <p class="m-0 small text-white">Sudah punya akun?</p>
                            <a href="/login" class="small color-light-primary">Masuk</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- END MAIN -->
</x-layout>

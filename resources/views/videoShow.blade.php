<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css boost -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Video | Rhipus</title>
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/css/global.css" />
    <link rel="stylesheet" href="/css/beranda.css" />
    <link rel="stylesheet" href="/css/videoShow.css" />
    <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>


    <main>
        <nav class="bg-background py-3 shadow sticky-top">
            <div class="container">
                <div class="row">
                    <div class="logo col-4 d-flex justify-content-start align-items-center">
                        <img src="/img/logoo.png" alt="logoProfil" width="70">
                    </div>
                    <div class="col-4 d-flex justify-content-center align-items-center"><a href="/">Beranda</a></div>
                    @auth
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <a class="btn dropdown-toggle" href="#" role="button" id="profileDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ auth()->user()->avatar ? asset(auth()->user()->avatar) : '/img/user-avatar.png' }}"
                                alt="Profile" class="rounded-circle" width="30" height="30">
                            </a>

                            @if (Auth::check())
                                <p class="mb-0 fw-bold">{{ Auth::user()->username }}</p>
                            @endif

                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item btn btn-secondary-20" href="/profil">Profile</a></li>
                                <li><a class="dropdown-item btn btn-secondary-20" href="/pengaturan">pengaturan</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="class="ms-2">
                                        @csrf
                                        <button type="submit" class="btn btn-danger px-3 py-1 dropdown-item">Logout</button>
                                    </form>
                                </li>

                            </ul>

                        </div>
                    @else
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <button>
                                <a href="/login" class="bg-primary px-4 py-2 rounded text-white">Login</a>
                            </button>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row d-flex align-items-start">

              <!-- Bagian Video -->
              <div class="col-md-6">

                <div class="ratio ratio-16x9">
                  <video class="rounded-2" width="600" controls>
                  <source src="{{ asset($video->path) }}" type="video/mp4">
                  ></video>
                </div>
              </div>
              <!-- Bagian Teks -->
              <div class="col-md-6">

                <h2 class="fw-bold mt-0">{{ $video->judul }}</h2>
                <p id="viewCount" class="mb-0 fw-bold">{{ $video->view_count}}x ditonton</p><small class="text-muted fw-bold mt-0">{{ \Carbon\Carbon::parse($video->created_at)->diffForHumans() }}</small>
                <i class="link-toko card-custom d-flex py-2 px-2 rounded-4 mt-2 fas fa-link mb-2 gap-1 text-black-55" style="background-color:  #b0cbdc;"><a href="{{ $video->link_toko }}">Link Toko</a></i>
                <div class="custom-card card-text shadow-sm" style="background-color : #e8e8e8">
                <p>{{ $video->deskripsi }}</p>

                <hr>
                <div class="d-flex align-items-center gap-1 mt-2">
<<<<<<< HEAD
                    <a href="{{ route('user.profile.show', ['id' => $user->id]) }}">
                    <img src="{{ asset($video->user->avatar ?? '/img/user-avatar.png') }}"
=======
                    <a href="{{ route('user.profile.show', ['id' => $user->id]) }}"></a>


                    <img src="{{ $video->user->avatar ? $video->user->avatar : '/img/user-avatar.png' }}"
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
                    alt="Profile" class="rounded-circle" width="30" height="30"></a>
                <small class="text-secondary fw-bold d-block">{{ $video->user->username }}</small>
              </div>
            </div>
            </div>
          </div>

          {{-- video lainnya --}}
          <hr>
<<<<<<< HEAD
          <div class="row g-5 ">
            {{-- @foreach ($video as $v)
=======
          {{-- <div class="row g-5 ">
            @foreach ($videos as $video)
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
                <a href="/video/{{ $video->id }}" class="col-4 image-card py-4">
                    <img src="{{ asset($video->thumbnail) }}" alt="{{ $video->thumbnail }}" class="img-fluid rounded-2">
                    <img src="../storage/" alt="">
                    <div class="d-flex align-items-center gap-3 mt-0">
                        <img src="{{ $video->user->avatar ? $video->user->avatar : '/img/user-avatar.png' }}" alt="Profile" class="rounded-circle" width="40" height="40">
                        <div>
                            <p class="fw-bold m-0 mt-0">{{ $video->judul }}</p>
                            <small class="text-secondary fw-bold d-block">{{ $video->user->username }}</small>
                            {{-- <small class="single-line-text d-block w-100">{{ $video->deskripsi }}</small> --}}
<<<<<<< HEAD
                             {{-- <small class="text-muted">{{ $video->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </a>
            @endforeach --}}
                    <div class="recommendations">
                        <h4 class="fw-bold" style="color :rgb(163, 163, 163)">Rekomendasi Video</h4>
                        <div class="row">
                            @foreach ($otherVideos as $v)
                                <a href="{{ route('videoShow', $v->id) }}" class="col-4 image-card py-4">
                                    <img src="{{ asset($v->thumbnail) }}" alt="{{ $v->judul }}" class="img-fluid rounded-2 mb-2">
                                    <div class="d-flex align-items-center gap-3 mt-0">
                                        <img src="{{ asset($video->user->avatar ?? '/img/user-avatar.png') }}" alt="Profile" class="rounded-circle" width="40" height="40">
                                        <div>
                                            <p class="fw-bold m-0 mt-0">{{ $v->judul }}</p>
                                            <small class="text-secondary fw-bold d-block">{{ $v->user->username }}</small>
                                            <small class="text-muted">{{ $v->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>



                </div>
            </div>


        </div>
=======
                            {{-- <small class="text-muted">{{ $video->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </a>
            @endforeach
        </div> --}}
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a

    </main>
    <footer class="py-5 mt-5 fixed top-0 w-full z-10">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="d-flex align-items-center gap-3">
                        <a class="fa-solid fa-location-dot fs-4 text-white" href="https://maps.app.goo.gl/wkFdRUnQiyrGiqdp7"></a>
                        <div>
                            <small class="text-white-50">Indonesia</small>
                            <p class="m-0 text-white">Jawa Barat, Bandung</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mt-4">
                        <a class="fa-solid fa-phone fs-4 text-white" href="https://api.whatsapp.com/send?phone=6282113695190&text=Hallo%20kak%20Bimo!%20Aku%20mau%20pesen%20wonton%20nya%20dong%20%F0%9F%98%8B"></a>
                        <p class="m-0 text-white">0813 6510 3590</p>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <div class="d-flex gap-4">
                        <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
                            <a class="fa-brands fa-instagram fs-4 text-white" href="https://www.instagram.com/"></a>
                        </div>
                        <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
                            <a class="fa-brands fa-x fs-4 text-white" href="https://x.com/?lang=en-id&mx=2"></a>
                        </div>
                        <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
                            <a class="fa-brands fa-youtube fs-4 text-white" href="https://www.youtube.com/"></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 text-white">
                    <h4 class="fw-bold">About Us</h4>
                    <p class="m-0 text-white">Pada situs web ini kami akan berbagi tutorial pengelolahan sampah yang
                        bisa di daur
                        ulang
                        kembali, untuk
                        menjadi hiasan ataupun kerajinan bertujuan mengurangi pencemaran sampah di indonesia dan
                        menyelamatkan bumi.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script>
    function toggleMenu() {
        var menu = document.getElementById("floatingMenu");
        var layer = document.getElementById("backLayer");

        // Toggle visibility of floating menu and back layer
        if (menu.classList.contains("d-none")) {
            menu.classList.remove("d-none");
            layer.classList.remove("d-none");
        } else {
            menu.classList.add("d-none");
            layer.classList.add("d-none");
        }
    }
</script>

<script>
    $(document).ready(function() {
        // Kirim permintaan untuk meningkatkan jumlah tontonan saat halaman dimuat
        $.post('/video/{{ $video->id }}/view', {
            _token: '{{ csrf_token() }}'
        }, function(data) {
            $('#viewCount').text(data.view_count + ' kali ditonton');
        });

        // Kirim permintaan untuk meningkatkan jumlah tontonan setiap 3 detik
        setInterval(function() {
            $.post('/video/{{ $video->id }}/view', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#viewCount').text(data.view_count + ' kali ditonton');
            });
        }, 3000); // Setiap 3 detik
    });
</script>

</body>

</html>

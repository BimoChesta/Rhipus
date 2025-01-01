<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css boost -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Profil | Rhipus</title>

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/lihat-profil.css" />
    <link rel="stylesheet" href="css/beranda.css" />
    <link rel="stylesheet" href="css/profil.css" />
    <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- HEADER -->
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
                                alt="Profile" class="rounded-circle shadow" width="30" height="30">
                        </a>

                        @if (Auth::check())
                            <p class="mb-0 fw-bold">{{ Auth::user()->username }}</p>
                        @endif
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="profileDropdown">
                            {{-- <li><a class="dropdown-item" href="/profil">Profile</a></li> --}}
                            <li><a class="dropdown-item btn btn-secondary-30" href="/pengaturan">pengaturan</a></li>
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
    <!-- END HEADER -->

    <!-- MAIN -->
    <main class="container">
        <div class="search-container mt-1 mb-3 pt-4 bg-white">
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center justify-content-center gap-3">
                {{-- <a onclick="history.back()">
                <i class="fa-solid fa-chevron-left text-muted"></i></a> --}}
                {{-- <a href="/">Beranda</a>
              </div>
              <form class="align-self-center">
                  <div class="position-relative w-100 align-self-center">
                      {{-- <input type="text" class="form-control rounded-pill pe-5" placeholder="Telusuri"> --}}
                      {{-- <button>
                          <img src="assets/img/search.png" alt="" class="position-absolute top-0 end-0 img-fluid"
                              width="57">
                      </button> --}}
                  </div>
              </form>
            </div>
        </div>

        <div class="container mt-1 ">

            <section id="profile">

                <div class="d-flex align-items-start gap-2">
                    {{-- <a onclick="history.back()"><i class="fa-solid fa-circle-chevron-left fs-4 mt-3 ms-4 col-6" style="color:  #b0cbdc;"></i></a> --}}
                    <div>
<<<<<<< HEAD
                        <img src="{{auth()->user()->avatar ? asset(auth()->user()->avatar) : '/img/user-avatar.png' }}" alt="Profile" class="rounded-circle me-3 mb-1" width="60" height="60">

                        <a href="/unggah">
                            <button
                                class="d-align-items-center px-2 py-1 bg-transparent rounded border border-black button-unggah shadow">
                                <i class="fa-solid fa-plus"></i>
                                Unggah
                            </button>
                        </a>
                        <a href="/editProfil"
                            class="d-align-items-center px-2 py-1 bg-transparent rounded border border-black button-editProfil shadow">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Edit Profil
                        </a>

=======
                        <a onclick="history.back()"><i class="fa-solid fa-circle-chevron-left fs-4 mt-3" style="color:  #b0cbdc;"></i></a>
                        <img src="{{auth()->user()->avatar ? asset(auth()->user()->avatar) : '/img/user-avatar.png' }}" alt="Profile" class="rounded-circle me-3 mb-1" width="60" height="60">

>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
                        @if (Auth::check())
                        <section class="mb-0 fw-bold">{{ Auth::user()->username }}</section>
                        @endif

                        <section class="mb-0 mt-2 fw-secondary"
                        id="bio"
                        name="bio"
                        rows="4">{{ auth()->user()->bio }}</section>
                    </div>
                </div>
            </section>

            <section id="my-videos" class="mt-3">
<<<<<<< HEAD
                <h5 class="fw-bold active-line d-inline-block mb-2 mt-2">Video Saya</h5>
                <div class="row g-5">
                    @foreach ($videos as $v)
                    <a href="/video/{{ $v->id }}" class="col-4 image-card py-4">
                        <img src="{{ asset($v->thumbnail) }}" alt="{{ $v->thumbnail }}" class="img-fluid rounded-2">
                        <div class="d-flex align-items-center gap-2 mt-2 mb-0">
                            <img src="{{ $v->user->avatar ? $v->user->avatar : '/img/user-avatar.png' }}" alt="Profile" class="rounded-circle" width="40" height="40">
                            <div>
                                <p class="fw-bold m-0 mt-0">{{ $v->judul }}</p>
                                <small class="text-secondary fw-bold d-block">{{ $v->user->username }}</small>
                                <small id="viewCount" class="mb-0 fw-bold-secondary">{{ $v->view_count ?? 0 }}x ditonton</small>
                                <small class="text-muted">{{ $v->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </a>
                @endforeach

                </div>
            </section>
=======
                <h5 class="fw-bold active-line d-inline-block mb-2 mt-2">Video</h5>
                <div class="row g-5">
                   {{--  @foreach ($videos as $video)
                        <a href="/video/{{ $video->id }}" class="col-4 image-card py-4">
                            <img src="{{ asset($video->thumbnail) }}" alt="{{ $video->thumbnail }}" class="img-fluid rounded-2">
                            <img src="../storage/" alt="">
                            <div class="d-flex align-items-center gap-2 mt-2 mb-0">
                                <img src="{{ $video->user->avatar ? $video->user->avatar : '/img/user-avatar.png' }}" alt="Profile" class="rounded-circle" width="40" height="40">
                                <div>
                                    <p class="fw-bold m-0 mt-0">{{ $video->judul }}</p>
                                    <small class="text-secondary fw-bold d-block">{{ $video->user->username }}</small>
                                    {{-- <small class="single-line-text d-block w-100">{{ $video->deskripsi }}</small> --}}
                                    {{-- <small id="viewCount" class="mb-0 fw-bold-secondary">{{ $video->view_count ?? 0 }}x ditonton</small>
                                    <small class="text-muted">{{ $video->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section> --}}
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a


        </div>
    </main>
    <!-- END MAIN -->

    <!-- FOOTER -->
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
    <!-- END FOOTER -->
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script>
        // const profileBtn = document.querySelector('#profileBtn')
        // const floatingMenu = document.querySelector('.floating-menu')
        // const backLayer = document.querySelector('.back-layer')

        // profileBtn.addEventListener('click', function() {
        //     backLayer.classList.add("show")
        //     floatingMenu.classList.add("show")
        // })

        // backLayer.addEventListener('click', function() {
        //     backLayer.classList.remove("show")
        //     floatingMenu.classList.remove("show")
        // })
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
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | Rhipus</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/global.css" />
  <link rel="stylesheet" href="assets/css/beranda.css" />
  <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- HEADER -->
  <!-- END HEADER -->

  <!-- MAIN -->
  <main class="container position-relative">
    <p class="not-found"></p>
    {{-- <p class="not-found"><?= $notFound ?></p> --}}
    <div class="search-container mt-4 pt-4 sticky-top bg-white">
      <form action="index.php" method="get">
        <div class="mb-3 position-relative w-50 mx-auto">
          <input type="text" name="keyword" class="form-control rounded-pill pe-5" placeholder="Telusuri" value="">
          {{-- <input type="text" name="keyword" class="form-control rounded-pill pe-5" placeholder="Telusuri" value="<?= $keyword ?>"> --}}
          <button type="submit">
            <img src="assets/img/search.png" alt="" class="position-absolute top-0 end-0 img-fluid" width="57">
          </button>
        </div>
      </form>
    </div>

    <a href="index.php" class="button mb-4">
      <button class="semua fw-bold px-2 py-1 rounded">Semua video</button>
    </a>

    <div class="row g-5">

      <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/pop mie.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/profilcabila.png" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">POP MIE BISA JADI AESTHETIC?</p>
            <small class="text-secondary fw-bold d-block">cabila foryou</small>
            <small class="text-secondary fw-bold">5rb ditonton - 1 hari yang lalu</small>
          </div>
        </div>
      </a>
      <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/bambu.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/vaniprofil.png" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">BIKIN TEMPAT SENDOK DARI KALENG!</p>
            <small class="text-secondary fw-bold d-block">Vani DIY</small>
            <small class="text-secondary fw-bold">1 jt ditonton - 3 minggu yang lalu</small>
          </div>
        </div>
      </a>
      <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/tastutupbotol.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/finaliza.svg" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">DIY TAS CANTIK!</p>
            <small class="text-secondary fw-bold d-block">finaliza</small>
            <small class="text-secondary fw-bold">550rb ditonton - 2 bulan yang lalu</small>
          </div>
        </div>
      </a>
    <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/dvd.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/profildvd.png" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">DIY- DEKOR ROOM</p>
            <small class="text-secondary fw-bold d-block">Simple but kreative</small>
            <small class="text-secondary fw-bold">220rb ditonton - 1 hari yang lalu</small>
          </div>
        </div>
      </a>
    <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/kalenglilin.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/profilkaleng.png" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">TUTORIAL OLAHAN KALENG</p>
            <small class="text-secondary fw-bold d-block">Kalengku</small>
            <small class="text-secondary fw-bold">872rb ditonton - 3 bulan yang lalu</small>
          </div>
        </div>
      </a>
    <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/tasaquagelas.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/profilbimo.png" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">TAS DARI AQUA GELAS..</p>
            <small class="text-secondary fw-bold d-block">Bimo DIY</small>
            <small class="text-secondary fw-bold">550rb ditonton - 2 bulan yang lalu</small>
          </div>
        </div>
      </a>
    <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/kotak.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/profildvd.png" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">YUK BIKIN STORAGE LUCU</p>
            <small class="text-secondary fw-bold d-block">simple but kreative</small>
            <small class="text-secondary fw-bold">5rb ditonton - 5 hari yang lalu</small>
          </div>
        </div>
      </a>
    <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/hiasan.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/profilcabila.png" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">DIY- DEKOR HIASAN</p>
            <small class="text-secondary fw-bold d-block">cabila foryou</small>
            <small class="text-secondary fw-bold">3rb ditonton - 4 hari yang lalu</small>
          </div>
        </div>
      </a>
    <a href="putar_video.php" class="col-4 image-card py-4">
        <img src="/img/dompetkecap.png" alt="" class="img-fluid">
        <div class="d-flex align-items-start gap-3 mt-2">
          <img src="/img/vaniprofil.png" alt="" class="img-fluid" width="45">
          <div>
            <p class="fw-bold m-0 mt-2">TUTORIAL DOMPET BANGO</p>
            <small class="text-secondary fw-bold d-block">Vani DIY</small>
            <small class="text-secondary fw-bold">1rb ditonton - 3 jam yang lalu</small>
          </div>
        </div>
      </a>
    </div>

  <table>
      <tr>
        <td>
          <iframe width="390" height="248" src="https://www.youtube.com/embed/MqcjUWwCsFg?si=bDAwg1F1W8cmuuIq"></iframe>
        </td>
        <td>
          <iframe width="390" height="248" src="https://www.youtube.com/embed/yABjo-it1fI?si=qdJcW3ITfpT35JMo"></iframe>
        </td>
        <td>
          <iframe width="390" height="248" src="https://www.youtube.com/embed/oTVlH2TTh9Y?si=uR-8LJneKzHqD8Mm"></iframe>
        </td>
      </tr>
      <td>
        <iframe width="390" height="248" src="https://www.youtube.com/embed/-fvlyHqSbZQ?si=wW6xXgPmZZH_QY_t"></iframe>
      </td>
    </table>
  </main>
<!-- END MAIN -->

  <!-- FOOTER -->
  <footer class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-location-dot fs-4 text-white"></i>
            <div>
              <small class="text-white-50">Indonesia</small>
              <p class="m-0 text-white">Jawa Barat, Bandung</p>
            </div>
          </div>
          <div class="d-flex align-items-center gap-3 mt-4">
            <i class="fa-solid fa-phone fs-4 text-white"></i>
            <p class="m-0 text-white">0813 6510 3590</p>
          </div>
        </div>
        <div class="col-3 d-flex align-items-center justify-content-center">
          <div class="d-flex gap-4">
            <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
              <i class="fa-brands fa-instagram fs-4 text-white"></i>
            </div>
            <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
              <i class="fa-brands fa-twitter fs-4 text-white"></i>
            </div>
            <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
              <i class="fa-brands fa-youtube fs-4 text-white"></i>
            </div>
          </div>
        </div>
        <div class="col-6 text-white">
          <h4 class="fw-bold">About Us</h4>
          <p class="m-0 text-white">Pada situs web ini kami akan berbagi totorial pengelolahan sampah yang bisa di daur
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script>
    if (document.querySelector('.avatar-img')) {
      const profileBtn = document.querySelector('#profileBtn')
      const floatingMenu = document.querySelector('.floating-menu')
      const backLayer = document.querySelector('.back-layer')

      profileBtn.addEventListener('click', function() {
        backLayer.classList.add("show")
        floatingMenu.classList.add("show")
      })

      backLayer.addEventListener('click', function() {
        backLayer.classList.remove("show")
        floatingMenu.classList.remove("show")
      })
    }
  </script>
</body>

</html>

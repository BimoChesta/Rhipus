<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Video | Rhipus</title>
    {{-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/upload.css" />
    <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- MAIN -->
    <main class="d-flex align-items-start gap-3 justify-content-center mx-auto mt-5 mb-0">
        <a href="/profil"><i class="fa-solid fa-circle-chevron-left fs-4 mt-3" style="color:  #b0cbdc;"></i></a>
        <div id="video-added" class="border border-dark rounded-4 p-3 w-50">
            <h5 class="fw-bold">Unggah Video</h5>
            <hr>
            <form method="post" action="{{ route('video.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-4">
                    <label for="video" class="form-label fw-bold d-block">Video*</label>
                    <input type="file" name="video" value="{{ old('video') }}" accept=".mp4,.mov,.ogg,.qt">
                    @error('video')
                        <small class="text-danger my-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mt-4">
                    <label for="thumbnail" class="form-label fw-bold d-block">Thumbnail*</label>
                    <input type="file" name="thumbnail" id="thumbnail" accept=".jpeg,.jpg,.png,.webp, .svg">
                    @error('thumbnail')
                        <small class="text-danger my-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mt-4">
                    <label for="judul" class="form-label fw-bold">Judul*</label>
                    <input type="text" class="form-control small" id="judul" name="judul"
                        value="{{ old('judul') }}" placeholder="Tambahkan Judul Video"
                        maxlength="50"></input>

                    @error('judul')
                        <small class="text-danger my-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mt-4">
                    <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                    <textarea type="text" class="form-control small" id="deskripsi" name="deskripsi" rows="4"
                        placeholder="Tambahkan deskripsi video" value="{{ old('deskripsi') }}"
                        maxlength="325"></textarea>
                    @error('deskripsi')
                        <small class="text-danger my-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="link_toko" class="form-label fw-bold">Link Toko <i class="fa-solid fa-link"></i></label>
                    <input type="text" class="form-control" id="link_toko" name="link_toko"
                        value="{{ old('link_toko') }}"
                        placeholder="Tambahkan Link Toko"></input>
                    @error('link_toko')
                        <small class="text-danger my-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex align-items-center justify-content-end gap-3">
                    <a href="/profil" class="btn shadow border rounded-pill px-3 py-1 fw-bold">Batal</a>
                        {{-- <button type="submit" href="/profil" class="btn shadow border rounded-pill px-3 py-1 fw-bold">Batal</button> --}}
                    <button type="submit" class="btn rounded-pill px-3 py-1 fw-bold text-secondary-30 shadow" style="background-color: #b0cbdc">Simpan</button>
                </div>
            </form>
        </div>
        <!-- <div id="add-video" class="border border-dark rounded-4 h-100 w-100 d-flex align-items-center justify-content-center">
      <div class="text-center">
        <i class="fa-solid fa-upload display-3 text-dark mb-3"></i>
        <p class="m-0 text-muted">Pilih video untuk diunggah</p>
        <p class="m-0 text-muted">atau tarik file ke sini</p>
        <button type="submit" class="btn button-secondary-80 rounded-pill px-3 py-1 fw-bold mt-3">Pilih video</button>
      </div>
    </div> -->
    </main>
    <!-- END MAIN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script>
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
    </script>
</body>

</html>

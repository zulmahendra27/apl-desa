@extends('admin.layouts.template')

@section('container')
  <div class="pagetitle">
    <h1>{{ $title }}</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/profile">Profil Desa</a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body mt-3">

            <div class="row">
              <div class="col-lg-9">
                @if (session()->has('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <!-- Vertical Form -->
                <form class="row g-3" action="/dashboard/galleries" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="col-12">
                    <label for="description" class="form-label">Deskripsi Foto</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                      name="description" required autofocus value="{{ old('description') }}">
                    @error('description')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="image" class="form-label">Upload Foto</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                      name="image" required onchange="previewImage()">
                    @error('image')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <img class="img-preview img-fluid">
                  <div>
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i> Simpan</button>
                    <a href="/dashboard/galleries" class="btn btn-warning"><i class="bx bx-left-arrow"></i> Kembali</a>
                  </div>
                </form><!-- Vertical Form -->
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function previewImage() {
      const image = document.getElementById('image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';
      imgPreview.style.width = '300px';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection

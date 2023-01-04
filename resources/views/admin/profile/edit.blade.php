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
                <form class="row g-3" action="/dashboard/profile/{{ $profile->key }}" method="post">
                  @csrf
                  @method('put')
                  <input type="hidden" id="key" name="key" required value="{{ old('key', $profile->key) }}">
                  <div class="col-12">
                    <label for="name" class="form-label">Nama Profil</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                      name="name" required autofocus value="{{ old('name', $profile->name) }}">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  {{-- <div class="col-12">
                    <label for="key" class="form-label">Key</label>
                    <input type="text" class="form-control @error('key') is-invalid @enderror" id="key"
                      name="key" required value="{{ old('key') }}" readonly>
                    @error('key')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div> --}}
                  <div class="col-12">
                    <label for="content" class="form-label">Isi Profil</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content', $profile->content) }}">
                    <trix-editor input="content"></trix-editor>
                    @error('content')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i> Simpan</button>
                    <a href="/dashboard/profile" class="btn btn-warning"><i class="bx bx-left-arrow"></i> Kembali</a>
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
    const name = document.getElementById('name');
    const key = document.getElementById('key')

    name.addEventListener('blur', function() {
      fetch('/dashboard/profile/checkKey?name=' + name.value, {
          method: 'GET',
        })
        .then((response) => response.json())
        .then((data) => key.value = data.key);
    });

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });
  </script>
@endsection

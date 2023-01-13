@extends('admin.layouts.template')

@section('container')
  <div class="pagetitle">
    <h1>Tambah Data</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/categories">Kategori Surat</a></li>
        <li class="breadcrumb-item active">Tambah Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body mt-3">

            <div class="row">
              <div class="col-lg-6">
                @if (session()->has('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <!-- Vertical Form -->
                <form class="row g-3" action="/dashboard/categories" method="post">
                  @csrf
                  <div class="col-12">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                      name="name">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i> Simpan</button>
                    {{-- <a href="/dashboard/categories" class="btn btn-warning"><i class="bx bx-left-arrow"></i> Kembali</a> --}}
                  </div>
                </form><!-- Vertical Form -->
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

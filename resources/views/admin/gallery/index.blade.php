@extends('admin.layouts.template')

@section('container')
  <style>
    .image {
      max-height: 300px;
      object-fit: cover;
      object-position: center;
    }
  </style>

  <div class="pagetitle">
    <h1>{{ $title }}</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header">
            <a href="/dashboard/galleries/create" class="btn btn-success font-weight-bold">
              <i class="bi bi-plus"></i> Tambah Data
            </a>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">{{ $title }}</h5>

            @if (session()->has('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="row">
              @foreach ($galleries as $gallery)
                <div class="col-lg-4">
                  <div class="card photos">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Photos"
                      class="img-thumbnail img-fluid image">
                    <div class="card-header text-dark d-flex justify-content-between">
                      {{ $gallery->description }}
                      <form action="/dashboard/galleries/{{ $gallery->random_id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Hapus data?')">
                          <i class="bx bx-trash"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>

        </div>


      </div>
    </div>
  </section>
@endsection

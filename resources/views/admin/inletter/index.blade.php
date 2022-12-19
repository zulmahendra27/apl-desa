@extends('admin.layouts.template')

@section('container')
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
            <a href="/dashboard/inletters/create" class="btn btn-success font-weight-bold">
              <i class="bi bi-plus"></i> Tambah Data
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>

            @if (session()->has('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="row">
              <div class="col-lg-10">
                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Jenis</th>
                      <th scope="col">Nomor</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Perihal</th>
                      <th scope="col">Tujuan</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($inletters->count())
                      @foreach ($inletters as $inletter)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $inletter->category->name }}</td>
                          <td>{{ $inletter->nomor }}</td>
                          <td>{{ $inletter->tanggal->format('d-m-Y') }}</td>
                          <td>{{ $inletter->perihal }}</td>
                          <td>{{ $inletter->pengirim }}</td>
                          <td>
                            <a href="/dashboard/inletters/{{ $inletter->random_id }}/edit" class="badge bg-warning">
                              <i class="bx bxs-edit"></i>
                            </a>
                            <form action="/dashboard/inletters/{{ $inletter->random_id }}" method="post"
                              class="d-inline">
                              @csrf
                              @method('delete')
                              <button type="submit" class="badge bg-danger border-0"
                                onclick="return confirm('Hapus data?')">
                                <i class="bx bxs-trash"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                        <th colspan="7" scope="row" class="text-center">Data tidak ditemukan</th>
                      </tr>
                    @endif
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection

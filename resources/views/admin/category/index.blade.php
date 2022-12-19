@extends('admin.layouts.template')

@section('container')
  <div class="pagetitle">
    <h1>Kategori Surat</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori Surat</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header">
            <a href="/dashboard/categories/create" class="btn btn-success font-weight-bold">
              <i class="bi bi-plus"></i> Tambah Data
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Kategori Surat</h5>

            @if (session()->has('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="row">
              <div class="col-lg-6">
                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($categories->count())
                      @foreach ($categories as $category)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $category->name }}</td>
                          <td>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                              <i class="bx bxs-edit"></i>
                            </a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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
                        <th scope="row" colspan="3" class="text-center">Data tidak ditemukan</th>
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

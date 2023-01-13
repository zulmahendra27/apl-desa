@extends('admin.layouts.template')

@section('container')
  <div class="pagetitle">
    <h1>Edit Data</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/agenda">Agenda</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
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
                <form class="row g-3" action="/dashboard/agenda/{{ $agenda->random_id }}" method="post">
                  @csrf
                  @method('put')
                  <div class="col-12">
                    <label for="name" class="form-label">Agenda</label>
                    <input type="text" name="name" id="name"
                      class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $agenda->name) }}">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="tempat" class="form-label">Tempat</label>
                    <input type="text" name="tempat" id="tempat"
                      class="form-control @error('tempat') is-invalid @enderror"
                      value="{{ old('tempat', $agenda->tempat) }}">
                    @error('tempat')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="waktu" class="form-label">Waktu</label>
                    <input type="datetime-local" name="waktu" id="waktu"
                      class="form-control @error('waktu') is-invalid @enderror"
                      value="{{ old('waktu', $agenda->waktu) }}">
                    @error('waktu')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i> Simpan</button>
                    {{-- <a href="/dashboard/agenda" class="btn btn-warning"><i class="bx bx-left-arrow"></i> Kembali</a> --}}
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

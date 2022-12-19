@extends('admin.layouts.template')

@section('container')
  <div class="pagetitle">
    <h1>Edit Data</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/inletters">Surat Masuk</a></li>
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
                <form class="row g-3" action="/dashboard/inletters/{{ $inletter->random_id }}" method="post">
                  @csrf
                  @method('put')
                  <div class="col-12">
                    <label for="category_id" class="form-label">Jenis Surat</label>
                    <select name="category_id" id="category_id"
                      class="form-select @error('category_id') is-invalid @enderror">
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                          {{ $category->id == $inletter->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="nomor" class="form-label">Nomor Surat</label>
                    <input type="text" name="nomor" id="nomor" value="{{ old('nomor', $inletter->nomor) }}"
                      class="form-control @error('nomor') is-invalid @enderror">
                    @error('nomor')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="tanggal" class="form-label">Tanggal Surat</label>
                    <input type="date" name="tanggal" id="tanggal"
                      class="form-control @error('tanggal') is-invalid @enderror"
                      value="{{ old('tanggal', $inletter->tanggal->format('Y-m-d')) }}">
                    @error('tanggal')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="perihal" class="form-label">Perihal</label>
                    <input type="text" name="perihal" id="perihal"
                      class="form-control @error('perihal') is-invalid @enderror"
                      value="{{ old('perihal', $inletter->perihal) }}">
                    @error('perihal')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="pengirim" class="form-label">Pengirim</label>
                    <input type="text" name="pengirim" id="pengirim"
                      class="form-control @error('pengirim') is-invalid @enderror"
                      value="{{ old('pengirim', $inletter->pengirim) }}">
                    @error('pengirim')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i> Simpan</button>
                    <a href="/dashboard/inletters" class="btn btn-warning"><i class="bx bx-left-arrow"></i> Kembali</a>
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

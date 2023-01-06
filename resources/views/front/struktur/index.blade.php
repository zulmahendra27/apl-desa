@extends('front.layouts.template')

@section('container')
  <section class="section">

    <div class="container">
      <div class="row">
        @forelse ($galleries as $gallery)
          <div class="col-lg-4 mb-3">
            <div class="card">
              <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->description }}"
                class="img-fluid img-thumbnail image">
              <div class="card-header text-dark">
                {{ $gallery->description }}
              </div>
            </div>
          </div>
        @empty
          <div class="col-lg-12">
            <div class="alert alert-warning text-center">Galeri Kosong</div>
          </div>
        @endforelse
      </div>
    </div>

  </section>
@endsection

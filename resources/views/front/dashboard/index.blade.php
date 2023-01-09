@extends('front.layouts.template')

@section('container')
  <section class="section pb-0">
    <div class="container">
      <div class="row">

        @foreach ($galleries as $gallery)
          <div class="col-md-4 mb-4">
            <div class="card" title="{{ $gallery->description }}">
              <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->description }}"
                class="img-fluid img-thumbnail image">
            </div>
          </div>
        @endforeach

      </div>

    </div>

  </section>
@endsection

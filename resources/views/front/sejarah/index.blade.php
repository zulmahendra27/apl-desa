@extends('front.layouts.template')

@section('container')
  <section class="section">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-dark">
          @forelse ($profiles as $profile)
            {!! $profile->content !!}
          @empty
            <div class="alert alert-warning">Sejarah belum ditambahkan</div>
          @endforelse
        </div>
      </div>
    </div>

  </section>
@endsection

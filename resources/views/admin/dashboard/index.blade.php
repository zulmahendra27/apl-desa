@extends('admin.layouts.template')

@section('container')
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Selamat Datang</h5>
          </div>

          <div class="card-body mt-4">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <a href="/dashboard/inletters" class="card text-bg-success">
                  <div class="card-header text-bg-success fw-bold">Surat Masuk</div>
                  <div class="card-body my-4 pb-0 d-flex justify-content-between align-items-center">
                    <span class="display-3 opacity-25">
                      <i class="ri-mail-download-line"></i>
                    </span>
                    <h1 class="text-white display-2 text-center fw-bold">{{ $inletter_count }}</h1>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6">
                <a href="/dashboard/outletters" class="card text-bg-primary">
                  <div class="card-header text-bg-primary fw-bold">Surat Keluar</div>
                  <div class="card-body my-4 pb-0 d-flex justify-content-between align-items-center">
                    <span class="display-3 opacity-25">
                      <i class="ri-mail-send-line"></i>
                    </span>
                    <h1 class="text-white display-2 text-center fw-bold">{{ $outletter_count }}</h1>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6">
                <a href="/dashboard/agenda" class="card text-bg-warning">
                  <div class="card-header text-bg-warning fw-bold text-white">Agenda</div>
                  <div class="card-body my-4 pb-0 d-flex justify-content-between align-items-center">
                    <span class="display-3 opacity-25">
                      <i class="ri-calendar-todo-line"></i>
                    </span>
                    <h1 class="text-white display-2 text-center fw-bold">{{ $agenda_count }}</h1>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6">
                <a href="/dashboard/galleries" class="card text-bg-danger">
                  <div class="card-header text-bg-danger fw-bold">Galeri</div>
                  <div class="card-body my-4 pb-0 d-flex justify-content-between align-items-center">
                    <span class="display-3 opacity-25">
                      <i class="ri-image-2-line"></i>
                    </span>
                    <h1 class="text-white display-2 text-center fw-bold">{{ $gallery_count }}</h1>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
@endsection

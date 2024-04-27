@extends('layouts.layouts')

@section('content')
    <section id="berita" style="margin-top: 50px" class="py-5">
        <div class="container py-5">

            <div class="header-berita text-center">
                <h2 class="fw-bold ">Berita kegiatan pondok pesantren</h2>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-light">Foto lainnya</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <a href="{{ asset('assets/images/il-photo-01.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a href="{{ asset('assets/images/il-photo-01.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a href="{{ asset('assets/images/il-photo-01.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a href="{{ asset('assets/images/il-photo-01.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection

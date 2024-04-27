@extends('layouts.layouts')

@section('content')
    <section id="berita" style="margin-top: 50px" class="py-5">
        <section id="berita" class="py-5">
            <div class="container">

                <div class="header-berita text-center">
                    <h2 class="fw-bold ">Prestasi Sekolah</h2>
                </div>

                <div class="row py-5 ">
                    @foreach ($prestasis as $prestasi)
                        <div class="col-lg-4 ">
                            <div class="card border-0 member text-start">
                                <img class="img-fluid mb-3" src="{{ asset('storage/prestasi/' . $prestasi->image) }}"
                                    alt="">
                                <div class="konten-berita">
                                    <p class="mb-3 text-secondary">#cantik</p>
                                    <h4 class="fw-bold mb-3 text-dark">{{ $prestasi->judul }}</h4>
                                    <p class="text-secondary">#pesantrenmodern</p>
                                    <a href="/prestasi/{{ $prestasi->slug }}"
                                        class="text-decoration-none text-danger">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </section>
    </section>
@endsection

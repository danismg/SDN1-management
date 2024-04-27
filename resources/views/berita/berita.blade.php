@extends('layouts.layouts')

@section('content')
    <section id="berita" style="margin-top: 50px" class="py-5">
        <div class="container py-5">

            <div class="header-berita text-center">
                <h2 class="fw-bold ">Berita kegiatan pondok pesantren</h2>
            </div>

            <div class="row py-5">
                @foreach ($artikels as $artikel)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img class="img-fluid mb-3" src="{{ asset('storage/artikel/' . $artikel->image) }}"
                                alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">#cantik</p>
                                <h4 class="fw-bold mb-3">{{ $artikel->judul }}</h4>
                                <p class="text-secondary">#pesantrenmodern</p>
                                <a href="/detail/{{ $artikel->slug }}"
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>

        </div>
    </section>
@endsection

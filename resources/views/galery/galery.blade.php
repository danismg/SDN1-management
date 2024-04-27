@extends('layouts.layouts')

@section('content')
    {{-- Kegiatan --}}
    <section id="berita" style="margin-top: 50px" class="py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold mb-5 mt-5">Kegiatan Sekolah</h2>
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 portfolio-container">

                    @foreach ($kegiatans as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/kegiatan/' . $item->image) }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('storage/kegiatan/' . $item->image) }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4 class="text-dark text-start"><a href="portfolio-details.html"
                                            title="More Details">{{ $item->judul }}</a></h4>

                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Fasiltas --}}
    <section id="berita" style="margin-top: 50px" class="py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold mb-5 mt-5">Fasiltas Sekolah</h2>
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 portfolio-container">

                    @foreach ($fasilitas as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/fasilitas/' . $item->image) }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('storage/fasilitas/' . $item->image) }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4 class="text-dark text-start"><a href="portfolio-details.html"
                                            title="More Details">{{ $item->judul }}</a></h4>

                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

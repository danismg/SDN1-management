@extends('layouts.layouts')

@section('content')
    <section id="berita" style="margin-top: 50px" class="py-5">
        <div class="container py-5">

            <div class="header-berita text-center">
                <h2 class="fw-bold mb-5">Kontak</h2>
            </div>


            <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                    <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 d-flex flex-column text-start" data-aos="fade-up">
                    <table class="table table-borderless">
                        <tbody>
                            @foreach ($kontak as $item)
                                <tr>
                                    <th scope="row">{{ $item->mediasosial }}</th>
                                    <th>:</th>
                                    <td>{{ $item->akun }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- Features Item -->

            <div class="header-berita mt-5 text-center">

                <h4 class="fw-bold mb-5 mt-5">Lokasi</h4>

                <div class="text-start px-5">
                    Lokasi
                </div>
            </div>

        </div>
    </section>
@endsection

@extends('layouts.layouts')

@section('content')
    @foreach ($sejarah as $item)
        <section id="berita" style="margin-top: 50px" class="py-5">
            <div class="container py-5">

                <div class="header-berita text-center">
                    <h2 class="fw-bold mb-5">Sejarah Sekolah</h2>
                </div>
                <div class="konten-berita">

                    <p class="text-secondary">{!! $item->desc !!}</p>
                </div>
            </div>
        </section>
    @endforeach
@endsection

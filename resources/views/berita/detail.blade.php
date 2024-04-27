@extends('layouts.layouts')

@section('content')
    <section class="py-5" id="detail" style="margin-top: 50px">
        <div class="container col-xxl-8 py-5">
            <div class="mb-5 ">
                <a class="text-dark" href="/">Home</a> / <a class="text-dark" href="/berita">Berita</a> /
                {{ $artikel->judul }}
            </div>
            <img class="img-fluid mb-3" src="{{ asset('storage/artikel/' . $artikel->image) }}" alt="">
            <div class="konten-berita">
                <p class="mb-3 text-secondary">21/04/2023</p>
                <h4 class="fw-bold mb-3">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>
    </section>
@endsection

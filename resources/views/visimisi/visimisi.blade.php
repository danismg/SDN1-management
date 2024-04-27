@extends('layouts.layouts')

@section('content')
    <section id="berita" style="margin-top: 50px" class="py-5">
        <br>
        <div class="container py-5">

            <div class="header-berita text-center">
                <h2 class="fw-bold mb-5">VISI</h2>
                @foreach ($visi as $visi)
                    <h5 class="">"
                        {{ $visi->visi }}"
                    </h5>
                @endforeach
                <h2 class="fw-bold mb-5 mt-5">MISI</h2>

                <div class="text-start px-5">
                    <ul class="px-5">
                        @foreach ($misi as $misi)
                            <li>
                                <h5>{{ $misi->misi }}</h5>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection

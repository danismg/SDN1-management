@extends('layouts.layouts')

@section('content')
    <section id="berita" style="margin-top: 50px" class="py-5">
        <section id="saran" class="py-5">
            <div class="container mt-5">
                {{-- alsdfjasdf;asdf --}}
                {{-- Pesan Sukses --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show  gap-3" role="alert">
                        <strong class="me-3">Informasi </strong> <strong class="me-3"> : </strong>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                            data-bs-target=".alert"></button>
                    </div>
                @endif
                <div class="form-section">
                    <h2 class="mb-4 text-center">Formulir Saran</h2>
                    <form action="{{ route('saran.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomortelepon" class="form-label">Nomor Telepon (Opsional)</label>
                            <input type="text" class="form-control" id="nomortelepon" name="nomortelepon">
                        </div>
                        <div class="mb-3">
                            <label for="saran" class="form-label">Saran <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="saran" name="saran" rows="3" required></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-custom">Kirim Saran</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endsection

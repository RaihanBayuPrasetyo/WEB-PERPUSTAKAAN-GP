@extends('layouts.buku')
@section('title', 'Home | Kategori Buku')

@section('content')
<div class="container">
    <h2 class="text-center mb-3">Kategori Buku : {{ $cb->nama_kategori }}</h2>
    <div class="row mb-3">
        @forelse ($books as $b)
        <div class="col-lg-4 col-md-6 d-flex justify-content-evenly mb-4">
            <div class="card p-1 position-relative" style="width: 22rem;">
                <img src="{{ url('storage/cover-books/'. $b->image) }}" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h4 class="card-title">{{ $b->judul }}</h4>
                    <div class="card-fasilitas d-flex justify-content-between align-items-center px-4">
                    <p class="card-text">{{ Str::limit($b->keterangan, 30, '...') }}</p>
                    <p class="fw-bold">Stok : {{ $b->stok }}</p>
                    <a href="{{ route('detail-book', $b->slug) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <h3>Data buku kosong</h3>
        @endforelse
        <div class="col-lg-4 col-md-6 d-flex justify-content-evenly mb-4">
            <div class="card p-1 position-relative" style="width: 22rem;">
                <img src="{{ url('storage/cover-books/'. $b->image) }}" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h4 class="card-title">{{ $b->judul }}</h4>
                    <div class="card-fasilitas d-flex justify-content-between align-items-center px-4">
                    <p class="card-text">{{ Str::limit($b->keterangan, 30, '...') }}</p>
                    <p class="fw-bold">Stok : {{ $b->stok }}</p>
                    <a href="{{ route('detail-book', $b->slug) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

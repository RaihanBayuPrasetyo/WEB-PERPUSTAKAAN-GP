@extends('layouts.home')
@section('title', 'Home | Search Book')

@section('content')
<div class="container">
  <div class="row mb-2">
    <div class="col-md-6 text-center">
      <form action="{{ route('search-book') }}" method="GET">
        @csrf
        <input type="search" name="search" class="form-control mb-3" placeholder="Cari judul  buku">
      </form>
    </div>
  </div>
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
       <div class="alert alert-danger mt-2 mb-2 p-2">
        <h4>Data Yang Anda Cari Tidak Ada!</h4>
       </div>
       @endforelse
     </div>
     <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-12">
               {{ $books->links() }}
          </div>
     </div>
     <div class="row mb-3">
        @forelse ($book as $b)
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
      </div>
      {{ $book->links() }}
   </div>
@endsection

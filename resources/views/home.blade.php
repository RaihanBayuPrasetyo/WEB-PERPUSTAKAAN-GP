@extends('layouts.home')
@section('title', 'Home | Perpustakaan')

@section('content')
    <!-- Layanan Perpus -->
    <section id="layanan">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Perpus gp, hadir dengan berbagai layanan yaitu</span>
                </div>
            </div>

            <div class="row mt-5 mb-4">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('images/backgrounds/about-icon-2 1.png') }}"
                                class="circle-test position-absolute top-50 start-50 translate-middle" alt="">
                        </div>
                        <h3 class="mt-4">Baca & Pinjam Buku</h3>
                        <p class="mt-3">Lakukan peminjaman dengan cepat dan mudah !</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('images/backgrounds/about-icon-3 2.png') }}"
                                class="circle-test position-absolute top-50 start-50 translate-middle" alt="">
                        </div>
                        <h3 class="mt-4">Kunjungan & Edukasi perpus</h3>
                        <p class="mt-3">Kunjungan dan edukasi perpus untuk menu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Layanan Perpus -->
    <section id="rekomendasi">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <h2>Daftar Buku Terupdate</h2>
                </div>
            </div>
            <div class="col-md-12 col-lg-10 mb-4">
                {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                    </li>
                </ul>
                <div class="col-md-6 text-center">
                    <form action="{{ route('search-book') }}" method="GET" class="form-inline">
                        @csrf
                        <input type="text" class="form-control" placeholder="Cari Judul Atau Penulis"
                            aria-describedby="button-addon2">
                    </form>
                </div> --}}
            </div>
            <div class="row">
                @forelse ($books as $b)
                    <div class="col-lg-4 col-md-6 d-flex justify-content-evenly mb-4">
                        <div class="card p-1 position-relative" style="width: 22rem;">
                            <img src="{{ url('storage/cover-books/' . $b->image) }}" class="card-img-top" alt="Image 1">
                            <div>
                                <h4 class="card-title mx-2 mt-2">{{ $b->judul }}</h4>
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
                {{-- <div class="col-md-3">
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Kategori Buku</h5>
          <form action="{{ route('search-book') }}" method="GET">
            @csrf
            <input type="search" name="search" class="form-control mb-3" placeholder="Cari Kategori Buku">
          </form>
          @forelse($category_books as $cb)
          <a href="{{ route('category-book', $cb->id) }}" class="card-text">{{ $cb->nama_kategori }}</a>
          @empty
          <p class="card-text">Data Kategori Buku Tidak Ada..</p>
          @endforelse
        </div>
      </div>
    </div> --}}
            </div>
        </div>
    @endsection

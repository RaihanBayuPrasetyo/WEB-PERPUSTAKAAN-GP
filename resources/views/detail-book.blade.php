@extends('layouts.buku')
@section('title', 'Home | Detail Buku')

@section('content')
<div class="container">
     <div class="row mb-3 mt-4">
          <div class="col-lg-4 col-md-6 col-sm-8 m-auto">
               <div class="card shadow overflow-hidden">
                    <div class="card-body">
                         <img class="w-100" src="{{ url('storage/cover-books/' . $b->image) }}" class="card-img-top" alt="Image 1">
                         <div class="card-footer">
                              <h5 class="card-title mt-3">{{ $b->judul }}</h5>
                              <p>Stok : {{ $b->stok }}</p>
                              <p>Pengarang : {{ $b->pengarang }}</p>
                              <p>Penerbit : {{ $b->penerbit }}</p>
                              <p>Diterbitkan tahun : {{ $b->tahun }}</p>
                              <p>Lokasi / Rak : {{ $b->lokasi }}</p>
                              <p class="card-text">{{ $b->keterangan }}</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     
     <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-12">
               {{ $books->links() }}
          </div>
     </div>
   </div>
@endsection

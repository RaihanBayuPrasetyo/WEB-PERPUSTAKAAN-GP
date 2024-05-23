@extends('layouts.dashboard-student')
@section('title', 'Anggota | Pinjam Buku')
    
@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-12">
            @error('error')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Peminjaman Buku</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('book-student.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="student_id" class="form-label">Nama Anggota</label>
                                <select name="student_id" id="student_id" class="form-control @error('student_id') is-invalid @enderror">
                                    <option value="{{ Auth::guard('student')->user()->id }}">{{ Auth::guard('student')->user()->nama }}</option> 
                                </select>
                                @error('student_id')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="book_id" class="form-label">Judul Buku</label>
                                <select name="book_id" id="book_id" class="form-control @error('book_id') is-invalid @enderror">
                                    <option value="{{ $id }}" selected>{{ $book->judul }}</option>
                                    @foreach ($books as $book)
                                        @if ($book->id != $id)
                                            <option value="{{ $book->id }}">{{ $book->judul }}</option>
                                        @endif
                                    @endforeach
                                </select>                                
                                @error('book_id')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="peminjaman" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" name="peminjaman" value="{{ $peminjaman }}" id="peminjaman" class="form-control @error('peminjaman') @enderror">
                                @error('peminjaman')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="pengembalian" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" name="pengembalian" value="{{ $pengembalian }}" id="pengembalian" class="form-control @error('pengembalian') @enderror ">
                                @error('pengembalian')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="admin" class="form-label">Status Disetujui Admin</label>
                                <input type="text" name="admin" value="{{ $allow }}" id="admin" class="form-control @error('admin') is-invalid @enderror" readonly>
                                @error('admin')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" value="{{ $status }}" id="status" class="form-control @error('status') is-invalid @enderror" readonly>
                                @error('status')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary float-end ms-3">Pinjam</button>
                                <a href="{{ route('book-student.show', $id) }}" class="btn btn-secondary float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
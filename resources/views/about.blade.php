@extends('layouts.about')
@section('title', 'about | Perpustakaan')

@section('content')
<section id="layanan">
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Galeri Perpustakaan</h2>
            </div>
        </div>

        <div class="row mt-5 mb-4">
            <div class="col-md-4 position-relative" style="margin-bottom:10rem">
                <div class="card-layanan overflow-hidden">
                    <img style="object-fit:cover;" class="rounded w-100 h-100 object-fit-cover" src="{{ asset('images/products/Kunjungan 1.png') }}" alt=""/>
                </div>

                <div class="custom-shadow text-center position-absolute bg-white bottom-0 start-50 p-4" style="transform: translateX(-50%) translateY(50%); width: 85%; border-radius:1rem;">
                    <h2 class="fs-3">Kunjungan</h2>
                    <p class="fs-3 fw-bold">Peresmian Perpustakaan</p>
                    <div class="rounded rounded text-black galeri-button py-3 border border-black border-1" style="cursor:pointer;">
                        <a class="card-link" href="https://www.instagram.com/p/CneW11syhLG/?igsh=MXg2ZWdmNnNmN3lvcg==">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 position-relative" style="margin-bottom:10rem">
                <div class="card-layanan overflow-hidden">
                    <img style="object-fit:cover;" class="rounded w-100 h-100 object-fit-cover" src="{{ asset('images/products/Kunjungan 2.png') }}" alt=""/>
                </div>

                <div class="custom-shadow text-center position-absolute bg-white bottom-0 start-50 p-4" style="transform: translateX(-50%) translateY(50%); width: 85%; border-radius:1rem;">
                    <h2 class="fs-3">Kunjungan</h2>
                    <p class="fs-3 fw-bold">Caleg DPR Kab.Bogpr</p>
                    <div class="rounded rounded text-black galeri-button py-3 border border-black border-1" style="cursor:pointer;">
                        <a class="card-link" href="https://www.instagram.com/p/CxmzIuHy2Yw/?igsh=aWhwcDlmYms4amVh">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 position-relative" style="margin-bottom:10rem">
                <div class="card-layanan overflow-hidden">
                    <img style="object-fit:cover;" class="rounded w-100 h-100 object-fit-cover" src="{{ asset('images/products/Kunjungan 3.png') }}" alt=""/>
                </div>

                <div class="custom-shadow text-center position-absolute bg-white bottom-0 start-50 p-4" style="transform: translateX(-50%) translateY(50%); width: 85%; border-radius:1rem;">
                    <h2 class="fs-3">Kegiatan</h2>
                    <p class="fs-3 fw-bold">Donasi Buku</p>
                    <div class="rounded rounded text-black galeri-button py-3 border border-black border-1" style="cursor:pointer;">
                        <a class="card-link" href="https://www.instagram.com/p/CneW11syhLG/?igsh=MXg2ZWdmNnNmN3lvcg==">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 position-relative" style="margin-bottom:10rem">
                <div class="card-layanan overflow-hidden">
                    <img style="object-fit:cover;" class="rounded w-100 h-100 object-fit-cover" src="{{ asset('images/products/Kunjungan 4.png') }}" alt=""/>
                </div>

                <div class="custom-shadow text-center position-absolute bg-white bottom-0 start-50 p-4" style="transform: translateX(-50%) translateY(50%); width: 85%; border-radius:1rem;">
                    <h2 class="fs-3">Edukasi Perpus</h2>
                    <p class="fs-3 fw-bold">Edukasi paud</p>
                    <div class="rounded rounded text-black galeri-button py-3 border border-black border-1" style="cursor:pointer;">
                        <a class="card-link" href="https://www.instagram.com/p/CpdGUbAynAn/?igsh=Mmh0aHhzaHVlbmhz">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>       

<section id="pengurus" style="background-color: #00985B">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <h2 class="text-black mt-4">Pengurus perpus</h2>
            </div>
        </div>

        <div class="row mt-5 mb-4">
            <div class="col-md-4 position-relative" style="margin-bottom:10rem">
                <div class="card-layanan overflow-hidden">
                    <img style="object-fit:cover;" class="rounded w-100 h-100 object-fit-cover" src="{{ asset('images/products/ketualem.jpg') }}" alt=""/>
                </div>

                <div class="custom-shadow rounded py-3 text-center position-absolute bg-white bottom-0 start-50 p-2 mb-3" style="transform:translateX(-50%); width:85%;">
                    <h2 class="fs-4 text-black fw-bold">Muhammad Fadli Pratama</h2>
                    <p class="p-0 m-0">Ketua Lembaga Perpustakaan Desa Gunung Putri</p>
                </div>
            </div>
            <div class="col-md-4 position-relative" style="margin-bottom:10rem">
                <div class="card-layanan overflow-hidden">
                    <img style="object-fit:cover;" class="rounded w-100 h-100 object-fit-cover" src="{{ asset('images/products/pake.png') }}" alt=""/>
                </div>

                <div class="custom-shadow rounded py-3 text-center position-absolute bg-white bottom-0 start-50 p-2 mb-3" style="transform:translateX(-50%); width:85%;">
                    <h2 class="fs-4 text-black fw-bold">Kiki Zakiyah</h2>
                    <p class="p-0 m-0">Bunda Literasi Desa </p>
                </div>
            </div>
            <div class="col-md-4 position-relative" style="margin-bottom:10rem">
                <div class="card-layanan overflow-hidden">
                    <img style="object-fit:cover;" class="rounded w-100 h-100 object-fit-cover" src="{{ asset('images/products/kepalaliterasi.jpg') }}" alt=""/>
                </div>

                <div class="custom-shadow rounded py-3 text-center position-absolute bg-white bottom-0 start-50 p-2 mb-3" style="transform:translateX(-50%); width:85%;">
                    <h2 class="fs-4 text-black fw-bold">Desyma Fahira Siregar</h2>
                    <p class="p-0 m-0">Kepala Dusun Literasi 1</p>
                </div>
            </div>
        </div>   
    </div>
</section>

<section id="frequently-asked-question">
    <h2 class="text-center my-4 text-black-fw-bold">Frequently Asked Question</h2>
    
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Apa itu perpustakaan desa gunung putri ? 
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong> lembaga yang bertanggung jawab terhadap Edukasi dan Literasi Masyarakat. Lembaga ini dilahirkan dengan tujuan untuk dapat mengatasi berbagai persoalan berkenaan dengan Edukasi dan Literasi masyarakat </strong>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Berapa jenis buku bacaan yang tersedia di perpustakan ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong> Ada banyak jenis buku bacaan yang tersedia, dan setiap bulan nya akan selalu bertambah </strong>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Bagaimana cara melakukan peminjaman buku
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong> Peminjaman dapat dilakukan dengan login terlebih dahulu, buat akun dihalaman register untuk melakukan pendaftaran anggota, setelah itu lakukan login dan pilih buku yang diinginakan. </strong>
                  <strong> Isi form peminjaman buku lalu submit, jika status peminjaman sudah diterima oleh admin, maka diperbolehkan mengambil buku di perpustakaan. Jika belum disetujui tunggu hingga status disetujui</strong>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Apakah harus datang ke lokasi perpustakaan untuk peminjaman dan pengembalian buku ?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong> Untuk peminjaman dapat dilakukan melalui website ini dengan menunjukan status disetujui ke pengurus perpus. Untuk sementara ini pengguna harus mengambil buku fisik di lokasi perpustakaan, karena belum bersifat ebook </strong>
                  </div>
                </div>
          </div>
    </div>
</section>
@endsection

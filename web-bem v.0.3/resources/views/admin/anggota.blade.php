<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - BEM STB 2024</title>
    
    <meta name="title" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA">
    <meta name="description" content="WEBSITE RESMI BADAN EKSEKUTIF MAHASISWA STIMIK TUNAS BANGSA - KABINET NARADHIPTA">
    <meta name="keywords" content="BEM STB, Bem STB, Bem  Stimik Tunas Bangsa, STB, Stimik Tunas Bangsa, Naradhipta, Bem Kabinet Naradhipta">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Bem Stimik Tunas Bangsa">

    <!-- meta property -->
    <meta property="og:title" content="BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('asets/images/logo-1x1.png') }}" />
    <meta property="og:url" content="{{ asset('') }}kontak" />
    <meta property="og:description" content="ADMIN - KABINET NARADHIPTA" />
    <meta property="og:site_name" content="ADMIN BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:image:secure_url" content="{{ asset('asets/images/logo-1x1.ico') }}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="shortcut icon" href="{{ asset('asets/images/logo-1x1.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('asets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asets/library/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('asets/custom/css/style.css') }}">
</head>
<body data-scroll-index="0" class="onloading">

    @include('components.preloader')
    @include('components.navbar-admin')

    <section class="dashboard-admin">
        <div class="container">
            <div class="row">
                <h1 class="text-center py-2">ANGGOTA</h1>
            </div>
            <div class="row pb-5 align-items-sterct">
                <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                    <div class="card p-3">
                        <div class="row">
                            <form action="{{ route('admin.anggota.update', $Presma->id_anggota) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <img src="{{ $Presma->gambar_anggota }}" alt="" srcset="" class="w-100 mb-3">
                                <p class="my-0">Upload Gambar</p>
                                <div class="mb-2">
                                    <input class="form-control" type="file" name="gambar_anggota" id="formFile"> <!-- Beri nama pada input file -->
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control w-100" name="jabatan_anggota" id="floatingInput" value="{{ $Presma->jabatan_anggota }}">
                                    <label for="floatingInput">Jabatan</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control w-100" name="nama_anggota" id="floatingInput" value="{{ $Presma->nama_anggota }}">
                                    <label for="floatingInput">Nama</label>
                                </div>
                                <div class="mb-2">
                                    <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                        <option value="INFORMATIKA" {{ $Presma->jurusan_anggota === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                        <option value="SISTEM INFORMASI" {{ $Presma->jurusan_anggota === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="number" class="form-control w-100" name="angkatan_anggota" id="floatingInput" value="{{ $Presma->angkatan_anggota }}">
                                    <label for="floatingInput">Angkatan</label>
                                </div>
                                <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                        <path d="M11 2H9v3h2z"/>
                                        <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                    </svg>
                                    Simpan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                    <div class="card p-3">
                        <div class="row">
                            <form action="{{ route('admin.anggota.update', $WaPresma->id_anggota) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <img src="{{ $WaPresma->gambar_anggota }}" alt="" srcset="" class="w-100 mb-3">
                                <p class="my-0">Upload Gambar</p>
                                <div class="mb-2">
                                    <input class="form-control" type="file" name="gambar_anggota" id="formFile"> <!-- Beri nama pada input file -->
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control w-100" name="jabatan_anggota" id="floatingInput" value="{{ $WaPresma->jabatan_anggota }}">
                                    <label for="floatingInput">Jabatan</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control w-100" name="nama_anggota" id="floatingInput" value="{{ $WaPresma->nama_anggota }}">
                                    <label for="floatingInput">Nama</label>
                                </div>
                                <div class="mb-2">
                                    <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                        <option value="INFORMATIKA" {{ $WaPresma->jurusan_anggota === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                        <option value="SISTEM INFORMASI" {{ $WaPresma->jurusan_anggota === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="number" class="form-control w-100" name="angkatan_anggota" id="floatingInput" value="{{ $WaPresma->angkatan_anggota }}">
                                    <label for="floatingInput">Angkatan</label>
                                </div>
                                <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                        <path d="M11 2H9v3h2z"/>
                                        <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                    </svg>
                                    Simpan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>


                @foreach ($Sekretaris as $sekretaris)
                    <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                        <div class="card p-3">
                            <div class="row">
                                <img src="{{ $sekretaris['gambar_anggota'] }}" alt="" srcset="" class="w-100 mb-3">
                                <p class="my-0">Upload Gambar</p>
                                <form action="{{ route('admin.anggota.update', $sekretaris['id_anggota']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2">
                                        <input class="form-control" type="file" name="gambar_anggota" id="formFile">
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="posisi_anggota" value="{{ $sekretaris['posisi_anggota'] }}">
                                        <label for="floatingInput">Posisi</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="jabatan_anggota" value="{{ $sekretaris['jabatan_anggota'] }}">
                                        <label for="floatingInput">Jabatan</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="nama_anggota" value="{{ $sekretaris['nama_anggota'] }}">
                                        <label for="floatingInput">Nama</label>
                                    </div>
                                    <div class="mb-2">
                                        <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                            <option value="INFORMATIKA" {{ $sekretaris['jurusan_anggota'] === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                            <option value="SISTEM INFORMASI" {{ $sekretaris['jurusan_anggota'] === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control w-100" name="angkatan_anggota" value="{{ $sekretaris['angkatan_anggota'] }}">
                                        <label for="floatingInput">Angkatan</label>
                                    </div>
                                    <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2z"/>
                                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                        </svg>
                                        Simpan
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                <form action="{{ route('admin.anggota.delete', $sekretaris['id_anggota']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm w-100 mt-2 text-white btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                        Hapus Anggota
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($Bendahara as $bendahara)
                    <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                        <div class="card p-3">
                            <div class="row">
                                <form action="{{ route('admin.anggota.update', $bendahara['id_anggota']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <img src="{{ $bendahara['gambar_anggota'] }}" alt="" class="w-100 mb-3">
                                    <p class="my-0">Upload Gambar</p>
                                    <div class="mb-2">
                                        <input class="form-control" type="file" name="gambar_anggota" id="formFile">
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="posisi_anggota" value="{{ $bendahara['posisi_anggota'] }}">
                                        <label for="floatingInput">Posisi</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="jabatan_anggota" value="{{ $bendahara['jabatan_anggota'] }}">
                                        <label for="floatingInput">Jabatan</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="nama_anggota" value="{{ $bendahara['nama_anggota'] }}">
                                        <label for="floatingInput">Nama</label>
                                    </div>
                                    <div class="mb-2">
                                        <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                            <option value="INFORMATIKA" {{ $bendahara['jurusan_anggota'] === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                            <option value="SISTEM INFORMASI" {{ $bendahara['jurusan_anggota'] === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control w-100" name="angkatan_anggota" value="{{ $bendahara['angkatan_anggota'] }}">
                                        <label for="floatingInput">Angkatan</label>
                                    </div>
                                    <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2z"/>
                                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                        </svg>
                                        Simpan
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                <form action="{{ route('admin.anggota.delete', $bendahara['id_anggota']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm w-100 mt-2 text-white btn-danger" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                        Hapus Anggota
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

                

                @foreach ($AnggotaPsdm as $anggotaPsdm)
                    <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                        <div class="card p-3">
                            <div class="row">
                                <form action="{{ route('admin.anggota.update', $anggotaPsdm['id_anggota']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <img src="{{ $anggotaPsdm['gambar_anggota'] }}" alt="" class="w-100 mb-3">
                                    <p class="my-0">Upload Gambar</p>
                                    <div class="mb-2">
                                        <input class="form-control" type="file" name="gambar_anggota" id="formFile">
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="posisi_anggota" value="{{ $anggotaPsdm['posisi_anggota'] }}">
                                        <label for="floatingInput">Posisi</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="jabatan_anggota" value="{{ $anggotaPsdm['jabatan_anggota'] }}">
                                        <label for="floatingInput">Jabatan</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="nama_anggota" value="{{ $anggotaPsdm['nama_anggota'] }}">
                                        <label for="floatingInput">Nama</label>
                                    </div>
                                    <div class="mb-2">
                                        <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                            <option value="INFORMATIKA" {{ $anggotaPsdm['jurusan_anggota'] === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                            <option value="SISTEM INFORMASI" {{ $anggotaPsdm['jurusan_anggota'] === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control w-100" name="angkatan_anggota" value="{{ $anggotaPsdm['angkatan_anggota'] }}">
                                        <label for="floatingInput">Angkatan</label>
                                    </div>
                                    <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2z"/>
                                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                        </svg>
                                        Simpan
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                <form action="{{ route('admin.anggota.delete', $anggotaPsdm['id_anggota']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm w-100 mt-2 text-white btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                        Hapus Anggota
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($AnggotaLsm as $anggotaLsm)
                    <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                        <div class="card p-3">
                            <div class="row">
                                <form action="{{ route('admin.anggota.update', $anggotaLsm['id_anggota']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <img src="{{ $anggotaLsm['gambar_anggota'] }}" alt="" class="w-100 mb-3">
                                    <p class="my-0">Upload Gambar</p>
                                    <div class="mb-2">
                                        <input class="form-control" type="file" name="gambar_anggota" id="formFile">
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="posisi_anggota" value="{{ $anggotaLsm['posisi_anggota'] }}">
                                        <label for="floatingInput">Posisi</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="jabatan_anggota" value="{{ $anggotaLsm['jabatan_anggota'] }}">
                                        <label for="floatingInput">Jabatan</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="nama_anggota" value="{{ $anggotaLsm['nama_anggota'] }}">
                                        <label for="floatingInput">Nama</label>
                                    </div>
                                    <div class="mb-2">
                                        <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                            <option value="INFORMATIKA" {{ $anggotaLsm['jurusan_anggota'] === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                            <option value="SISTEM INFORMASI" {{ $anggotaLsm['jurusan_anggota'] === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control w-100" name="angkatan_anggota" value="{{ $anggotaLsm['angkatan_anggota'] }}">
                                        <label for="floatingInput">Angkatan</label>
                                    </div>
                                    <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2z"/>
                                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                        </svg>
                                        Simpan
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                <form action="{{ route('admin.anggota.delete', $anggotaLsm['id_anggota']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm w-100 mt-2 text-white btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                        Hapus Anggota
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($AnggotaKominfo as $anggotaKominfo)
                    <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                        <div class="card p-3">
                            <div class="row">
                                <form action="{{ route('admin.anggota.update', $anggotaKominfo['id_anggota']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <img src="{{ $anggotaKominfo['gambar_anggota'] }}" alt="" class="w-100 mb-3">
                                    <p class="my-0">Upload Gambar</p>
                                    <div class="mb-2">
                                        <input class="form-control" type="file" name="gambar_anggota" id="formFile">
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="posisi_anggota" value="{{ $anggotaKominfo['posisi_anggota'] }}">
                                        <label for="floatingInput">Posisi</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="jabatan_anggota" value="{{ $anggotaKominfo['jabatan_anggota'] }}">
                                        <label for="floatingInput">Jabatan</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="nama_anggota" value="{{ $anggotaKominfo['nama_anggota'] }}">
                                        <label for="floatingInput">Nama</label>
                                    </div>
                                    <div class="mb-2">
                                        <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                            <option value="INFORMATIKA" {{ $anggotaKominfo['jurusan_anggota'] === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                            <option value="SISTEM INFORMASI" {{ $anggotaKominfo['jurusan_anggota'] === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control w-100" name="angkatan_anggota" value="{{ $anggotaKominfo['angkatan_anggota'] }}">
                                        <label for="floatingInput">Angkatan</label>
                                    </div>
                                    <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2z"/>
                                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                        </svg>
                                        Simpan
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                <form action="{{ route('admin.anggota.delete', $anggotaKominfo['id_anggota']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm w-100 mt-2 text-white btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                        Hapus Anggota
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($AnggotaSenbora as $anggotaSenbora)
                    <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                        <div class="card p-3">
                            <div class="row">
                                <form action="{{ route('admin.anggota.update', $anggotaSenbora['id_anggota']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <img src="{{ $anggotaSenbora['gambar_anggota'] }}" alt="" class="w-100 mb-3">
                                    <p class="my-0">Upload Gambar</p>
                                    <div class="mb-2">
                                        <input class="form-control" type="file" name="gambar_anggota" id="formFile">
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="posisi_anggota" value="{{ $anggotaSenbora['posisi_anggota'] }}">
                                        <label for="floatingInput">Posisi</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="jabatan_anggota" value="{{ $anggotaSenbora['jabatan_anggota'] }}">
                                        <label for="floatingInput">Jabatan</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="nama_anggota" value="{{ $anggotaSenbora['nama_anggota'] }}">
                                        <label for="floatingInput">Nama</label>
                                    </div>
                                    <div class="mb-2">
                                        <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                            <option value="INFORMATIKA" {{ $anggotaSenbora['jurusan_anggota'] === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                            <option value="SISTEM INFORMASI" {{ $anggotaSenbora['jurusan_anggota'] === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control w-100" name="angkatan_anggota" value="{{ $anggotaSenbora['angkatan_anggota'] }}">
                                        <label for="floatingInput">Angkatan</label>
                                    </div>
                                    <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2z"/>
                                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                        </svg>
                                        Simpan
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                <form action="{{ route('admin.anggota.delete', $anggotaSenbora['id_anggota']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm w-100 mt-2 text-white btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                        Hapus Anggota
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($AnggotaKemenlu as $anggotaKemenlu)
                    <div class="col-md-6 col-lg-4 col-xxl-3 p-3">
                        <div class="card p-3">
                            <div class="row">
                                <form action="{{ route('admin.anggota.update', $anggotaKemenlu['id_anggota']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <img src="{{ $anggotaKemenlu['gambar_anggota'] }}" alt="" class="w-100 mb-3">
                                    <p class="my-0">Upload Gambar</p>
                                    <div class="mb-2">
                                        <input class="form-control" type="file" name="gambar_anggota" id="formFile">
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="posisi_anggota" value="{{ $anggotaKemenlu['posisi_anggota'] }}">
                                        <label for="floatingInput">Posisi</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="jabatan_anggota" value="{{ $anggotaKemenlu['jabatan_anggota'] }}">
                                        <label for="floatingInput">Jabatan</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control w-100" name="nama_anggota" value="{{ $anggotaKemenlu['nama_anggota'] }}">
                                        <label for="floatingInput">Nama</label>
                                    </div>
                                    <div class="mb-2">
                                        <select class="form-select" name="jurusan_anggota" aria-label="Default select example">
                                            <option value="INFORMATIKA" {{ $anggotaKemenlu['jurusan_anggota'] === 'INFORMATIKA' ? 'selected' : '' }}>INFORMATIKA</option>
                                            <option value="SISTEM INFORMASI" {{ $anggotaKemenlu['jurusan_anggota'] === 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control w-100" name="angkatan_anggota" value="{{ $anggotaKemenlu['angkatan_anggota'] }}">
                                        <label for="floatingInput">Angkatan</label>
                                    </div>
                                    <button type="submit" class="btn btn-sm w-100 me-1 mt-3 text-white btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                            <path d="M11 2H9v3h2z"/>
                                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
                                        </svg>
                                        Simpan
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                <form action="{{ route('admin.anggota.delete', $anggotaKemenlu['id_anggota']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm w-100 mt-2 text-white btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                        Hapus Anggota
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>  

    @include('components.footer')
    @include('components.backtotop')
    @include('components.js-include')

</body>
</html>
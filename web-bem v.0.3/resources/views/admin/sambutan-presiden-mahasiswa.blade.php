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

    <section class="dashboard-admin pb-5">
        <div class="container">
            <div class="row">
                <h1 class="text-dark text-center">Sambutan Presiden Mahasiswa</h1>
            </div>
            <div class="row mt-5">
                <h2>Gambar Presma </h2>
                <form action="{{ route('admin.updateFotoPresma') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="file" id="formFile" name="isi_informasi">
                    <div class="col-6 col-md-4 mt-2">
                        <button type="submit" class="btn btn-md btn-success w-100">Simpan Data</button>
                    </div>
                </form>
            </div>
            
            <div class="row mt-5">    
                <form action="{{ route('admin.updateSambutan') }}" method="POST">
                    @csrf
                    <textarea name="sambutan_presiden_mahasiswa" class="textarea form-control">{{ $sambutanPresidenMahasiswa->isi_informasi }}</textarea>
                    <div class="col-6 col-md-4 mt-2">
                        <button type="submit" class="btn btn-md btn-success w-100">Simpan Data</button>
                    </div>
                </form>                
            </div>
            
        </div>
    </section>  

    @include('components.footer')
    @include('components.backtotop')
    @include('components.js-include')

</body>
</html>
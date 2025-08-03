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
                <h1 class="text-center pt-2 pb-5">PENGATURAN</h1>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.setting') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xl-6">
                        <h2>Nama</h2>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control input-lg" name="name" id="floatingInput" value="{{ $User->name }}" required>
                            <label for="floatingInput">Nama</label>
                        </div>
                        <h2>Ubah Email</h2>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control input-lg" name="email" id="floatingInput" value="{{ $User->email }}" required>
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <h2>Ubah Password</h2>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control input-lg" name="old_password" id="floatingInput">
                            <label for="floatingInput">Password Lama</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control input-lg" name="new_password" id="new_password">
                            <label for="new_password">Password Baru</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control input-lg" name="new_password_confirmation" id="new_password_confirmation">
                            <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                        </div>                        
                    </div>
                    <div class="col-xl-12 pt-3">
                        <button type="submit" class="btn btn-md w-100 me-1 text-white btn-success py-2">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>  

    @include('components.footer')
    @include('components.backtotop')
    @include('components.js-include')

</body>
</html>
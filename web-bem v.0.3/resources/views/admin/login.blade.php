<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN - BEM STB 2024</title>
    
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
    <meta property="og:description" content="ADMIN LOGIN - KABINET NARADHIPTA" />
    <meta property="og:site_name" content="ADMIN LOGIN BEM STIMIK TUNAS BANGSA KABINET NARADHIPTA" />
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

    <section class="jumbotron jumbotron-home">
        <div class="container z-1">
            <div class="card bg-dark text-white py-5 rounded-2">
                <div class="row">
                    <h1>ADMIN LOGIN</h1>
                </div>
                <div class="row pt-2">
                    @if(session('success'))
                        <div class="alert w-75 mx-auto alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert w-75 mx-auto alert-danger">
                                @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                        </div>
                    @endif
                </div>
                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
                    <div class="row mt-3 text-center">
                        <label for="inputEmail" class="form-label fs-1">Email</label>
                        <input type="email" name="email" class="form-control bg-transparent text-white w-75 m-auto outline-none" id="inputEmail" required>
                    </div>
                    <div class="row mb-3 text-center">
                        <label for="inputPassword" class="form-label fs-1">Password</label>
                        <input type="password" name="password" class="form-control bg-transparent text-white w-75 m-auto outline-none" id="inputPassword" required>
                    </div>
                    <div class="row text-center">
                        <button type="submit" class="btn btn-lg btn-success w-50 m-auto">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </section>    

    @include('components.js-include')

</body>
</html>
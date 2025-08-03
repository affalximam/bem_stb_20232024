<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row bottom-navigation">
                    <div class="col-6 col-lg-12 bottom-navigation-1">
                        <a href="/">Home</a>
                        <a href="/tentang">Tentang Kami </a>
                        <a href="/struktur-organisasi">Struktur Organisasi </a>
                        <a href="/program-kerja">Program Kerja </a>
                    </div>
                    <div class="col-6 col-lg-12 bottom-navigation-2">
                        <a href="/dokumentasi">Dokumentasi </a>
                        <a href="/kontak">Kontak </a>
                        <a href="/developer">Tentang Developer </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Hubungi Kami</h2>
                <div class="social-media">
                    <a href="#">
                        <img src="{{ asset('asets/svg/envelope.svg') }}">
                    </a>
                    <a href="#">
                        <img src="{{ asset('asets/svg/instagram.svg') }}">
                    </a>
                    <a href="#">
                        <img src="{{ asset('asets/svg/tiktok.svg') }}">
                    </a>
                    <a href="#">
                        <img src="{{ asset('asets/svg/youtube.svg') }}">
                    </a>
                </div>
                <p>Atau isi kotak submisi dibawah ini:</p>
                <form action="{{ route('contact.add.message') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="nama" required>
                        <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="nama@email.com" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="message" id="floatingPassword" placeholder="pesan" required></textarea>
                        <label for="floatingPassword">Pesan</label>
                    </div>
                    <button type="submit" class="btn btn-lg">Kirim Pesan</button>
                </form>                
            </div>
        </div>
    </div>
</section>
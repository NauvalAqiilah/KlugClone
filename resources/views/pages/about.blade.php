@extends('layouts.app')

@section('title', 'Tentang Kami')

@push('styles')
<style>
    /* ✅ Hero Banner */
    .about-hero {
        position: relative;
        height: 550px;
        overflow: hidden;
        background: url('{{ asset('images/tentangkami.jpeg') }}') center/cover no-repeat;
    }

    .about-hero .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(70, 7, 78, 0.9) 0%, rgba(25, 123, 208, 0.2) 100%);
        opacity: 0.8;
        z-index: 1;
    }

    .about-hero .hero-content {
        position: absolute;
        top: 437px;
        left: 123px;
        z-index: 2;
        color: white;
        font-size: 36px;
        line-height: 43px;
        text-align: left;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-family: 'Ubuntu-Medium', sans-serif;
        margin: 0;
        padding: 0;
        /* ❗ Penting: Hilangkan semua efek visual tambahan */
        outline: none;
        box-shadow: none;
        background: transparent;
        border: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .about-hero .hero-content h1 {
        margin: 0;
        padding: 0;
        outline: none;
        box-shadow: none;
        background: transparent;
        border: none;
        display: inline; /* Agar tidak memakan ruang berlebih */
    }

    /* ✅ Profil Section */
    .profile-section {
        padding: 70px 20px;
        max-width: 1200px;
        margin: auto;
    }

    .profile-section .container {
        max-width: 800px;
        margin: auto;
    }

    .profile-section .section-title {
        text-align: left;
        color: #4A4A4A;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .profile-section .profile-text {
        color: #4A4A4A;
        line-height: 1.8;
        font-size: 16px;
        text-align: justify;
    }

    /* ✅ VISI & MISI Section */
    .visi-misi-section {
        max-width: 1200px;
        margin: 80px auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        gap: 2.2%;
    }

    .visi, .misi {
        width: 48.9%;
    }

    .visi img, .misi img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 25px;
    }

    .visi h3, .misi h3 {
        font-weight: 600;
        font-size: 18px;
        color: #4A4A4A;
        margin-bottom: 12px;
    }

    .visi p, .misi p {
        color: #4A4A4A;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 16px;
    }

    .layanan-btn {
        display: inline-block;
        margin-top: 30px;
        padding: 10px 35px;
        border-radius: 9999px;
        border: 1.8px solid transparent;
        font-size: 14px;
        background: white;
        border-image: linear-gradient(90deg, #46074E, #197BD0) 1;
        color: #197BD0;
        transition: all 0.3s ease;
    }

    .layanan-btn:hover {
        background: linear-gradient(90deg, #46074E, #197BD0);
        color: white;
        transform: scale(1.05);
    }

    /* Responsif */
    @media (max-width: 900px) {
        .visi-misi-section {
            flex-direction: column;
            gap: 40px;
        }

        .visi, .misi {
            width: 100%;
        }

        .about-hero {
            height: 300px;
        }

        .about-hero .hero-content {
            top: 200px;
            left: 20px;
            font-size: 24px;
            line-height: 30px;
        }

        .profile-section {
            padding: 50px 15px;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Banner -->
<section class="about-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>TENTANG KAMI</h1>
    </div>
</section>

<!-- Profil Section -->
<section class="profile-section">
    <div class="container">
        <h2 class="section-title">PROFIL</h2>
        <p class="profile-text">
            Didirikan pada tahun 2018, Ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
        </p>
    </div>
</section>

<!-- ✅ VISI & MISI Section -->
<section class="visi-misi-section">
    <div class="visi">
        <img src="{{ asset('images/visi.png') }}" alt="Visi">
        <h3>VISI</h3>
        <p>
            Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
        </p>
        <a href="#" class="layanan-btn">LAYANAN KAMI</a>
    </div>

    <div class="misi">
        <img src="{{ asset('images/misi.png') }}" alt="Misi">
        <h3>MISI</h3>
        <p>
            Memfasilitasi siswa Indonesia untuk menempuh pendidikan di berbagai perguruan tinggi di lebih dari 25 negara maju di dunia dengan layanan yang profesional.
        </p>
        <p>
            Memberikan bantuan konsultasi terhadap siswa/i Indonesia dalam mempersiapkan studinya dari berbagai aspek, baik aspek sosial, budaya, maupun pendidikan.
        </p>
    </div>
</section>

<hr>

<!-- HUBUNGI KAMI Section -->
<section class="contact-section">
    <h2 class="contact-title">HUBUNGI KAMI</h2>
    <h3 class="contact-subtitle">KANTOR PUSAT</h3>

    <p class="contact-address">
        Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
    </p>
    <p class="contact-info">
        Phone : (+62 21) 398 38706 &nbsp;&nbsp;·&nbsp;&nbsp; Fax: (+62 21) 316 1701 <br>
        Hotline: +6281519040071 / +62811998167
    </p>

    <div class="contact-buttons">
        <a href="#" class="btn-gradient">LOKASI KAMI</a>
        <a href="#" class="btn-outline">KIRIM PESAN</a>
    </div>
</section>
@endsection

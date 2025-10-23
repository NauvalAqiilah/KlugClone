@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <img src="{{ asset('images/home.png') }}" alt="Background Hero" class="hero-background-img">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="hero-text">
            INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI?
        </div>
        <button class="btn-selengkapnya">
    SELENGKAPNYA
    <svg xmlns="http://www.w3.org/2000/svg" 
        width="16" height="16" 
        fill="currentColor" 
        viewBox="0 0 16 16">
        <path fill-rule="evenodd" 
            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
    </svg>
</button>

    </div>
</section>

<!-- About Section -->
<section class="section">
    <h2 class="section-title">TENTANG KAMI</h2>
    <p class="section-description">
        INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah 
        memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan 
        wisata dan berkarir di negara maju di dunia.
    </p>
</section>

<hr>

<!-- Layanan Kami Section -->
<section class="services-section">
    <h2 class="section-title">LAYANAN KAMI</h2>
    <div class="services-grid">
        <!-- Card 1 -->
        <div class="service-card">
            <img src="{{ asset('images/studyS1.png') }}" alt="Studi S1 - Bachelor">
            <div class="card-overlay">
                <span>Studi S1 - Bachelor</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="service-card">
            <img src="{{ asset('images/studyS2.png') }}" alt="Studi S2 - Master">
            <div class="card-overlay">
                <span>Studi S2 - Master</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="service-card">
            <img src="{{ asset('images/studyS3.jpg') }}" alt="Studi S3 - Ph.D">
            <div class="card-overlay">
                <span>Studi S3 - Ph.D</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="service-card">
            <img src="{{ asset('images/kursus.png') }}" alt="Kursus Bahasa Asing">
            <div class="card-overlay">
                <span>Kursus Bahasa Asing</span>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="service-card">
            <img src="{{ asset('images/studytour.png') }}" alt="Study Tour">
            <div class="card-overlay">
                <span>Study Tour</span>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="service-card">
            <img src="{{ asset('images/ausbildung.jpg') }}" alt="Ausbildung">
            <div class="card-overlay">
                <span>Ausbildung</span>
            </div>
        </div>
    </div>
</section>

<!-- MITRA KAMI Section -->
<section class="partners-section">
    <h2 class="section-title">MITRA KAMI</h2>
    <div class="partners-grid">
        <div class="partner-card">
            <img src="{{ asset('images/aviation.jpg') }}" alt="424 Aviation">
        </div>
        <div class="partner-card">
            <img src="{{ asset('images/adrew.png') }}" alt="St. Andrew's College">
        </div>
        <div class="partner-card">
            <img src="{{ asset('images/htw.png') }}" alt="HTW Berlin">
        </div>
        <div class="partner-card">
            <img src="{{ asset('images/studygroup.png') }}" alt="StudyGroup">
        </div>
    </div>
</section>

<!-- GRATIS KONSELING BANNER -->
<section class="consultation-banner">
    <div class="banner-content">
        <div class="banner-text">
            <h3>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h3>
            <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
        </div>
        <div class="banner-button">
            <button class="btn-consult">
                MULAI KONSULTASI
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path fill="currentColor" d="M8 10L3 5l1.41-1.41L8 7.17l3.59-3.58L13 5z"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- ARTIKEL TERBARU Section -->
<section class="articles-section">
    <h2 class="section-title">ARTIKEL TERBARU</h2>
    <div class="articles-grid">
        <!-- Article 1 -->
        <div class="article-card">
            <img src="{{ asset('images/studijerman.png') }}" alt="5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman">
            <p class="article-title">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
        </div>

        <!-- Article 2 -->
        <div class="article-card">
            <img src="{{ asset('images/korona.png') }}" alt="Uni Eropa Menghadapi Virus Korona">
            <p class="article-title">Uni Eropa Menghadapi Virus Korona</p>
        </div>

        <!-- Article 3 -->
        <div class="article-card">
            <img src="{{ asset('images/bahasajerman.png') }}" alt="Belajar Bahasa Jerman Bersama Goethe Insitut">
            <p class="article-title">Belajar Bahasa Jerman Bersama Goethe Insitut</p>
        </div>

        <!-- Article 4 -->
        <div class="article-card">
            <img src="{{ asset('images/gatescambride.png') }}" alt="Apa Itu Gates Cambridge? Yuk Cari Tahu">
            <p class="article-title">Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
        </div>
    </div>

    <div class="articles-button-container">
        <a href="{{ route('articles') }}" class="btn-more-articles">ARTIKEL LAINNYA</a>
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
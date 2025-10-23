@extends('layouts.app')

@section('title', 'Layanan Kami')

@push('styles')
<style>
.layanan-hero {
        position: relative;
        height: 550px;
        background: url('{{ asset('images/layanan.jpg') }}') center/cover no-repeat;
        overflow: hidden;
    }

    .layanan-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(70, 7, 78, 0.9) 0%, rgba(25, 123, 208, 0.3) 80%, rgba(25, 123, 208, 0) 100%);
        opacity: 0.8;
        z-index: 1;
    }

    /* ✅ Teks di pojok kiri bawah */
    .layanan-hero h1 {
        position: absolute;
        top: 437px;
        left: 123px;
        z-index: 2;
        color: #fff;
        font-family: 'Ubuntu-Medium', sans-serif;
        font-size: 75px;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 0 3px 8px rgba(0, 0, 0, 0.5);
        margin: 0;
    }
</style>
@endpush

@section('content')

<!-- ✅ Banner Hero -->
<section class="layanan-hero">
    <h1>LAYANAN KAMI</h1>
</section>

<!-- ✅ Section Layanan -->
<section class="section">
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

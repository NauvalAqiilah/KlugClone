@extends('layouts.app')

@section('title', 'Artikel')

@push('styles')
<style>
    .article-hero {
        position: relative;
        height: 550px;
        overflow: hidden;
        background: url('{{ asset('images/banerartikel.png') }}') center/cover no-repeat;
    }

    .article-hero .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(70, 7, 78, 0.9) 0%, rgba(25, 123, 208, 0.3) 80%, rgba(25, 123, 208, 0) 100%);
        opacity: 0.8;
        z-index: 1;
    }

    .article-hero .hero-content {
        position: absolute;
        top: 55%;
        left: 12%;
        transform: translateY(-50%);
        z-index: 2;
        color: white;
        font-family: 'Poppins', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        background: none !important;
        box-shadow: none !important;
        border: none !important;
    }

    .article-hero .hero-content .label {
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 8px;
        color: rgba(255, 255, 255, 0.9);
        display: block;
        background: none !important;
    }

    .article-hero .hero-content h1 {
        font-size: 36px;
        font-weight: 700;
        line-height: 1.3;
        color: #fff;
        margin: 0;
        max-width: 700px;
        background: none !important;
    }

    /* Artikel Section */
    .articles-section {
        padding: 70px 20px;
        max-width: 1200px;
        margin: auto;
        display: flex;
        gap: 30px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .article-card {
        width: 350px;
        border: none;
        box-shadow: none;
        background: white;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .article-card:hover {
        transform: translateY(-5px);
    }

    .article-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }

    .article-card .content {
        padding: 15px;
        text-align: left;
    }

    .article-card .content h3 {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0 0 10px 0;
        line-height: 1.4;
    }

    /* Responsif */
    @media (max-width: 992px) {
        .article-hero {
            height: 400px;
        }

        .article-hero .hero-content {
            left: 8%;
        }

        .article-hero .hero-content h1 {
            font-size: 28px;
        }
    }

    @media (max-width: 576px) {
        .article-hero {
            height: 320px;
        }

        .article-hero .hero-content {
            left: 6%;
        }

        .article-hero .hero-content h1 {
            font-size: 22px;
        }
    }

    /* === SECTION ARTIKEL TERBARU === */
    .artikel-terbaru {
        max-width: 800px;
        margin: 80px auto;
        padding: 0 20px;
        font-family: 'Poppins', sans-serif;
    }

    .artikel-terbaru h2 {
        font-size: 16px;
        font-weight: 600;
        color: #222;
        margin-bottom: 25px;
        text-transform: uppercase;
    }

    .artikel-item {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .artikel-item img {
        width: 200px;
        height: 120px;
        object-fit: cover;
        border-radius: 6px;
    }

    .artikel-item .info {
        flex: 1;
    }

    .artikel-item .info h3 {
        font-size: 16px;
        font-weight: 600;
        color: #222;
        margin: 0 0 5px 0;
    }

    .artikel-item .info p {
        font-size: 13px;
        color: #999;
        margin: 0;
    }

    /* === PAGINATION === */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
        margin-top: 50px;
    }

    .pagination button {
        border: none;
        background: none;
        color: #555;
        font-size: 14px;
        cursor: pointer;
    }

    .pagination .page {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        color: #555;
        transition: all 0.3s ease;
    }

    .pagination .page:hover {
        background: #f0f0f0;
    }

    .pagination .page.active {
        background: #197BD0;
        color: white;
    }
</style>
@endpush

@section('content')
<!-- Hero Banner -->
<section class="article-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <span class="label">TIPS</span>
        <h1>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h1>
    </div>
</section>

<!-- Articles Section -->
<section class="articles-section">
    <div class="article-card">
        <img src="{{ asset('images/tupai.png') }}" alt="Artikel 1">
        <div class="content">
            <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        </div>
    </div>

    <div class="article-card">
        <img src="{{ asset('images/becak.png') }}" alt="Artikel 2">
        <div class="content">
            <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
        </div>
    </div>
</section>

<hr>

<!-- Articles New -->
<section class="artikel-terbaru">
    <h2>ARTIKEL TERBARU</h2>

    <div class="artikel-item">
        <img src="{{ asset('images/artikelbaru-1.png') }}" alt="Artikel">
        <div class="info">
            <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <p>Selasa, 18 Feb 2020 12:01 WIB</p>
        </div>
    </div>

    <div class="artikel-item">
        <img src="{{ asset('images/artikelbaru-2.png') }}" alt="Artikel">
        <div class="info">
            <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <p>Selasa, 18 Feb 2020 12:01 WIB</p>
        </div>
    </div>

    <div class="artikel-item">
        <img src="{{ asset('images/artikelbaru-3.png') }}" alt="Artikel">
        <div class="info">
            <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <p>Selasa, 18 Feb 2020 12:01 WIB</p>
        </div>
    </div>

    <div class="artikel-item">
        <img src="{{ asset('images/artikelbaru-4.png') }}" alt="Artikel">
        <div class="info">
            <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <p>Selasa, 18 Feb 2020 12:01 WIB</p>
        </div>
    </div>

    <div class="artikel-item">
        <img src="{{ asset('images/artikelbaru-5.png') }}" alt="Artikel">
        <div class="info">
            <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
            <p>Selasa, 18 Feb 2020 12:01 WIB</p>
        </div>
    </div>

    <!-- PAGINATION -->
    <div class="pagination">
        <button>←</button>
        <div class="page active">1</div>
        <div class="page">2</div>
        <div class="page">3</div>
        <div class="page">4</div>
        <div class="page">5</div>
        <button>→</button>
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

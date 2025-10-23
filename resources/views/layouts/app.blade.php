<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug - @yield('title')</title>

    <!-- Font modern -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Ubuntu', sans-serif;
        line-height: 1.6;
        background-color: #fff;
        color: #333;
    }

    /* 🌈 Navbar */
    .navbar {
        background: linear-gradient(90deg, #46074E 0%, #197BD0 100%);
        height: 90px;
        padding: 14px 0;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .navbar-container {
        max-width: 1200px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 24px;
    }

    /* ✅ Logo dengan garis bawah */
    .logo {
        font-size: 30px;
        font-weight: 700;
        color: white;
        text-decoration: none;
        position: relative;
        letter-spacing: 2px;
    }

    .logo::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: white;
    }

    /* ✅ Menu navigasi */
    .nav-menu {
        list-style: none;
        display: flex;
        align-items: center;
        gap: 28px;
        margin: 0;
        padding: 0;
    }

    .nav-menu a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: opacity 0.3s;
        position: relative;
    }

    .nav-menu a:hover {
        opacity: 0.8;
    }

    /* ✅ Garis bawah untuk menu aktif */
    .nav-menu a.active::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: white;
    }

    /* ✅ Area aksi: search + tombol */
    .nav-actions {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    /* ✅ Search box minimalis — SESUAI GAMBAR */
    .search-wrapper {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .search-icon {
        color: rgba(255, 255, 255, 0.7);
        font-size: 18px;
    }

    .search-input {
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        color: white;
        padding: 5px 10px;
        font-size: 14px;
        width: 160px;
        outline: none;
        font-family: 'Poppins', sans-serif;
    }

    .search-input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .search-input:focus {
        border-bottom: 1px solid white;
    }

    /* ✅ Tombol DAFTAR ON-LINE — SESUAI PROPERTIES YANG ANDA BERIKAN */
    .btn-daftar {
        width: 150px;
        height: 40px;
        background-color: #195395; /* Fill Colour */
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.2); /* Border Colour + Opacity */
        border-radius: 20px;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        cursor: pointer;
        box-sizing: border-box;
    }

    .btn-daftar:hover {
        background-color: #174882; /* Slightly darker on hover */
        transform: scale(1.03);
    }

    /* 💜 Hero Section */
    .hero {
        position: relative;
        height: 700px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-background-img {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 1920px;
        height: 768px;
        z-index: 1;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        z-index: 2;
    }

    .hero-content {
        position: absolute;
        left: 123px;   /* ✅ Posisi horizontal (X) */
        top: 500px;    /* ✅ Posisi vertikal (Y) */
        z-index: 3;
        background: linear-gradient(90deg, rgba(70,7,78,0.65) 0%, rgba(25,123,208,0.65) 100%);
        padding: 25px 35px;
        border-radius: 12px;
        width: 621px;
        height: 120px;
        max-width: 800px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }


    .hero-text {
        color: white;
        left: 169px;
        top: 594px;
        width: 285px;
        height: 60px;
        font-family: 'Ubuntu', sans-serif;
        font-size: 20px;
        line-height: 30px;
        max-width: 60%;
        text-align: left;
    }

    .hero-text br {
        display: block;
    }

    .btn-selengkapnya {
        background: transparent;
        border: 2px solid white;
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s;
    }

    .btn-selengkapnya:hover {
        background: white;
        color: #46074E;
    }

    /* 💠 Section umum */
    .section {
        padding: 70px 20px;
        max-width: 1200px;
        margin: auto;
    }

    .section-title {
        font-family: 'Ubuntu', sans-serif;
        text-align: center;
        color: #4A4A4A;
        font-size: 24px;
        font-weight: 100;
        line-height: 29px;
        margin-bottom: 15px;
    }

    .section-description {
        font-family: 'Ubuntu-Light', sans-serif;
        text-align: center;
        max-width: 700px;
        margin: auto;
        color: #555;
        margin-bottom: 50px;
        font-size: 18px;
    }

    /* ✅ Layanan Kami Section - Baru */
    .services-section {
        padding: 70px 20px;
        max-width: 1200px;
        margin: auto;
    }

    .services-section .section-title {
        text-align: center;
        font-family: 'ubuntu', sans-serif;
        color: #4A4A4A; /* Abu-abu seperti di gambar */
        font-size: 20px;
        letter-spacing: 2px;
        margin-bottom: 40px;
        text-transform: uppercase;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .service-card {
    position: relative;
    border-radius: 6px;
    overflow: hidden;
    width: 360px;
    height: 270px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

    .service-card:hover {
        transform: translateY(-5px);
    }

    .service-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .service-card:hover img {
        transform: scale(1.05);
    }

    .card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(70, 7, 78, 0.8) 0%, rgba(25, 123, 208, 0.4) 50%, rgba(25, 123, 208, 0.0) 100%);
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        padding: 20px;
        color: white;
        font-size: 16px;
        letter-spacing: 0.5px;
    }

    /* Responsif untuk Layanan Kami */
    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .services-grid {
            grid-template-columns: 1fr;
        }
    }

    /* ✅ Mitra Kami Section */
    .partners-section {
        padding: 70px 20px;
        max-width: 1200px;
        margin: auto;
    }

    .partners-section .section-title {
        text-align: center;
        color: #4A4A4A;
        font-size: 24px;
        letter-spacing: 2px;
        margin-bottom: 40px;
        text-transform: uppercase;
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        justify-items: center;
    }

    .partner-card {
        background: white;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 200px;
        height: 113px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }

    .partner-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .partner-card img {
        max-width: 100%;
        max-height: 80px;
        object-fit: contain;
        filter: grayscale(0%);
        transition: filter 0.3s ease;
    }

    .partner-card:hover img {
        filter: grayscale(0%);
    }

    /* ✅ Consultation Banner */
    .consultation-banner {
        width: 860px;                         
        height: 100px;
        background: linear-gradient(90deg, rgba(70, 7, 78, 1) 0%, rgba(25, 123, 208, 0.8) 100%);

        padding: 30px 20px;
        border-radius: 12px;
        margin: 40px auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .banner-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        gap: 20px;
    }

    .banner-text h3 {
        color: white;
        font-family: 'Ubuntu-Medium', sans-serif;
        font-size: 20px;
        margin: 0 0 5px 0;
    }

    .banner-text p {
        color: rgba(255,255,255,0.8);
        font-size: 14px;
        margin: 0;
    }

    .btn-consult {
        background: transparent;
        color: white;
        border: 1px solid rgba(255,255,255,0.3);
        padding: 12px 20px;
        border-radius: 25px;
        font-size: 14px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }

    .btn-consult:hover {
        background: rgba(255,255,255,0.25);
        transform: translateY(-2px);
    }

    .btn-consult svg {
        width: 12px;
        height: 12px;
        fill: currentColor;
    }

    /* Responsif */
    @media (max-width: 768px) {
        .partners-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .consultation-banner {
            flex-direction: column;
            text-align: center;
        }

        .banner-content {
            flex-direction: column;
            gap: 15px;
        }

        .btn-consult {
            width: 100%;
            justify-content: center;
        }
    }

    /* ✅ Artikel Terbaru Section */
    .articles-section {
        padding: 70px 20px;
        max-width: 1000px;
        margin: auto;
    }

    .section-title {
        text-align: center;
        color: #4A4A4A;
        font-size: 22px;
        letter-spacing: 1.5px;
        margin-bottom: 40px;
        text-transform: uppercase;
    }

    /* ✅ Grid dua kolom (jarak disesuaikan 2.2% & 2.8%) */
    .articles-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 2.2%;
        row-gap: 2.8%;
        justify-items: center;
    }

    /* ✅ Kartu artikel */
    .article-card {
        text-align: center;
        width: 100%;
        max-width: 360px;
        transition: transform 0.3s ease;
    }

    .article-card:hover {
        transform: translateY(-5px);
    }

    /* ✅ Gambar artikel */
    .article-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 6px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    /* ✅ Judul artikel di bawah gambar */
    .article-title {
        margin-top: 10px;
        font-size: 15px;
        color: #4A4A4A;
        line-height: 1.5;
    }

    /* ✅ Tombol "ARTIKEL LAINNYA" */
    .articles-button-container {
        display: flex;
        justify-content: center;
        margin-top: 45px;
    }

    .btn-more-articles {
        display: inline-block;
        padding: 10px 25px;
        border: 2px solid transparent;
        border-radius: 25px;
        background: 
            linear-gradient(white, white) padding-box,
            linear-gradient(90deg, #46074E 0%, #197BD0 80%) border-box;
        color: #197BD0;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
        letter-spacing: 0.5px;
    }

    .btn-more-articles:hover {
        background: 
            linear-gradient(90deg, #46074E 0%, #197BD0 80%) padding-box,
            linear-gradient(90deg, #46074E 0%, #197BD0 80%) border-box;
        color: white;
        transform: translateY(-2px);
    }

    /* ✅ Responsif */
    @media (max-width: 768px) {
        .articles-grid {
            grid-template-columns: 1fr;
            row-gap: 25px;
        }

        .article-card img {
            height: 200px;
        }
    }

    /* ✅ HUBUNGI KAMI Section */
    .contact-section {
        font-family: 'Ubuntu', sans-serif;
        text-align: center;
        padding: 70px 20px;
        max-width: 800px;
        margin: auto;
    }

    .contact-title {
        font-size: 22px;
        color: #4A4A4A;
        font-weight: 200;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .contact-subtitle {
        font-size: 16px;
        color: #4A4A4A;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .contact-address,
    .contact-info {
        font-size: 14px;
        color: #4A4A4A;
        line-height: 1.8;
        margin: 0;
    }

    .contact-info {
        margin-top: 5px;
        margin-bottom: 30px;
    }

    /* ✅ Tombol Container */
    .contact-buttons {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 25px;
    }

    /* ✅ Tombol Gradient (Kiri) */
    .btn-gradient {
        display: inline-block;
        padding: 10px 35px;
        border-radius: 25px;
        background: linear-gradient(90deg, #46074E 0%, #197BD0 100%);
        color: white;
        font-weight: 600;
        text-decoration: none;
        font-size: 14px;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }

    /* ✅ Tombol Outline (Kanan) */
    .btn-outline {
        display: inline-block;
        padding: 10px 35px;
        border-radius: 25px;
        border: 1.8px solid #197BD0;
        color: #197BD0;
        font-weight: 600;
        text-decoration: none;
        font-size: 14px;
        letter-spacing: 0.5px;
        background: transparent;
        transition: all 0.3s ease;
    }

    .btn-outline:hover {
        background: #197BD0;
        color: white;
        transform: translateY(-2px);
    }

    /* ✅ Responsif */
    @media (max-width: 600px) {
        .contact-buttons {
            flex-direction: column;
            gap: 15px;
        }
    }

    /* 🦶 Footer */
    .footer {
        background: linear-gradient(90deg, #46074E 0%, #197BD0 100%);
        color: white;
        text-align: center;
        padding: 18px;
        font-size: 14px;
    }

    .footer a {
        color: white;
        text-decoration: none;
    }

    .footer a:hover {
        text-decoration: underline;
    }

    /* 📱 Responsif */
    @media (max-width: 768px) {
        .nav-menu {
            display: none;
        }

        .hero-background-img {
            width: 100%;
            height: auto;
            left: 0;
            transform: none;
        }

        .hero-content {
            bottom: 10%;
            left: 5%;
            width: 90%;
            padding: 20px;
            flex-direction: column;
            align-items: flex-start;
        }

        .hero-text {
            max-width: 100%;
            text-align: left;
            margin-bottom: 15px;
        }

        .section {
            padding: 50px 15px;
        }

        .contact-buttons {
            flex-direction: column;
            align-items: center;
        }

        .btn-daftar {
            padding: 8px 20px;
            font-size: 13px;
        }

        .search-input {
            width: 120px;
            font-size: 12px;
        }
    }
</style>

    @stack('styles')
</head>
<body>
<!-- 🔹 Navbar -->
<nav class="navbar">
    <div class="navbar-container">
        <a href="{{ route('home') }}" class="logo">klug</a>

        <ul class="nav-menu">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a></li>
            <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Layanan Kami</a></li>
            <li><a href="{{ route('articles') }}" class="{{ request()->routeIs('articles') ? 'active' : '' }}">Artikel</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Hubungi Kami</a></li>
        </ul>

        <div class="nav-actions">
            <div class="search-wrapper">
                <span class="search-icon">🔍</span>
                <input type="text" class="search-input" placeholder="Ketik pencarian...">
            </div>
            <a href="#" class="btn-daftar">DAFTAR ON-LINE</a>
        </div>
    </div>
</nav>

    <!-- 📄 Content -->
    @yield('content')

    <!-- 🦶 Footer -->
    <footer class="footer">
        <p>Copyright © 2020 - Inaklug Indonesia | 
        <a href="#">Hak cipta dilindungi undang-undang</a></p>
    </footer>

    @stack('scripts')
</body>
</html>
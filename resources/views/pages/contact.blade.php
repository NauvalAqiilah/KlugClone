@extends('layouts.app')

@section('title', 'Hubungi Kami')

@push('styles')
<style>
    /* ✅ Hero Banner */
    .contact-hero {
        position: relative;
        height: 550px;
        overflow: hidden;
        background: url('{{ asset('images/hubungikami.jpg') }}') center/cover no-repeat;
    }

    .contact-hero .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(70, 7, 78, 0.9) 0%, rgba(25, 123, 208, 0.2) 100%);
        opacity: 0.8;
        z-index: 1;
    }

    .contact-hero .hero-content {
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

    .contact-hero .hero-content h1 {
        margin: 0;
        padding: 0;
        outline: none;
        box-shadow: none;
        background: transparent;
        border: none;
        display: inline; /* Agar tidak memakan ruang berlebih */
    }

    /* 📨 Section Form */
    .contact-section {
        max-width: 1000px;
        margin: 100px auto;
        padding: 0 20px;
        font-family: 'Poppins', sans-serif;
    }

    .contact-section h2 {
        font-size: 20px;
        color: #333;
        margin-bottom: 40px;
        font-weight: 600;
        text-transform: uppercase;
    }

    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px 40px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group.full-width {
        grid-column: 1 / span 2;
    }

    label {
        font-weight: 500;
        color: #333;
        margin-bottom: 8px;
    }

    input,
    textarea {
        border: none;
        border-bottom: 1px solid #ccc;
        padding: 10px 0;
        font-size: 15px;
        color: #333;
        background: transparent;
        outline: none;
        transition: border-color 0.3s ease;
    }

    input::placeholder,
    textarea::placeholder {
        color: #aaa;
    }

    input:focus,
    textarea:focus {
        border-color: #197BD0;
    }

    textarea {
        resize: none;
        min-height: 100px;
    }

    /* 🔒 reCAPTCHA + Tombol */
    .form-footer {
        grid-column: 1 / span 2;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
        flex-wrap: wrap;
        gap: 20px;
    }

    .contact-btn {
        background: transparent;
        color: #197BD0;
        border: 2px solid;
        border-image: linear-gradient(90deg, #46074E, #197BD0) 1;
        padding: 10px 35px;
        border-radius: 25px;
        font-weight: 500;
        font-size: 15px;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .contact-btn:hover {
        background: linear-gradient(90deg, #46074E, #197BD0);
        color: white;
    }

    /* 📱 Responsif */
    @media (max-width: 992px) {
        .contact-hero {
            height: 400px;
        }

        .contact-hero .hero-content {
            left: 60px;
            bottom: 60px;
            font-size: 32px;
        }

        form {
            grid-template-columns: 1fr;
        }

        .form-footer {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 576px) {
        .contact-hero {
            height: 320px;
        }

        .contact-hero .hero-content {
            left: 30px;
            bottom: 40px;
            font-size: 26px;
        }
    }

    /* ✅ Section Lokasi Kami */
    .location-section {
        max-width: 1000px;
        margin: 100px auto;
        padding: 0 20px;
        font-family: 'Poppins', sans-serif;
        color: #333;
    }

    .location-section h2 {
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 40px;
        letter-spacing: 1px;
        color: #444;
    }

    .location-card {
        margin-bottom: 50px;
    }

    .location-card h3 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #444;
        text-transform: uppercase;
    }

    .location-card p {
        font-size: 15px;
        line-height: 1.7;
        color: #666;
        margin: 5px 0;
    }

    /* Garis halus di bawah setiap lokasi (opsional) */
    .divider {
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, #46074E, #197BD0);
        margin: 15px 0 25px;
        border-radius: 2px;
    }

    /* 📱 Responsif */
    @media (max-width: 768px) {
        .location-section {
            margin: 60px 20px;
        }

        .location-section h2 {
            font-size: 18px;
            text-align: center;
        }

        .location-card h3 {
            font-size: 15px;
        }

        .location-card p {
            font-size: 14px;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Banner -->
<section class="contact-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>HUBUNGI KAMI</h1>
    </div>
</section>

<!-- 📨 Form Section -->
<section class="contact-section">
    <h2>KIRIM PESAN</h2>
    <form action="#" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama*</label>
            <input type="text" id="name" name="name" placeholder="Nama lengkap Anda" required>
        </div>

        <div class="form-group">
            <label for="email">E-Mail*</label>
            <input type="email" id="email" name="email" placeholder="Alamat E-mail Anda" required>
        </div>

        <div class="form-group">
            <label for="company">Perusahaan / Organisasi</label>
            <input type="text" id="company" name="company" placeholder="Nama Perusahaan / Organisasi">
        </div>

        <div class="form-group">
            <label for="phone">Telepon</label>
            <input type="text" id="phone" name="phone" placeholder="Nomor telepon Anda">
        </div>

        <div class="form-group full-width">
            <label for="message">Isi Pesan*</label>
            <textarea id="message" name="message" placeholder="Isi pesan Anda..." required></textarea>
        </div>

        <div class="form-footer">
            <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
            <button type="submit" class="contact-btn">KIRIM PESAN</button>
        </div>
    </form>
</section>

<!-- Script Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Lokasi Kami -->
<section class="location-section">
    <h2>LOKASI KAMI</h2>

    <div class="location-card">
        <h3>KANTOR PUSAT</h3>
        <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
        <p>Hotline: +6281519400071 / +62811998167</p>
    </div>

    <div class="location-card">
        <h3>KANTOR CABANG</h3>
        <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
        <p>Hotline: +6281519400071 / +62811998167</p>
    </div>
</section>
@endsection
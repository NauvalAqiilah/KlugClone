@extends('layouts.app')

@section('title', 'Beranda BrandApp')

@section('content')
<section id="features" class="py-24 bg-gray-50" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Fitur Unggulan Kami</h2>
        <p class="text-gray-500 mb-12">Semua alat yang kamu butuhkan untuk bisnis digital modern.</p>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition" data-aos="zoom-in">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Manajemen Mudah</h3>
                <p class="text-gray-500">Kelola semua data bisnis kamu dalam satu dashboard modern.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="100">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Keamanan Terjamin</h3>
                <p class="text-gray-500">Semua data disimpan dengan sistem enkripsi terbaru.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="200">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Dukungan 24/7</h3>
                <p class="text-gray-500">Tim kami siap membantu kapan pun kamu membutuhkan.</p>
            </div>
        </div>
    </div>
</section>
@endsection

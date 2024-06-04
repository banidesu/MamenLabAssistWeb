@extends('layout.default')
@section('content')
    <section
        class="bg-gray-100 h-screen relative after:w-full after:absolute after:bg-black after:h-full after:top-0 after:opacity-40"
        id="banner">
        <img src="{{ asset('/img/banner/mamen30-31.jpg') }}" alt="Foto Mamen 30-31" class="object-cover h-full w-full">
    </section>
    <section class="mt-40 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="home">
        <h1>Virtual Laboratorium Manajemen Menengah</h1>
    </section>
@endsection

@extends('layouts.main')

@section('content')
    <section class="py-8 mx-4">
        <div class="my-4 flex flex-col items-center max-w-2xl mx-auto">
            <h1 class="mb-8 text-4xl font-extrabold dark:text-white">Profil Mentari Sehat Indonesia</h1>
            <p class="mb-3 text-gray-800">Mentari Sehat Indonesia berdiri pada tanggal 22 Juli 2020 di Kota Semarang. Yayasan
                Pendirian ini diprakarsai oleh Prof. Dr. Masrukhi, M.Pd, Dr. Supriyanto, M.Pd., Hj. Siti Taqiyah, BA., Noor
                Diansyah, SKM., dan Chairul Basar, SE. Di bidang kesehatan Yayasan Mentari Sehat berperan untuk menggerakkan
                masyarakat dalam upaya mewujudkan kemandirian dalam mengatasi masalah-masalah penyakit yang menular di
                masyarakat seperti; TBC. Jejaring yayasan Mentari Sehat Indonesia sudah ada dan eksis di 34 kabupaten kota
                se-Jawa Tengah. Kantor cabang/jaringan yayasan Mentari Sehat Indonesia ini juga memiliki kantor
                administratif masing-masing sehingga kedudukan, wilayah kerja dan jejaring dengan LSM/LSM lokal juga telah
                terbentuk dan terjalin program komunikasi dengan baik.
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pengurus Mentari Sehat
                    Indonesia Kab. Kendal</h2>
            </div>
            <div class="flex flex-col justify-center items-center mx-auto gap-8">
                @for ($i = 0; $i < 4; $i++)
                    <x-card-person />
                @endfor
            </div>
        </div>
    </section>
@endsection

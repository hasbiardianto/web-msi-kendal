@extends('layouts.main')

@section('content')
    <section class="py-8 bg-gray-100">
        <div class="my-4 p-8 flex flex-col items-center max-w-3xl mx-auto">
            <h1 class="mb-8 lg:text-4xl md:text-2xl text-xl font-extrabold dark:text-white text-center">Profil Mentari Sehat Indonesia</h1>
            <p class="mb-3 text-gray-900 indent-12 text-justify">Mentari Sehat Indonesia berdiri pada tanggal 22 Juli 2020 di Kota Semarang. Yayasan
                pendirian ini diprakarsai oleh Prof. Dr. Masrukhi, M.Pd (Rektor UNIMUS), Dr. Supriyanto, M.Pd., Hj. Siti
                Taqiyah, BA., Noor Diansyah, SKM., dan Chairul Basar, SE.</p>
            <p class="mb-3 text-gray-900 indent-12 text-justify">Di bidang kesehatan, Yayasan Mentari Sehat berperan untuk menggerakkan masyarakat
                dalam upaya mewujudkan kemandirian dalam mengatasi masalah-masalah penyakit yang menular di masyarakat
                seperti TBC. Jejaring yayasan Mentari Sehat Indonesia sudah ada dan eksis di 34 kabupaten kota se-Jawa
                Tengah dan salah satunya adalah Yayasan Mentari Sehat Indonesia Cabang Kabupaten Demak yang berdiri tepatnya
                tanggal 13 November 2020</p>
            <p class="mb-3 text-gray-900 indent-12 text-justify">Kantor Cabang Yayasan Mentari Sehat Indonesia ini juga memiliki kantor
                administratif masing-masing sehingga kedudukan, wilayah kerja, dan jejaring juga telah terbentuk dan
                terjalin program komunikasi dengan baik.</p>

        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-xl md:text-2xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pengurus Mentari Sehat
                    Indonesia Kab. Kendal</h2>
            </div>
            <div class="grid gap-4 px-8 lg:grid-cols-2">
                @for ($i = 0; $i < 4; $i++)
                    <x-card-person />
                @endfor
            </div>
        </div>
    </section>
@endsection

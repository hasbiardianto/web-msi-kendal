@extends('layouts.main')

@section('content')
    <x-jumbotron />
    <div class="flex flex-col justify-center items-center">
        <section class="py-8 bg-gray-100 bg-blend-multiply w-full bg-[url(/public/img/patternpad.svg)]">
            <h2 class="py-6 px-4 font-bold text-xl lg:text-4xl text-center text-green-900">Visi dan Misi Mentari Sehat
                Indonesia</h2>
            <div class="grid gap-4 mx-4">
                <div
                    class="flex flex-col p-6 bg-white border border-gray-200 rounded-lg shadow mx-auto">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Visi</h5>
                    <p class="my-8 font-normal text-gray-700 dark:text-gray-400 max-w-2xl self-center">Visi yayasan Mentari Sehat Indonesia adalah
                        penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu
                        secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>
                </div>
                <div
                    class="flex flex-col p-6 bg-white border border-gray-200 rounded-lg shadow mx-auto">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Misi</h5>
                    <div class="flex md:flex-row flex-col">
                        <div class="p-2 rounded max-w-md">
                            <h6 class="text-xl font-semibold p-2 bg-gray-100 rounded">Bidang Kesehatan</h6>
                            <p class="p-2">Menggerakkan masyarakat untuk mewujudkan kemandirian dalam mengatasi dan
                                menanggulangi masalah
                                penyakit menular langsung dan mampu menjadi penggerak perubahan perilaku hidup bersih dan
                                sehat
                                di masyarakat.</p>
                        </div>
                        <div class="p-2 rounded max-w-md">
                            <h6 class="text-xl font-semibold p-2 bg-gray-100 rounded">Bidang Sosial</h6>
                            <p class="p-2">Menggerakkan seluruh komponen untuk mendorong perubahan dan perbaikan kehidupan sosial masyarakat.
                            </p>
                        </div>
                        <div class="p-2 rounded max-w-md">
                            <h6 class="text-xl font-semibold p-2 bg-gray-100 rounded">Bidang Pendidikan</h6>
                            <p class="p-2">Membantu pemerintah untuk ikut serta mencerdaskan kehidupan bangsa, mendorong
                                masyarakat untuk memperoleh hak pendidikan secara merata dan berkeadilan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-8 mx-4 p-2">
            <h1 class="py-6 font-bold text-4xl text-center">Berita Terbaru</h1>
            <div class="flex flex-col lg:flex-row gap-3">
                @for ($i = 0; $i < 3; $i++)
                    <x-card-blog></x-card-blog>
                @endfor
            </div>
        </section>
    </div>
@endsection

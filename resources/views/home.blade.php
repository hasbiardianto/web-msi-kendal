@extends('layouts.main')

@section('content')
    <x-jumbotron />
    <div class="flex flex-col justify-center items-center">
        <section class="py-8 bg-[url('/public/img/patternpad.svg')] bg-gray-100 bg-blend-multiply w-full">
            <h2 class="py-6 font-bold text-4xl text-center text-green-800 bg-no-repeat">Visi dan Misi Mentari Sehat Indonesia</h2>
            <div class="grid gap-4 lg:grid-cols-2 mx-4">
                <a href="#"
                    class="block max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-auto">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Visi</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                </a>
                <a href="#"
                    class="block max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-auto">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Misi</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                </a>
            </div>
        </section>
        <section class="my-8">
            <h1 class="py-6 font-bold text-4xl text-center">Berita Terbaru</h1>
            <div class="flex flex-col lg:flex-row gap-3">
                @for ($i = 0; $i < 3; $i++)
                    <x-card-blog></x-card-blog>
                @endfor
            </div>
        </section>
    </div>
@endsection

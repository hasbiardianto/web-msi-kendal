@extends('layouts.admin')

@section('content')
    <div class="flex gap-4">
        <div>
            <a href="/admin/berita"
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Berita & Kegiatan</h5>
                <p class="font-normal text-gray-800 text-4xl">10</p>
            </a>
        </div>

        <div>
            <a href="/admin/pengurus"
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengurus</h5>
                <p class="font-normal text-gray-800 text-4xl">10</p>
            </a>
        </div>

        <div>
            <a href="/admin/pesan"
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kotak Pesan</h5>
                <p class="font-normal text-gray-800 text-4xl">10</p>
            </a>
        </div>
    </div>
@endsection

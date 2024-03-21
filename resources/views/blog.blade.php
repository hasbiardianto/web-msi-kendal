@extends('layouts.main')

@section('content')
    <section class="bg-white :bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 :text-white">Berita &
                    Kegiatan
                </h2>
            </div>
            <div class="grid gap-8 lg:grid-cols-3">
                @for ($i = 0; $i < 5; $i++)
                    <x-card-blog />
                @endfor
            </div>
        </div>
        <div class="flex flex-col items-center">
            <!-- Help text -->
            <span class="text-sm text-gray-700 dark:text-gray-400">
                Showing <span class="font-semibold text-gray-900 :text-white">1</span> to <span
                    class="font-semibold text-gray-900 :text-white">10</span> of <span
                    class="font-semibold text-gray-900 :text-white">100</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-green-800 rounded-s hover:bg-green-900">
                    Prev
                </button>
                <button
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-green-800 border-0 border-s border-green-700 rounded-e hover:bg-green-900">
                    Next
                </button>
            </div>
        </div>
    </section>
@endsection

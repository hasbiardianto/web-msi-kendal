@extends('layouts.admin')

@section('content')
    <div class="grid">
        <h1 class="mb-4 text-xl font-bold leading-none tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Berita & Kegiatan</h1>
        <a id="createModalButton" data-modal-target="createModal" data-modal-toggle="createModal"
            class="bg-green-600 py-4 rounded flex justify-center items-center mb-4 hover:scale-95 transition ease-in-out cursor-pointer">
            <svg class="w-6 h-6 text-slate-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14m-7 7V5" />

            </svg>
            <span class="text-slate-100">Input berita dan Kegiatan</span>
        </a>

        <!-- Create modal -->
        <div id="createModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto mt-20">
                <!-- Modal content -->
                <x-create-berita />
            </div>
        </div>

        <div>
            <h1 class="mb-4 font-semibold leading-none tracking-tight text-gray-900 md:text-xl dark:text-white">List
                Berita dan Kegiatan</h1>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-wrap">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Berita
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Isi Berita
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b text-gray-900 font-medium">
                        <th scope="row" class="px-8 py-4">
                            1
                        </th>
                        <th class="px-6 py-4">
                            Lorem ipsum dolor sit
                        </th>
                        <td class="px-6 py-4">
                            test
                        </td>
                        <td class="px-6 py-4">
                            test
                        </td>
                        <td class="px-6 py-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, nam!
                        </td>
                        <td class="flex gap-2 px-6 py-4">
                            <button class="p-2 bg-blue-600 rounded hover:scale-95 ease-in-out transition" data-tooltip-target="tooltip-update"
                                id="updateModalButton" data-modal-target="updateModal" data-modal-toggle="updateModal">
                                <svg class="w-6 h-6 text-gray-100 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                </svg>
                            </button>
                            <div id="tooltip-update" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Edit
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <!-- Update modal -->
                            <div id="updateModal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-20 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto mt-20">
                                    <!-- Modal content -->
                                    <x-update-berita />
                                </div>
                            </div>
                            <button class="p-2 bg-red-600 rounded hover:scale-95 ease-in-out transition" data-tooltip-target="tooltip-delete" id="deleteButton"
                                data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                                <svg class="w-6 h-6 text-gray-100 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div id="tooltip-delete" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                Hapus
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <!-- Delete modal -->
                            <div id="deleteModal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <x-delete-administrator />
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection

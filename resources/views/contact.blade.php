@extends('layouts.main')

@section('content')
    <div class="flex flex-col-reverse md:flex-row mx-4 gap-8">
        <section class="rounded-lg flex-grow">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-8 md:text-4xl text-xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                    Alamat
                </h2>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=390&amp;height=480&amp;hl=en&amp;q=35MW+WCV, Mannggisan, Langenharjo, Kec. Kendal, Kabupaten Kendal, Jawa Tengah 51314&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://strandsgame.net/">Strands</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 480px;
                            border-radius: 10px
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 480px;
                        }

                        .gmap_iframe {
                            height: 480px !important;
                        }
                    </style>
                </div>
            </div>
        </section>
        <section class="bg-white dark:bg-gray-900 flex-grow">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2
                    class="mb-4 md:text-4xl text-xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                    Hubungi
                    Kami
                </h2>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                            Anda</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="example@gmail.com" required>
                    </div>
                    <div>
                        <label for="subject"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                        <input type="text" id="subject"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="Apa yang bisa kami bantu" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                        <textarea id="message" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tuliskan pesan..."></textarea>
                    </div>
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-green-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 :bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kirim
                        Pesan</button>
                </form>
            </div>
        </section>
    </div>
@endsection

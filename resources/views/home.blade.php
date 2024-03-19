@extends('layouts.main')

@section('content')
    <x-jumbotron />
    <div class="my-4 py-2 px-3 flex flex-col justify-center items-center">
        <h1 class="my-4 pb-4 font-bold text-4xl">Berita Terbaru</h1>
        <div class="flex flex-col lg:flex-row gap-3">
            @for ($i = 0; $i < 3; $i++)
                <x-card-blog></x-card-blog>
            @endfor
        </div>
    </div>
@endsection

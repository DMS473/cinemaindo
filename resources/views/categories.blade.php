@extends('layouts.main')

@section('container')
    
    <h1 class="mb-5">Halaman Genre</h1>    

    <div class="container">
        <div class="row">
            @foreach ($categories as $item)
                <div class="col-md-6">
                    <a href="/categories/{{ $item->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x400?{{ $item->name }}" 
                        class="card-img-top" alt="{{ $item->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">
                                {{ $item->name }}</h5>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection
    
 
{{-- <article class="mb-5">
            <h2>
                <a href="/categories/{{ $item->slug }}">{{ $item->name }}</a>
            </h2>
            <h5>{{ $item["author"] }}</h5>
            <p>{{ $item->name }}</p>
        </article> --}}

    {{-- <h2>Judul</h2>
    <h5>Daffa</h5>
    <p>lorem </p> --}}


    {{-- <h3><?= $name; ?></h3> --}}
    {{-- <p>muhammaddaffamuis1234@gmail.comn</p> --}}
    {{-- <img src="img/<?= $image;?>" alt="<?= $name;?>" width="1000"> --}}

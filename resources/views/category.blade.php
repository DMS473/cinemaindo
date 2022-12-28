@extends('layouts.main')

@section('container')
    
    <h1 class="mb-5">Genre : {{ $category }}</h1>    
    <div class="container">
        <div class="row">
    @foreach ($posts as $post)
    <div class="col-md-6">
        <div class="card mb-3 kartu">
            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">
               <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </div>
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"
            style="max-width: 100%;
            max-height: 100%;
            height:300px;
            width:550px;">
            {{-- <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"  --}}
            {{-- class="card-img-top" alt="{{ $post->category->name }}"> --}}
            <div class="card-body text-center">
                <h5 class="card-title">{{ $post->title }}</h5>
                {{-- <p>
                    <small class="text-muted">
                        By. <a href="/user/{{ $post->user->name }}"
                        class="text-decoration-none">{{ $post->user->name }}</a> in 
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                </p> --}}
                <p>{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}">Read more</a>
            </div>
        </div>    
    </div>
    @endforeach
        </div>
    </div>

    {{-- <h2>Judul</h2>
    <h5>Daffa</h5>
    <p>lorem </p> --}}


    {{-- <h3><?= $name; ?></h3> --}}
    {{-- <p>muhammaddaffamuis1234@gmail.comn</p> --}}
    {{-- <img src="img/<?= $image;?>" alt="<?= $name;?>" width="1000"> --}}

@endsection
    

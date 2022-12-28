@extends('layouts.main')

@section('container') 
    <h1 class="mb-3 text-center">Movies</h1> 

    {{-- fitur search --}}
    {{-- <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>   
    </div> --}}
    
    {{-- hero --}}
    @if($posts->count())
        <div class="card mb-3 foto">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-dark">{{ $posts[0]->title }}</a></h3>
                {{-- <p>
                    <small class="text-muted">
                        By. <a href="/user/{{ $posts[0]->user->name }}">{{ $posts[0]->user->name }}</a> in 
                        <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p> --}}
                <p>{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}">Read more</a>
            </div>
        </div>
    
    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-md-6">
                    <div class="card mb-3 kartu">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">
                           <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
@endsection


 {{-- <div class="table-responsive"> --}}
            
            
    {{-- @foreach ($posts->skip(1) as $item)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
            </h2>
            <h5>{{ $item["author"] }}</h5>
            <p>{{ $item->excerpt }}</p>
        </article> --}}
        {{-- asd

<p>
Resident Evil 7: Biohazard menyeret Anda ke dalam rumah mengerikan di daerah Louisiana. 
Bintangnya adalah keluarga Baker. Sebuah insiden misterius membuat mereka kehilangan 
kewarasan dan mulai menculik orang-orang yang tersesat. Sang tokoh utama, pria bernama Ethan Winters, 
terjebak di sana setelah menerima pesan dari sang istri yang menghilang selama tiga tahun.    
</p>

asda --}}
@extends('layouts.main')

@section('container')
               
    <div class="slide_hero">
      <h1>TRENDING FILM</h1>  
    </div>
    <!-- slider -->
    <div id="carouselExampleControls" class="carousel slide kotak-hero" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="/posts/avatar-the-way-of-water">
            <img src="storage/post-images/avatar.jpg" class="d-block w-100" alt="...">
          </a>
          </div>
            @foreach($posts->skip(1) as $post)
              {{-- <a href="/posts/{{ $post->slug }}">
              <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100" alt="...">
              </a>
          </div>
            <div class="carousel-item"> --}}
              <div class="carousel-item">
                <a href="/posts/{{ $post->slug }}">
                <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100" alt="...">
              </a>
              </div>

            @endforeach
          {{-- </div> --}}
          {{-- <div class="carousel-item">
            <img src="storage/post-images/pacific.jpg" class="d-block w-100" alt="...">
          </div> --}}
          {{-- <div class="carousel-item">
            <img src="storage/post-images/resident.jpg" class="d-block w-100" alt="...">
          </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- <img src="img/genshin.jpg" alt=""> 
    <img src="img/war.png" alt="">
    <img src="img/war1.png" alt=""> --}}
    <h1>Our Movies</h1>

    {{-- <div class="container">
      <div class="row">
          @foreach ($posts as $item)
              <div class="col-md-6">
                  <a href="/posts/{{ $item->slug }}">
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
    </div> --}}

    {{-- <div class="container">
      <div class="d-flex flex-wrap row">
        <div class="col-md-4">
          <div class="card">
            <img src="img/genshin.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/war.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/war1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div> --}}
     
      @if($posts->count())
      <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">
                           <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100" alt="..."
                        style="max-width: 100%;
                        max-height: 100%;
                        height:300px;
                        width:550px;">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/about"
                                    class="text-decoration-none">{{ $post->user->name }}</a> in 
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <a href="/posts/{{ $post->slug }}">Read more</a>
                        </div>
                    </div>    
                </div>
            @endforeach    
        </div>
    </div>
      @endif
    
   
    
    
    
@endsection
    

  
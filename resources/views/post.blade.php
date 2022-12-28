@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title }}</h1>
                <p>By. <a href="/about">{{ $post->user->name }}</a> in 
                    <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>
                
                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"
                style="max-width: 100%;
                max-height: 100%;
                height:450px;
                width:1200px;">
                
                <h2>{{ $post->excerpt }}</h2>
                <article class="my-3 fs-5">
                    
                    {!! $post->body !!}
                </article>
                

                <a href="/posts/{{ $post->slug }}/order" class="btn btn-primary">Buy Ticket</a>
    </div>


          

    
@endsection
    
{{-- <article></article>
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>By. <a href="">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>                   --}}

{{-- <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ trans('auth.login') }}</h3>
                <div class="panel-actions">
                    <a class="btn btn-primary btn-block" href="{{ route('login') }}">{{ trans('auth.login') }}</a>
                    <a class="btn btn-danger btn-block" href="{{ route('register') }}
                        {{ trans('auth.register') }}">{{ trans('auth.register') }}</a>
                        <a class="btn btn-info btn-block" href="{{ route('password.request

                        



                        token') }}{{ trans('auth.forgot') }}">{{ trans('auth.forgot') }}</ --}}
                        {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua. --}}
{{-- 

Post::create([
    'title' => 'Judul Pertama',
    'category_id' => 1,
    'slug' => 'judul-pertama',
    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e',
    'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,</p><p> consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
])

Post::create([
    'title' => 'Judul Ke Dua',
    'category_id' => 1,
    'slug' => 'judul-ke-dua',
    'excerpt' => 'consectetur adipiscing elit, sed do e',
    'body' => '<p>consectetur adipiscing elit, sed do eeiusmod incididunt ut labore et dolore magna aliqua. Lorem tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,</p><p> consectetur adipiscinincididunt ut labore et dolore magna aliqua. Loremg elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
])
Post::create([
    'title' => 'Judul Ke Tiga',
    'category_id' => 3,
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'adipiscing elit, sed do e',
    'body' => '<p>adipiscing elit, sed do eeiusmod incididunt ut labore et dolorlit, sed do eeiusmod incididunt ut labore et dolore magna aliqua. Lorem tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,</p><p> consectetur adipiscinincididunt ut labore et dolore magna aliqua. Loremg elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'
])

Category::create([
    'name' => 'Programming',
    'slug' => 'programming'
])
Category::create([
    'name' => 'Web Design',
    'slug' => 'web-design'
])
Category::create([
    'name' => 'Personal',
    'slug' => 'personal'
])

 --}}

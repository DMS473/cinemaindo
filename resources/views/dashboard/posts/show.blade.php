@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <div class="mb-3">
            <a href="/dashboard/posts" class="btn btn-success">
                <span data-feather="arrow-left"></span> Back to all my post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                <span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                  @method('DELETE')
                  @csrf
                 <button class="btn btn-danger" onclick="return confirm('Are you Sure?')">
                    <span data-feather="x-circle"></span> Delete</button>
            </form>
        </div>
            @if($post->image)
            <div>
                <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100" 
                alt="{{ $post->category->name }}" style="max-width: 100%; max-height: 100%;height:350px;">     
            </div>    
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
            @endif
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
</div>

@endsection
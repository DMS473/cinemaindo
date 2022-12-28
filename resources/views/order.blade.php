@extends('layouts.main')

@section('container')

    {{-- <h1>silahakan order</h1> --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Order Ticket</h1>
        
    </div>
    <div class="col-lg-8">
        @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <form method="post" action="/posts/{{ $post->slug }}/order" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address, pastikan alamat 
                    email anda benar, karena tiket akan dikirim ke email anda</label>
                <input type="email" class="form-control"  id="email" name="email" required autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control"  id="title" name="title" required  
              value="{{ $post->title }}" readonly> 
            </div>
            <div class="mb-3">
                {{-- <label for="slug" class="form-label">Slug</label> --}}
                <input type="hidden" class="form-control"  id="slug" name="slug"   
                value="{{ $post->slug }}"> 
              </div>

              <div class="mb-3">
                <label for="available" class="form-label"><i class="bi bi-clock"></i> Jadwal</label>
                <input type="text" class="form-control"  id="available" name="available"  
                value="13:30 - 16:30" readonly> 
              </div>

            <div class="mb-3">
                <label for="available" class="form-label">Avaiable Slot</label>
                <input type="text" class="form-control"  id="available" name="available"  
                value="{{ $post->available}}" readonly> 
              </div>

            <div class="mb-3">
                <label for="pesan" class="form-label">Jumlah Tiket</label>
                <select class="form-select" name="pesan" id="pesan" onchange="show()">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Biaya</label>
                <input type="text" class="form-control" id="price" value="Rp. {{ $post->price }}" readonly>
                
            </div>
            <div class="mb-3">
                <label for="masih-develop" class="form-label">Metode Pembayaran</label>
                <select class="form-select" name="category_id" id="category">
                        <option value="" selected>Gopay</option>
                        <option value="">Ovo</option>
                        <option value="">Dana</option>           
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you Sure?')">Bayar</button>
        </form>
    </div>

    <script>      
        function show(){
            
            const price = {{ $post->price }};
            var tes = document.getElementById("pesan").value;

            const total = price * tes;
                document.getElementById("price").value="Rp. "+total;
        }     

    </script>

@endsection
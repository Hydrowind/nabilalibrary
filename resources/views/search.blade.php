@extends('layouts.user')
@section('content')
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Pencarian buku dengan kata kunci dari judul atau pengarang</h2>
      <form action="{{ route('search') }}" method="get">
        <div class="row">
          <!-- <label for="search" class="col-sm-2 col-form-label">Search</label> -->
          <div class="col-sm-10">
            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Masukkan Kata Kunci">
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Cari</button>
          </div>
        </div>
      </form>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= About Section ======= -->
<section class="about" data-aos="fade-up">
  <div class="container">

    <div class="row">
      @if(app('request')->input('keyword') != '')
      <p>Ditemukan <b>{{ count($data) }}</b> buku dari pencarian Anda melalui kata kunci <b> {{ app('request')->input('keyword') }} </b></p>
      @endif
      
      @foreach($data as $book)
      <div class="col-md-3">
        <div class="card" style="width: 18rem; margin-bottom: 15px;">
          <img src="{{ $book->coverUrl }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }} - {{ $book->year}}</h6>
            <div class="row">
              <div class="col-md-6">
                <p class="card-subtitle mb-2 text-muted">{{ $book->page }} Halaman</p>
              </div>
              <div class="col-md-6 text-end align-middle">
                <p class="badge rounded-pill bg-info">Sisa Stok Buku : {{ $book->quantity }}</p> <br>
              </div>
            </div>
            @if( $book->quantity != 0)
              <form action="{{ route('borrow') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user() ? Auth::user()->id : ""}}">
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <button class="btn btn-primary" style="width: 100%;">Pinjam</button>
              </form>
              @endif
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End About Section -->
@endsection
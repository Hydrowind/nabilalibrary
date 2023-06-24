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

<!-- ======= Book Section ======= -->
<section class="about" data-aos="fade-up">
  <div class="container">
    <!-- Category Selector -->
    <a href="{{ route('search') }}" class="badge p-3 {{ app('request')->input('category') == '' ? 'bg-info' : 'bg-secondary' }}">Semua</a>
    @foreach($categories as $book)
    <a href="{{ route('search', ['category' => $book->category]) }}" class="badge p-3 {{ app('request')->input('category') == $book->category ? 'bg-info' : 'bg-secondary' }}">{{ ucfirst($book->category) }}</a>
    @endforeach

    <div class="row mt-3">
      @if(app('request')->input('keyword') != '')
      <p>Ditemukan <b>{{ count($data) }}</b> buku dari pencarian Anda melalui kata kunci <b> {{ app('request')->input('keyword') }} </b></p>
      @endif
      
      @foreach($data as $book)
      <div class="col-md-3">
        <div class="card" style="width: 18rem; margin-bottom: 15px;">
          <img src="{{ $book->coverUrl }}" class="card-img-top" height="400px" width="300px" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }} - {{ $book->year}}</h6>
            <div class="row d-flex flex-row align-items-center">
              <div class="col-md-6">
                <p class="card-subtitle mb-2 text-muted">{{ $book->page }} Halaman</p>
              </div>
              <div class="col-md-6 text-end align-middle">
                <p class="badge rounded-pill bg-info">Sisa Stok Buku : {{ $book->quantity }}</p> <br>
              </div>
            </div>
            <div class="row">
              <b>Sinopsis:</b>
              @if($book->synopsis)
                <p style="text-align: justify;">
                  {{ substr($book->synopsis, 0, 240) }}
                </p>
              @else
                -
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End Book Section -->
@endsection
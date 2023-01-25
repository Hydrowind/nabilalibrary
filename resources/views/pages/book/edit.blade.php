@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="content-box-large">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-house-user"></i> Edit Data</h2>
            </div>
            <div class="card-body">
                <form class="user" method="post" action="{{ route('books.update', $data->id) }}">
                    @method('put')
                    @csrf

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title"
                            placeholder="Masukkan Judul" name="title" value="{{ $data->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="year">Tahun</label>
                        <input type="number" class="form-control" id="year"
                            placeholder="Masukkan Tahun" name="year" value="{{ $data->year }}" required>
                    </div>

                    <div class="form-group">
                        <label for="author">Penulis</label>
                        <input type="text" class="form-control" id="author"
                            placeholder="Masukkan Penulis" name="author" value="{{ $data->author }}" required>
                    </div>

                    <div class="form-group">
                        <label for="page">Jumlah Halaman</label>
                        <input type="number" class="form-control" id="page"
                            placeholder="Masukkan Jumlah Halaman" name="page" value="{{ $data->page }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <input type="text" class="form-control" id="category"
                            placeholder="Masukkan Kategori" name="category" value="{{ $data->category }}">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity"
                            placeholder="Masukkan Quantity" name="quantity" value="{{ $data->quantity }}" required>
                    </div>

                    <div class="form-group">
                        <label for="cover_url">Cover URL</label>
                        <input type="text" class="form-control" id="cover_url"
                            placeholder="Masukkan URL Halaman Cover" name="cover_url" value="{{ $data->coverUrl }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


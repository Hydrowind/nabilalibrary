@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="card-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-edit"></i> Perbarui Data Makanan</h2>
        </div>
        <div class="card-body">
        <form class="user" method="post" action="{{ route('food.update', $model->id) }}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name"
                        placeholder="Nama" name="name" value="{{ $model->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description"  required>{{ $model->description }} </textarea>
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="text" class="form-control" id="price"
                        placeholder="Price" name="price" value="{{ $model->price }}" required>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
@endsection


@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="content-box-large">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-house-user"></i> Buat Data Baru</h2>
            </div>
            <div class="card-body">
            <form class="user" method="post" action="{{ route('transactions.update', $data->id) }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" id="type" class="form-control" placeholder="Type" required>
                            <option value="peminjaman" @if($data->type == "peminjaman") selected @endif>Peminjaman</option>
                            <option value="pengembalian" @if($data->type == "pengembalian") selected @endif>Pengembalian</option>
                            <option value="kehadiran" @if($data->type == "kehadiran") selected @endif>Kehadiran</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="date">Date</label>
                        <input type="date" class="form-control" id="date"
                            placeholder="Masukkan Tanggal" name="date" value="{{ $data->date }}" required>
                    </div>
                    <div class="form-group">
                        <label for="book_id">Buku</label>
                        <select name="book_id" id="book_id" class="form-control" placeholder="Book" required>
                            @foreach($books as $book)
                                <option value="{{ $book->id }}" @if($data->book_id == $book->id) selected @endif>{{ $book->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select name="user_id" id="user_id" class="form-control" placeholder="User" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @if($data->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                            @endforeach
                        </select>
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


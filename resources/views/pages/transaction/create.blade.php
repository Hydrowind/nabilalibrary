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
            <form class="user" method="post" action="{{ route('transactions.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" id="type" class="form-control" placeholder="Type" required>
                            <option value="peminjaman">Peminjaman</option>
                            <option value="pengembalian">Pengembalian</option>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                    <label for="date">Date</label>
                        <input type="date" class="form-control" id="date"
                            placeholder="Masukkan Tanggal" name="date" required>
                    </div> -->
                    <div class="form-group">
                        <label for="book_id">Buku</label>
                        <select name="book_id" id="book_id" class="form-control" placeholder="Book" required>
                            @foreach($books as $book)
                                @if($book->quantity > 0)
                                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select name="user_id" id="user_id" class="form-control" placeholder="User" required>
                            @foreach($users as $user)
                                @if($user->role == 2)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
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


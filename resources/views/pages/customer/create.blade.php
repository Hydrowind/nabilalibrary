@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="card-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-users"></i> Buat Data Pelanggan Baru</h2>
        </div>
        <div class="card-body">
        <form class="user" method="post" action="{{ route('customer.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name"
                        placeholder="Masukkan Nama" name="name" required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"
                        placeholder="Masukkan Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">No. Telepon</label>
                    <input type="text" class="form-control" id="phone"
                        placeholder="Masukkan No. Telepon" name="phone" required>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
@endsection


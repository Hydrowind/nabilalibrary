@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="content-box-large">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-house-user"></i> Buat Data Admin Baru</h2>
            </div>
            <div class="card-body">
            <form class="user" method="post" action="{{ route('users.store') }}">
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
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone"
                            placeholder="Enter Phone Number" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" class="form-control"
                            id="password" placeholder="Masukkan Kata Sandi" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Peran</label>
                        <select name="role" id="role" class="form-control" placeholder="Role" required>
                            <option value="0">SuperAdmin</option>
                            <option value="1">Pustakawan</option>
                            <option value="2" selected>Anggota</option>
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


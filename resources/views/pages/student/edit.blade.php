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
            <form class="user" method="post" action="{{ route('students.update', $data->id) }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="id">NIS</label>
                        <input type="text" class="form-control" id="id"
                            placeholder="Masukkan NIS" name="id" value="{{ $data->id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="fullname">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname"
                            placeholder="Masukkan Nama Lengkap" name="fullname" value="{{ $data->fullname }}" required>
                    </div>
                    <div class="form-group">
                        <label for="class">Kelas</label>
                        <input type="text" class="form-control" id="class"
                            placeholder="Masukkan Kelas" name="class" value="{{ $data->class }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Nomor Telepon</label>
                        <input type="text" class="form-control" id="phone_number"
                            placeholder="Masukkan Nomor Telepon" name="phone_number" value="{{ $data->phone_number }}" required>
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


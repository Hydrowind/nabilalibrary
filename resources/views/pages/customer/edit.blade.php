@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="card-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-users"></i> Perbarui Data Customer</h2>
        </div>
        <div class="card-body">
        <form class="user" method="post" action="{{ route('customer.update', $model->id) }}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name"
                        placeholder="Name" name="name" value="{{ $model->name }}" required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"
                        placeholder="Email Address" name="email" value="{{ $model->email }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">No. Telepon</label>
                    <input type="text" class="form-control" id="phone"
                        placeholder="Phone Number" name="phone" value="{{ $model->phone_number }}" required>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
@endsection


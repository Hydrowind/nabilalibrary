@extends('layouts.admin')
@section('content')

<!-- DataTales Example -->
<div class="card-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary"><i class="fas fa-users"></i> Data Pelanggan</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('customer.create') }}" class="btn btn-success mb-1 "><i class="fa fa-plus-circle"></i> Buat Data Baru</a> <br><br>
            
            @if(Session::get('message'))
            <div class="alert alert-dismissible fade show @if(Session::get('className')) {{ Session::get('className') }} @else alert-primary @endif" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1 
                        @endphp
                        @foreach ($model as $data)
                            <tr>
                                <td>{{ $no++ }}.</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone_number }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    <a href="{{ route('customer.edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#confirmModal">
                                        <i class="fa fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">Apakah Anda yakin akan menghapus data ini ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <form action=" {{ route('customer.destroy', $data->id) }} " method="post" style="display: inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


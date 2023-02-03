@extends('layouts.admin')
@section('content')
<!-- DataTales Example -->


<div class="content-box-large">
    <div class="panel-body">
        <a href="{{ route( 'transactions.create') }}" class="btn btn-success mb-1 "><i class="fa fa-plus-circle"></i> Buat Data Baru</a> <br><br>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Siswa</th>
                  <th>Tanggal<br>Peminjaman</th>
                  <th>Tanggal<br>Pengembalian</th>
                  <th>Buku</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->student->fullname}}</td>
                    <td>{{$d->date}}</td>
                    <td>{{$d->return_date}}</td>
                    <td>{{$d->book->title}}</td>
                    <td>{{$d->type}}</td>
                    <td>
                        @if($d->type=='peminjaman')
                        <form action="{{ route( 'transactions.update', $d->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Ubah Status</button>
                        </form>
                        <!-- <a href="{{ route( 'transactions.update', $d->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Ubah Status</a> -->
                        @endif
                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="{{ '#confirmModal'.$d->id }}">
                            <i class="glyphicon glyphicon-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Delete Modal-->
@foreach ($data as $d)
<div class="modal fade" id="{{ 'confirmModal'.$d->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">Apakah Anda yakin akan menghapus data ini ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <form action="{{ route( 'transactions.destroy', $d->id) }}" method="post" style="display: inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection


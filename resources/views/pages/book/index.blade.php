@extends('layouts.admin')
@section('content')
<!-- DataTales Example -->

@php $no=1 @endphp
<div class="content-box-large">
    <div class="panel-body">
        <a href="{{ route( 'books.create') }}" class="btn btn-success mb-1 "><i class="fa fa-plus-circle"></i> Buat Data Baru</a> <br><br>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tahun</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <th>Halaman</th>
                  <th>Kategori</th>
                  <th>Jumlah</th>
                  <th>Cover URL</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$d->title}}</td>
                    <td>{{$d->year}}</td>
                    <td>{{$d->author}}</td>
                    <td>{{$d->publisher}}</td>
                    <td>{{$d->page}}</td>
                    <td>{{$d->category}}</td>
                    <td>{{$d->quantity}}</td>
                    <td><img src="{{$d->coverUrl}}" alt="Cover" width="120px" height="180px"></td>
                    <td>{{$d->description}}</td>
                    <td>
                        <form action="{{ route( 'books.update', $d->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                        </form>
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
                <form action="{{ route( 'books.destroy', $d->id) }}" method="post" style="display: inline">
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


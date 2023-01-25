@extends('layouts.admin')
@section('content')

@php
  $attributes = [];
  if($data->first()){
    $attributes  = array_keys($data->first()->toArray());
  }

@endphp
<!-- DataTales Example -->
<div class="content-box-large">
    <div class="panel-body">
        <a href="{{ route( $routeGroup.'.create') }}" class="btn btn-success mb-1 "><i class="fa fa-plus-circle"></i> Buat Data Baru</a> <br><br>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                  @foreach ($attributes as $key)
                    <th>{{ ucwords($key) }}</th>
                    @endforeach
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    @foreach($attributes as $key)
                      <td>{{ $d[$key] }}</td>
                    @endforeach
                    <td>
                        <a href="{{ route( $routeGroup.'.edit', $d->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
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
                <form action="{{ route( $routeGroup.'.destroy', $d->id) }}" method="post" style="display: inline">
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


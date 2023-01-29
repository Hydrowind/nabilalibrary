@extends('layouts.admin')
@section('content')
<!-- DataTales Example -->

@php
    $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
@endphp

<div class="content-box-large">
    <div class="panel-body">
        <form action="" method="get">
            <select name="month" id="monthFilter" class="btn dropdown-toggle">
                <option value="">All</option>
                @foreach($months as $i => $month)
                    <option value="{{$i+1}}" {{ $_GET['month'] == $i+1 ? "selected" : "" }}>{{ $month }}</option>
                @endforeach
            </select>
            
            <select name="year" id="yearFilter" class="btn dropdown-toggle">
                <option value="">All</option>
                @for($year = 2010 ; $year <= 2023 ; $year++)
                    <option value="{{$year}}" {{ $_GET['year'] == $year ? "selected" : "" }}>{{ $year }}</option>
                @endfor
            </select>
            
            <input class="btn btn-primary" type="submit" name="action" value="Submit" />
            <input class="btn btn-danger" type="submit" name="action" value="Export PDF" />

        </form> 

        <br></br>
        
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Siswa</th>
                  <th>Tanggal<br>Peminjaman</th>
                  <th>Tanggal<br>Pengembalian</th>
                  <th>Buku</th>
                  <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->user->name}}</td>
                    <td>{{$d->date}}</td>
                    <td>{{$d->return_date}}</td>
                    <td>{{$d->book->title}}</td>
                    <td>{{$d->type}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection


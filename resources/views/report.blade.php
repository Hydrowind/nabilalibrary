@extends('layouts.admin')
@section('content')
<!-- DataTales Example -->

@php
    $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
@endphp

<div class="content-box-large">
    <div class="panel-body">
        <form action="" method="get">
            <label for="monthFilter">Pilih Bulan: </label>
            <select name="month" id="monthFilter" class="btn dropdown-toggle">
                <option value="">Semua</option>
                @foreach($months as $i => $month)
                    <option value="{{$i+1}}" {{ isset($_GET['month']) && $_GET['month'] == $i+1 ? "selected" : "" }}>{{ $month }}</option>
                @endforeach
            </select>
            
            <label for="yearFilter">Pilih Tahun: </label>
            <select name="year" id="yearFilter" class="btn dropdown-toggle">
                <option value="">Semua</option>
                @for($year = 2010 ; $year <= 2023 ; $year++)
                    <option value="{{$year}}" {{ isset($_GET['year']) && $_GET['year'] == $year ? "selected" : "" }}>{{ $year }}</option>
                @endfor
            </select>
            
            <input class="btn btn-primary" type="submit" name="action" value="Submit" />
            <!-- <input class="btn btn-danger" type="submit" name="action" value="Export PDF" /> -->

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
                    <td>{{$d->student->fullname}}</td>
                    <td>{{$d->date}}</td>
                    <td>{{$d->return_date}}</td>
                    <td>{{$d->book->title}}</td>
                    <td>{{$d->type}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if(count($data) == 0)
        	<p class="text-center">Tidak ada data</p>
        @endif
    </div>
</div>


@endsection


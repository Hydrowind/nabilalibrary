
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
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



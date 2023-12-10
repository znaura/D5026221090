@extends('master2')
@section('title', 'Database Minuman')

    @section('judul_halaman')

	<h3>Data Minuman</h3>

	<a href="/minuman/tambah"> + Tambah Minuman Baru</a>

	<br/>
	<br/>
    @endsection
    @section('konten')
    <p>Cari Data Minuman :</p>
	<form action="/minuman/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari minuman berdasarkan minuman ..." value="{{ old('cari') }}">
		<input type="submit" value="Cari" class="btn btn-primary">
	</form>
	<table class="table table-striped table-hover">

		<tr>
			<th>Kode Minuman</th>
			<th>Merk Minuman</th>
			<th>Stock Minuman</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($minuman as $m)
		<tr>
			<td>{{ $m->kodeminuman }}</td>
			<td>{{ $m->merkminuman }}</td>
			<td>{{ $m->stockminuman }}</td>
			<td>@if($m->tersedia == 'y')
                Tersedia <input type="checkbox" checked disabled>
            @else
                Tidak Tersedia <input type="checkbox" disabled>
            @endif</td>
			<td>
				<a href="/minuman/view/{{ $m->kodeminuman }}" class="btn btn-success">View </a>
                |
                <a href="/minuman/edit/{{ $m->kodeminuman }}" class="btn btn-warning">Edit </a>
				|
				<a href="/minuman/hapus/{{ $m->kodeminuman }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$minuman -> links()}}

    @endsection

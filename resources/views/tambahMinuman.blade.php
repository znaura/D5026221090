@extends('master2')
@section('konten')
	<h3>Tambah Data Minuman</h3>

	<a href="/minuman" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/minuman/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
         <div class = "form-group">
            <label for = "merkminuman" class = "col-sm-2 control-label">Merk Minuman</label>
            <div class="col-6">
               <input name="merkminuman" type = "text" class = "form-control" id = "merkminuman" placeholder = "Masukkan merk minuman..." required="required">
            </div>
         </div>
         <div class = "form-group">
            <label for = "stock" class = "col-sm-2 control-label">Stock Minuman</label>
            <div class="col-6">
               <input name="stockminuman" type = "number" class = "form-control" id = "stockminuman" placeholder = "Masukkan stock minuman ..." required="required">
            </div>
         </div>
		<input type="submit" value="Tambah Data" class="btn btn-success">
        {{-- Kode <input type="text" name="kode" required="required"> <br/> --}}
		{{-- Merk <input type="text" name="merk" required="required"> <br/> --}}
		{{-- Stock <input type="number" name="stock" required="required"> <br/> --}}
		{{-- Tersedia <textarea name="tersedia" required="required"></textarea> <br/> --}}
	</form>
@endsection

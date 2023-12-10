@extends('master2')

@section('konten')
	<h3>Edit Data Minuman</h3>

	<a href="/minuman" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($minuman as $m)
	<form action="/minuman/update" method="post" class="border col-6">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="kodeminuman" class="col control-label pt-4">Kode Minuman</label>
            <div class="col">
                <input name="kodeminuman"  type="number" id="kodeminuman" class="form-control" value="{{ $m->kodeminuman }}" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="merkminuman" class="col control-label">Merk Minuman</label>
            <div class="col">
                <input name="merkminuman" required="required" type="text" id="merkminuman" class="form-control" value="{{ $m->merkminuman }}">
            </div>
        </div>

        <div class="form-group">
            <label for="stockminuman" class="col control-label">Stock Minuman</label>
            <div class="col">
                <input type="number" required="required" name="stockminuman" id="stockminuman" class="form-control" value="{{ $m->stockminuman }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col pb-3">
                <input type="submit" value="Simpan Data" class="btn btn-success w-100">
            </div>
        </div>

	</form>
	@endforeach
@endsection

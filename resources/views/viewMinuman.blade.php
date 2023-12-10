@extends('master2')
@section('konten')
	<h3>Data Minuman</h3>

	<a href="/minuman" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

    <div class='row'>
        <div class='col-6 bg-primary'>
        </div>
	    @foreach($minuman as $m)
	    <form method="get" class='col-6 border'>

            <div class="form-group">
                <label for="kodeminuman" class="col control-label pt-4">Kode Minuman</label>
                <div class="col">
                    <input type="number" class="form-control w-100" name="kodeminuman" value="{{ $m->kodeminuman }}" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="merkminuman" class="col control-label">Merk Minuman</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="merkminuman" value="{{ $m->merkminuman }}" disabled>
                </div>
            </div>


            <div class="form-group">
                <label for="stockminuman" class="col control-label">Stock Minuman</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="stockminuman" value="{{ $m->stockminuman }}" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="tersedia" class="col control-label">Ketersediaan</label>
                <div class="col">
                    <input type="text" class="form-control w-100" name="tersedia" value="{{ $m->tersedia }}" disabled>
                </div>
            </div>

            <div class="form-group">
                <div class="col pb-3">
                    <a href="/minuman" class='form-control btn btn-primary '>Ok</a>
                </div>
            </div>
	    </form>
	    @endforeach
    </div>
@endsection
        {{-- <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col">
                <input name="nama" type="text" class="form-control w-100" id="nama" value="{{ $p->pegawai_nama }}" required="required" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
            <div class="col">
                <input name="jabatan" type="text" class="form-control w-100" id="jabatan" value="{{ $p->pegawai_jabatan }}" required="required" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Umur</label>
            <div class="col">
                <input name="umur" type="text" class="form-control w-100" id="umur" value="{{ $p->pegawai_umur }}" required="required" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
            <div class="col">
                <textarea name="alamat"  class="form-control w-100" id="alamat" required="required" disabled>{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div> --}}

		{{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/> --}}
		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
        {{-- <a href="/pegawai" class='form-control btn btn-primary '> Ok</a>
	    </form> --}}
        {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}
		{{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}
		{{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
		{{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}

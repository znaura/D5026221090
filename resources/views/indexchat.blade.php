@extends('master2')
@section('title', 'Database Emoji Chat')

    @section('judul_halaman')

    <h1><a href="/chat">www.malasngoding.com</a></h1>

    <a href="/chat">Kembali</a>

	<br/>
	<br/>
    @endsection
    @section('konten')
    <div class="col-12 p-4 border rounded"> {!! $convertedText !!}</div>

    @endsection

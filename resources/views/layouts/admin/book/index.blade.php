@extends('admin.admin')

@section('title')
L L A N N | Admin
@endsection

@section('judulnya')
<h1>Halaman INDEX BOOK</h1>
@endsection

@section('content')

@foreach ($buku as $book)
Nama buku : {{ $book->nama_buku}} <br>

Jumlah buku : {{ $book->jumlah_halaman}} <br>

Translate Judul buku : {{ $book->translate_judul_buku}} <br> <br>
@endforeach
@endsection

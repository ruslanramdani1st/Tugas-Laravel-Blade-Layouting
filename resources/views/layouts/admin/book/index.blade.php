@extends('admin.admin')

@section('title')
L L A N N | Admin
@endsection

@section('judulnya')
<h1>Perpustakaan</h1>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Halaman Daftar Buku</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Buku</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @foreach ($buku as $book)
            Nama Pengarang : {{ $book->pengarang->nama}} <br>
            Email Pengarang : {{ $book->pengarang->email}} <br>
            Nama Buku : {{ $book->nama_buku }} <br>
            @if($book->jumlah_halaman > 1)
            Jumlah Halaman Buku : {{ $book->jumlah_halaman }} <br>
            @else
            Jumlah Halaman Buku : <b>Belum mempunyai jumlah halaman</b> <br>
            @endif
            Translate Judul Buku : {!! $data->translate_judul_buku ?? '<i>Translate Buku Belum Tersedia</i>' !!} <br>
            <hr>
            @endforeach
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <h1>Daftar Pengarang</h1>
            @foreach ($pengarang as $data)
            Nama Pengarang Buku : {{ $data->nama}} <br>
            Email Pengarang : {{ $data->email}} <br>
            Telepon Pengarang : {{ $data->tlp}} <br>
            <br>
                @foreach ($data->book as $item)
                    Nama Buku : {{ $item->nama_buku}} <br>
                    @if($item->jumlah_halaman>1)
                    Jumlah Halaman Buku : {{ $book->jumlah_halaman}} <br>
                    @else
                    Jumlah Halaman Buku : <b>Belum Mempunyai jumlah halaman</b>
                    @endif
                    Translate Judul buku : {{ $book->translate_judul_buku ?? 'Belum ada translate'}} <br><hr>
                @endforeach
            @endforeach
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection

@extends('admin.admin')

@section('title')
    L L A N N | Admin
@endsection

@section('judulnya')
    <h1>Menampilkan SHOW Pengarang</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">Data Penulis
                            <a href="{{ route('pengarang.index') }}" class="btn btn-sm btn-primary float-right">Kembali</a>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <label for="nama">
                                    Nama Pengarang :
                                </label>
                                {{ $pengarang->nama }}
                                <br>

                                <label for="email">
                                    Email Pengarang :
                                </label>
                                {{ $pengarang->email }}
                                <br>

                                <label for="tlp">
                                    Nomor Telepon Pengarang :
                                </label>
                                {{ $pengarang->tlp }}
                                <br>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

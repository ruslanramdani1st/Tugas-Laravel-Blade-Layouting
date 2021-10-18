@extends('admin.admin')

@section('title')
    L L A N N | Admin
@endsection

@section('judulnya')
    <h1>Menambahkan Pengarang</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data
                        <a href="{{ route('pengarang.index') }}" class="btn btn-sm btn-primary float-right">Kembali</a>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('pengarang.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Pengarang</label>
                                <input type="text" value="{{old('nama')}}" class="form-control" name="nama" placeholder="Masukan Nama Pengarang"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" value="{{old('email')}}" class="form-control" name="email" placeholder="Masukan Email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input type="text" value="{{old('tlp')}}" class="form-control" name="tlp" placeholder="Masukan nomor telepon"
                                    required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

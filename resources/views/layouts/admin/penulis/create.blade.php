@extends('admin.admin')

@section('title')
L L A N N | Admin
@endsection

@section('judulnya')
<h1>Halaman CREATE BOOK</h1>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Penulis
                </div>
                <div class="card-body">
                    <form action="{{route('penulis.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Penulis</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" name="tlp" required>
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

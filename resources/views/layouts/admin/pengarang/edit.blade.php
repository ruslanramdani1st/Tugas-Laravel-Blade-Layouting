@extends('admin.admin')

@section('title')
L L A N N | Admin
@endsection

@section('judulnya')
<h1>Edit Pengarang</h1>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Pengarang
                    <a href="{{route('pengarang.index')}}" class="btn btn-sm btn-primary float-right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('pengarang.update', $pengarang->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Pengarang</label>
                            <input type="text" value="{{$pengarang->nama}}" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" value="{{$pengarang->email}}" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" value="{{$pengarang->tlp}}" class="form-control" name="tlp" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                EDIT
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

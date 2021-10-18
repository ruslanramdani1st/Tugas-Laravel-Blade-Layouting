@extends('admin.admin')

@section('title')
L L A N N | Admin
@endsection

@section('judulnya')
<h1>Pengarang</h1>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Penulis
                    <a href="{{route('pengarang.create')}}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>

                <div class="card-body">

                   <div class="table-responsive">
                         <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengarang</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($pengarang as $data)
                            <tr>
                                <td>
                                    {{$no++}}
                                </td>
                                <td>
                                    {{$data->nama}}
                                </td>
                                <td>
                                    {{$data->email}}
                                </td>
                                <td>
                                    {{$data->tlp}}
                                </td>
                                <td>
                                    <form action="{{ route('pengarang.destroy', $data->id)}}" method="POST">
                                        <a href="{{ route('pengarang.edit', $data->id)}}" class="btn btn-success">Edit</a> |
                                        <a href="{{ route('pengarang.show', $data->id)}}" class="btn btn-warning">Show</a> |
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

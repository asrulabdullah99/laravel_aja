@extends('components.app')
@section('title')
Dashboard Jabatan
@endsection
@extends('components.sidebar')

@section('konten')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Jabatan</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
        </button>
    </div>
</div>
<div> <a href="{{ route('jabatan.tambah') }}"><button type="button" class="btn btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button></a></div>
<div class="table-responsive">
    <table class="table table-hover table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Tunjangan (Ribu Rupiah)</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataJabatan as $index => $jabatan)
            <tr>
                <td scope="col">{{ ++$index }}</td>
                <td scope="col">{{ $jabatan->user->name }}</td>
                <td scope="col">{{ $jabatan->user->email }}</td>
                <td scope="col">{{ $jabatan->nama_jabatan }}</td>
                <td scope="col">{{ $jabatan->tunjangan }}</td>
                <td>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-0">
                            <a href="{{route('jabatan.edit', $jabatan->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                        </span><span class="input-group-text border-0">
                            <form onsubmit="return confirm('Data jabatan akan dihapus ?')" action=" {{route('jabatan.deleteJabatan',$jabatan->id)}}" method="POST" ">
                        @csrf
                        @method('DELETE')
                        <button type=" submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                            </form>
                        </span>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
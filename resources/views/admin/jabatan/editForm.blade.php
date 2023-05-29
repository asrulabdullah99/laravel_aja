@extends('components.app')
@section('title')
Tambah Data
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
<div>
    <h4>Form Edit Jabatan</h4>
</div>
<form action="{{route('jabatan.updateJabatan',$jabatan->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Pengguna</label>
        <select class="form-select" name='user_id' aria-label="Default select example">
            <option value="{{$jabatan->user->id}}" selected>{{ $jabatan->user->name }}</option>
            @foreach($fetchUser as $user)
            <option value="{{$user->id}}">{{ $user->name }}</option>
            @endforeach
        </select>
        <small id="emailHelp" class="form-text text-muted">example : Asrul Abdullah.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Jabatan</label>
        <input type="text" name="nama_jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama jabatan" value="{{ old('nama_jabatan') ?? $jabatan->nama_jabatan}}">
        <small id="emailHelp" class="form-text text-muted">ex. Kaprodi.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tunjangan</label>
        <input type="decimal" name="tunjangan" class="form-control" id="exampleInputPassword1" placeholder="Tunjangan" value="{{ old('tunjangan') ?? $jabatan->tunjangan}}">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
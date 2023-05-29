@extends('components.app')
@section('title')
Tambah Data
@endsection
@extends('components.sidebar')
@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Kehadiran</h1>

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
    <h4>Form Edit Kehadiran</h4>
</div>
<form action="{{route('kehadiran.updateKehadiran',$kehadiran->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Pengguna</label>
        <select class="form-select" name='user_id' aria-label="Default select example">
            <option value="">Pilih Nama</option>
            @foreach($fetchUser as $user)
            <option value="{{$user->id}}">{{ $user->name }}</option>
            @endforeach
        </select>
        <small id="emailHelp" class="form-text text-muted">example : Asrul Abdullah.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jam Masuk</label>
        <input type="datetime-local" name="jam_masuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ now()->setTimezone('T')->format('Y-m-dTh:m') }}">
        <small id="emailHelp" class="form-text text-muted">example : Kaprodi</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Jam Keluar</label>
        <input type="datetime-local" name="jam_keluar" class="form-control" id="exampleInputPassword1" placeholder="Enter jam keluar">
        <small id="emailHelp" class="form-text text-muted">example : 1000</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Keterangan</label>
        <br>
        <input type="radio" name="status" value="M" {{ $kehadiran->status === 'M' ? 'checked' : '' }}> Masuk
        <input type="radio" name="status" value="A" {{ $kehadiran->status === 'A' ? 'checked' : '' }}> Alpa
        <input type="radio" name="status" value="I" {{ $kehadiran->status === 'I' ? 'checked' : '' }}> Izin
        <input type="radio" name="status" value="S" {{ $kehadiran->status === 'S' ? 'checked' : '' }}> Sakit
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
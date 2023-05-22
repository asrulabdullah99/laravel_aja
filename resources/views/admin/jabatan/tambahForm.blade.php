@extends('components.app')
@section('title')
Tambah Data
@endsection
@section('sidebar')
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Pengguna
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Kehadiran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/jabatan">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Jabatan
                </a>
            </li>


        </ul>

    </div>
</nav>
@endsection

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
    <h4>Form Tambah Jabatan</h4>
</div>
<form action="{{route('jabatan.saveJabatan')}}" method="POST">
    @csrf
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
        <label for="exampleInputEmail1">Jabatan</label>
        <input type="text" name="nama_jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter jabatan">
        <small id="emailHelp" class="form-text text-muted">example : Kaprodi</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tunjangan</label>
        <input type="number" name="tunjangan" class="form-control" id="exampleInputPassword1" placeholder="Enter tunjangan">
        <small id="emailHelp" class="form-text text-muted">example : 1000</small>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
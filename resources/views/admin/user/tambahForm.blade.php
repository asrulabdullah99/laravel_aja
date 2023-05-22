@extends('components.app')
@section('title')
Form Tambah User
@endsection
@extends('components.sidebar')

@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard User</h1>

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
    <h4>Form Tambah User</h4>
</div>
<form action="{{route('user.saveUser')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Pengguna</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        <small id="emailHelp" class="form-text text-muted">example : Asrul Abdullah.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">ex. asrul.abdullah@unmuhpnk.ac.id.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
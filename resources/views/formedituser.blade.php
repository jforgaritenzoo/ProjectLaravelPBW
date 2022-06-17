@extends('layouts.main2')
@section('header')
    <h6 class="text-center">Formulir Ubah User</h6>
@endsection
@section('content')
    <form class="pt-2 pb-2" action="/user/updateuser/{{$user->id}}" method="post">
        @csrf
        @method('PUT')
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </div>
        @endif
        <div class="form-group w-50">
            <label>Nama Pengguna</label>
            <input value ="{{$user->nama_user}}" type="text" name="nama_user" class="form-control" required autofocus>
        </div>
        <div class="form-group w-25">
            <label>NIK</label>
            <input value ="{{$user->nik_user}}" type="number" name="nik_user" class="form-control" required>
        </div>
        <div class="form-group w-25">
            <label>No Handphone</label>
            <input value ="{{$user->no_hp}}" type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="form-group w-50">
            <label>Password Baru</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password Baru" required>
        </div>
        <div class="form-group pt-4 w-25">
            <input type="submit" class="btn btn-light btn-outline-dark">
        </div>
    </form>
@endsection

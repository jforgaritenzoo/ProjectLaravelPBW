@extends('layouts.main2')
@section('header')
    <h6 class="text-center">Formulir Registrasi</h6>
@endsection
@section('content')
    <form class="pt-2 pb-2" action="/user/simpanuser" method="post">
        @csrf
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
            <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama Pengguna" required
                autofocus>
        </div>
        <div class="form-group w-50">
            <label>NIK</label>
            <input type="number" name="nik_user" class="form-control" placeholder="Masukkan NIK" required>
        </div>
        <div class="form-group w-50">
            <label>No Handphone</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Handphone" required>
        </div>
        <div class="form-group w-25">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
        </div>
        <div class="form-group pt-4 w-25">
            <input type="submit" class="btn btn-light btn-outline-dark">
        </div>
    </form>
@endsection

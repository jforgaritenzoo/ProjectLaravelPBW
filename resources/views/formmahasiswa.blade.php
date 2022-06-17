@extends('layouts.main2')
@section('header')
    <h6>Formulir Add Mahasiswa</h6>
@endsection
@section('content')
    <form class="pt-2 pb-2" action="/mahasiswa/simpanmhs" method="post">
        @csrf
        <div class="form-group w-25">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
        </div>
        <div class="form-group w-25">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>
        <label>Gender</label>
        <div class="form-check w-25">
            <input type="radio" value="Pria" name="gender" class="form-check-input">
            <label>Pria</label>
        </div>
        <div class="form-check w-25">
            <input type="radio" value="Wanita" name="gender" class="form-check-input">
            <label>Wanita</label>
        </div>
        <div class="form-group w-25">
            <label>Jurusan</label>
            <select name="jurusan" class="form-control">
                <option value="" disabled selected><--- Pilih Jurusan ---></option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Informatika">Informatika</option>
                <option value="Filsafat Keilahian">Filsafat Keilahian</option>
                <option value="Akuntasi">Akuntasi</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Kedokteran">Kedokteran</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Desain Produk">Desain Produk</option>
                <option value="PBI">Pendidikan Bahasa Inggris</option>
            </select>
        </div>
        <label>Bidang Minat</label>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Olahraga">
                Olahraga
            </label>
        </div>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Kesenian">
                Kesenian
            </label>
        </div>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Marketing dan Investasi">
                Marketing dan Investasi
            </label>
        </div>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Musik">
                Musik
            </label>
        </div>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Tarian">
                Tarian
            </label>
        </div>
        <div class="form-group pt-4 w-25">
            <input type="submit" class="btn btn-light btn-outline-dark">
        </div>
    </form>
@endsection

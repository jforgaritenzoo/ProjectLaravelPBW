@extends('layouts.main2')
@section('header')
    <h6>Formulir Edit Mahasiswa</h6>
@endsection
@section('content')
    @php
        $bid_minat = explode(',',$mahasiswa->bid_minat);
    @endphp
    <form class="pt-2 pb-2" action="/mahasiswa/updatemhs/{{$mahasiswa->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group w-25">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control" value = "{{$mahasiswa->nim}}" readonly >
        </div>
        <div class="form-group w-25">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" value = "{{$mahasiswa->nama}}" required>
        </div>
        <label>Gender</label>
        <div class="form-check w-25">
            <input type="radio" value="Pria" {{$mahasiswa->gender == 'Pria' ? 'checked':''}} name="gender" class="form-check-input">
            <label>Pria</label>
        </div>
        <div class="form-check w-25">
            <input type="radio" value="Wanita" {{$mahasiswa->gender == 'Wanita' ? 'checked':''}} name="gender" class="form-check-input">
            <label>Wanita</label>
        </div>
        <div class="form-group w-25">
            <label>Jurusan</label>
            <select name="jurusan" class="form-control">
                <option value="" disabled selected><--- Pilih Jurusan ---></option>
                <option value="Sistem Informasi" {{$mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':''}}>Sistem Informasi</option>
                <option value="Informatika" {{$mahasiswa->jurusan == 'Informatika' ? 'selected':''}}>Informatika</option>
                <option value="Filsafat Keilahian" {{$mahasiswa->jurusan == 'Filsafat Keilahian' ? 'selected':''}}>Filsafat Keilahian</option>
                <option value="Akuntasi" {{$mahasiswa->jurusan == 'Akuntasi' ? 'selected':''}}>Akuntasi</option>
                <option value="Manajemen" {{$mahasiswa->jurusan == 'Manajemen' ? 'selected':''}}>Manajemen</option>
                <option value="Kedokteran" {{$mahasiswa->jurusan == 'Kedokteran' ? 'selected':''}}>Kedokteran</option>
                <option value="Arsitektur" {{$mahasiswa->jurusan == 'Arsitektur' ? 'selected':''}}>Arsitektur</option>
                <option value="Desain Produk" {{$mahasiswa->jurusan == 'Desain Produk' ? 'selected':''}}>Desain Produk</option>
                <option value="PBI" {{$mahasiswa->jurusan == 'PBI' ? 'selected':''}}>Pendidikan Bahasa Inggris</option>
            </select>
        </div>
        <label>Bidang Minat</label>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Olahraga" {{in_array("Olahraga",$bid_minat) ? 'checked':''}}>
                Olahraga
            </label>
        </div>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Kesenian" {{in_array("Kesenian",$bid_minat) ? 'checked':''}}>
                Kesenian
            </label>
        </div>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Marketing dan Investasi" {{in_array("Marketing dan Investasi",$bid_minat) ? 'checked':''}}>
                Marketing dan Investasi
            </label>
        </div>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Musik" {{in_array("Musik",$bid_minat) ? 'checked':''}}>
                Musik
            </label>
        </div>
        <div class="form-check w-25">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="bid_minat[]" value="Tarian" {{in_array("Tarian",$bid_minat) ? 'checked':''}}>
                Tarian
            </label>
        </div>
        <div class="form-group pt-4 w-25">
            <input type="submit" class="btn btn-light btn-outline-dark">
        </div>
    </form>
@endsection

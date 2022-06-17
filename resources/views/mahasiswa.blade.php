@extends('layouts.main2')
@section('header')
    <a class="btn btn-secondary" href="mahasiswa/formmhs" role="button"><i class="bi bi-file-plus"></i>Add Data</a>
    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="mahasiswa/cari">
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search Nama/Nim">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
@endsection

@section('content')
    <div classs = "flash-message">
        @foreach (['danger', 'info', 'success'] as $msg)
            @if (Session::has('alert-' . $msg))
                <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('alert-' . $msg) }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        @endforeach
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Bidang Minat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $no => $m)
                <tr>
                    <th scope="row">{{ $mahasiswa->firstItem() + $no }}</th>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->gender }}</td>
                    <td>{{ $m->jurusan }}</td>
                    <td>{{ $m->bid_minat }}</td>
                    <td>
                        <a href="/mahasiswa/ubahmhs/{{$m->id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="/mahasiswa/hapusmhs/{{$m->id}}" data-confirm="Apakah anda yakin menghapus data ini?" class="delete btn btn-outline-danger"><i class="bi bi-trash3"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <span class="float-left">Total Data = {{ $mahasiswa->total() }} :: Jumlah Data Halaman ini = {{$mahasiswa->count()}}</span>
    <span class="float-right">{{ $mahasiswa->links() }}</span>
    <script>
        var deleteLinks = document.querySelectorAll('.delete');

        for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();

            var choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');
            }
            });
        }

       </script>
@endsection

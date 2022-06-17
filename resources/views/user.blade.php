 @extends('layouts.main2')
@section('header')
    <a class="btn btn-secondary" href="user/formuser" role="button"><i class="bi bi-person-plus-fill"></i>
    </i>Register</a>
    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="user/cariuser">
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search Nama/Nik">
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
    <table class="table table-hover table-striped ">
        <thead class="text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pengguna</th>
                <th scope="col">Nik</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $no => $u)
                <tr>
                    <th scope="row">{{ $user->firstItem() + $no }}</th>
                    <td>{{ $u->nama_user }}</td>
                    <td>{{ $u->nik_user }}</td>
                    <td>{{ $u->no_hp }}</td>
                    <td align="center" >
                        <a href="/user/ubahuser/{{$u->id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="/user/hapususer/{{$u->id}}" data-confirm="Apakah anda yakin menghapus data ini?" class="delete btn btn-outline-danger"><i class="bi bi-trash3"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <span class="float-left">Total Data = {{ $user->total() }} :: Jumlah Data Halaman ini = {{$user->count()}}</span>
    <span class="float-right">{{ $user->links() }}</span>
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

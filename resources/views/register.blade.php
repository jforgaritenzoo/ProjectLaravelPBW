<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Register Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body class="text-center" style="background-color: #8FBDD3">

    <main class="form-signin w-100 m-auto">
        <form action="/user/registeruser" method="POST">
            @csrf
            <img class="mb-4"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register Form</h1>
            <div class="form-floating form-group">
                <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama Pengguna" id="floatingNama" required autofocus>
                <label for="floatingNama">Nama Pengguna</label>

            </div>
            <div class="form-floating form-group">
                <input id="floatingNik" type="number" name="nik_user" class="form-control" placeholder="Masukkan NIK" required>
                <label for="floatingNik">NIK</label>
            </div>
            <div class="form-floating form-group">
                <input id="floatingNohp" type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Handphone"
                    required>
                    <label for="floatingNohp">No Handphone</label>
            </div>
            <div class="form-floating form-group">
                <input id="floatingPass" type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                <label for="floatingPass">Password</label>

            </div>
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

            <div class="btn-group">
                <button type="submit" class="w-50 btn btn-lg mr-2" style="background-color: #A88051"> Register
            </div>

            <p class="mt-5 mb-3 text-muted">&copy; Template 2022</p>
        </form>
    </main>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>

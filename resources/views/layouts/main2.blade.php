<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/login">Database Laravela 2</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar-sticky col-lg-2 col-sm-2 vh-100" >
                <div class="nav flex-column nav-pills mt-3 " >
                    <a class="nav-link" href="/dashboard" ><i class="bi bi-house-door-fill"></i>
                        Home</a>
                    <a class="nav-link"  href="/user" ><i class="bi bi-person-fill"></i>
                        User</a>
                    <a class="nav-link"  href="/mahasiswa" ><i class="bi bi-person-fill"></i>
                        Mahasiswa</a>
                  </div>
              </div>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class=" float-left h2">Dashboard</h1>
                    <div class="dropdown show float-right">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                            {{ Auth::user()->nama_user }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item disabled"><i class="bi bi-person-circle"></i>
                                {{ Auth::user()->nama_user }}</a>
                            <a class="dropdown-item" href="/login/logout">Logout</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card mt-3">
                        <div class="card-header" style="background-color: #F2EBE9">
                            @yield('header')
                        </div>
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>

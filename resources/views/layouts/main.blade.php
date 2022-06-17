<!doctype html>
<html lang="en">
  <head>
    <title>Database Laravela</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 py-2" style="background-color: #A97155">
                <h6 class="text-white font-weight-bold float-left"> <i class="bi bi-list"></i>
                    Tabel Laravela 2</h6>
              </div>
          </div>
          <div class="row" style="background-color: #8FBDD3">
              <div class="col-lg-2 col-sm-2 border-right border-dark vh-100" style="background-color: #E4D1B9">
                <div class="nav flex-column nav-pills mt-3 " >
                    <a class="nav-link" href="/dashboard" ><i class="bi bi-house-door-fill"></i>
                        Home</a>
                    <a class="nav-link"  href="/user" ><i class="bi bi-person-fill"></i>
                        User</a>
                  </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <div class="card mt-3">
                    <div class="card-header" style="background-color: #F2EBE9">
                        @yield('header')
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>

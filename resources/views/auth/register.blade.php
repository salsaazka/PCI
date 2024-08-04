<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT. PRIJADI CAHAYA INDONESIA</title>
  <link rel="stylesheet" href="{{ asset('assets-admin/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="{{route('landing')}}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="{{ asset('assets/images/logo.png') }}" width="100"
                    alt="" />
                </a>
                <p class="text-center">Comprehensive Solutions for Your
                    Business Growth!</p>
                <form action="{{ route('auth.register') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputTelp" class="form-label">No Telp</label>
                    <input type="number" name="no_telp" class="form-control" id="exampleInputTelp" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputAdd" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputAdd" aria-describedby="emailHelp">
                  </div>
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Sign Up</button>
                  <a href="{{ route('landing') }}" class="btn btn-secondary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Back To Home</a>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('signIn') }}" class="text-dark font-weight-bolder">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

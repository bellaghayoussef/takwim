
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogi - Admin and Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backOffice/assets/media/image/favicon.png') }}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('backOffice/vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ asset('backOffice/vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('backOffice/vendors/dataTable/datatables.min.css') }}" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('backOffice/assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="rtl">

  <main class="main-content rtl  mt-0" style="    margin-top: 104px!important;  ">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">

            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">

              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">مرحبًا بعودتك</h3>
                  <p class="mb-0">أدخل بريدك الإلكتروني وكلمة المرور لتسجيل الدخول </p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <label>بريد إلكتروني</label>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="بريد إلكتروني" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    <label>كلمة المرور</label>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="كلمة المرور" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">تسجيل الدخول</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>





  <script src="{{  asset('backOffice/assets/js/core/popper.min.js') }}"></script>
  <script src="{{  asset('backOffice/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{  asset('backOffice/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{  asset('backOffice/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{  asset('backOffice/assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
</body>

</html>

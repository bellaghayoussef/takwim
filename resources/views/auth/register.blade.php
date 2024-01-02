
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
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="title" class="col-md-2 control-label">{{ trans('evaluations.title') }}</label>
                            <div class="col-md-10">
                                <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($evaluation)->title) }}" minlength="1" maxlength="255" placeholder="{{ trans('evaluations.title__placeholder') }}">
                                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('post') ? 'has-error' : '' }}">
                            <label for="post" class="col-md-2 control-label">{{ trans('evaluations.post') }}</label>
                            <div class="col-md-10">
                                <input class="form-control" name="post" type="text" id="post" value="{{ old('post', optional($evaluation)->post) }}" minlength="1" placeholder="{{ trans('evaluations.post__placeholder') }}">
                                {!! $errors->first('post', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
                            <label for="notes" class="col-md-2 control-label">{{ trans('evaluations.notes') }}</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="notes" cols="50" rows="10" id="notes" minlength="1" maxlength="1000">{{ old('notes', optional($evaluation)->notes) }}</textarea>
                                {!! $errors->first('notes', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('etat') ? 'has-error' : '' }} hidden" style="    display: none;
                            ">
                            <label for="etat" class="col-md-2 control-label">{{ trans('evaluations.etat') }}</label>
                            <div class="col-md-10">
                                <input class="form-control" name="etat" type="text" id="etat" value="0" minlength="1" placeholder="{{ trans('evaluations.etat__placeholder') }}">
                                {!! $errors->first('etat', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('rating') ? 'has-error' : '' }}">
                            <label for="rating" class="col-md-2 control-label">{{ trans('evaluations.rating') }}</label>
                            <div class="col-md-10">


                                <select class="form-control" name="rating" type="text" id="rating"  minlength="1" placeholder="{{ trans('evaluations.rating__placeholder') }}">
                                    <option value="A" {{ old('evaluator_id', optional($evaluation)->rating) == 'A' ? 'selected' : '' }}>A</option>
                                    <option value="B" {{ old('evaluator_id', optional($evaluation)->rating) == 'B' ? 'selected' : '' }}>B</option>
                                    <option value="C" {{ old('evaluator_id', optional($evaluation)->rating) == 'C' ? 'selected' : '' }}>C</option>
                                </select>
                                {!! $errors->first('rating', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
                            <label for="user_id" class="col-md-2 control-label">{{ trans('evaluations.user_id') }}</label>
                            <div class="col-md-10">
                                <select class="form-control" id="user_id" name="user_id">
                                        <option value="" style="display: none;" {{ old('user_id', optional($evaluation)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('evaluations.user_id__placeholder') }}</option>
                                    @foreach ($users as $key => $user)
                                        <option value="{{ $key }}" {{ old('user_id', optional($evaluation)->user_id) == $key ? 'selected' : '' }}>
                                            {{ $user }}
                                        </option>
                                    @endforeach
                                </select>

                                {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                            </div>
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

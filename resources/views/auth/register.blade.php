
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

<style>

    #signature-pad {
      border: 1px solid #ccc;
  }

  </style>

</head>
<body class="rtl" style="    overflow: unset;
">
<?php $user=new App\Models\User(); ?>
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

<div class="form-group {{ $errors->has('firstnamear') ? 'has-error' : '' }}">
    <label for="firstnamear" class="col-md-12 control-label">{{ trans('users.firstnamear') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="firstnamear" type="text" id="firstnamear" value="{{ old('firstnamear', optional($user)->firstnamear) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.firstnamear__placeholder') }}">
        {!! $errors->first('firstnamear', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lastnamear') ? 'has-error' : '' }}">
    <label for="lastnamear" class="col-md-12 control-label">{{ trans('users.lastnamear') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="lastnamear" type="text" id="lastnamear" value="{{ old('lastnamear', optional($user)->lastnamear) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.lastnamear__placeholder') }}">
        {!! $errors->first('lastnamear', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('firstnameen') ? 'has-error' : '' }}">
    <label for="firstnameen" class="col-md-12 control-label">{{ trans('users.firstnameen') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="firstnameen" type="text" id="firstnameen" value="{{ old('firstnameen', optional($user)->firstnameen) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.firstnameen__placeholder') }}">
        {!! $errors->first('firstnameen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lastnameen') ? 'has-error' : '' }}">
    <label for="lastnameen" class="col-md-12 control-label">{{ trans('users.lastnameen') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="lastnameen" type="text" id="lastnameen" value="{{ old('lastnameen', optional($user)->lastnameen) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.lastnameen__placeholder') }}">
        {!! $errors->first('lastnameen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    <label for="phone" class="col-md-12 control-label">{{ trans('users.phone') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($user)->phone) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.phone__placeholder') }}">
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('uid') ? 'has-error' : '' }}">
    <label for="uid" class="col-md-12 control-label">{{ trans('users.uid') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="uid" type="text" id="uid" value="{{ old('uid', optional($user)->uid) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.uid__placeholder') }}">
        {!! $errors->first('uid', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('singater') ? 'has-error' : '' }}">
    <label for="singater" class="col-md-12 control-label">{{ trans('users.singater') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="singater" type="hidden" id="singater" value="{{ old('singater', optional($user)->singater) }}" maxlength="255" placeholder="{{ trans('users.singater__placeholder') }}">
        {!! $errors->first('singater', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div>
    <canvas id="signature-pad" width="300" height="150"></canvas>
</div>
<a href="#" id="clear">Clear</a>
<a href="#" id="save">Save</a>

{{--

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-12 control-label">{{ trans('roles.model_plural') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="role" name="role">
        	@foreach (Spatie\Permission\Models\Role::all()->pluck('name') as $key )
			    <option value="{{ $key }}" >
			    	{{ $key }}
			    </option>
			@endforeach
        </select>

    </div>
</div> --}}
{{--
<div class="form-group {{ $errors->has('supvaser_id') ? 'has-error' : '' }}">
    <label for="supvaser_id" class="col-md-12 control-label">{{ trans('users.supvaser_id') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="supvaser_id" name="supvaser_id">
        	    <option value="" style="display: none;" {{ old('supvaser_id', optional($user)->supvaser_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('users.supvaser_id__placeholder') }}</option>
        	@foreach ($supvasers as $key => $supvaser)
			    <option value="{{ $supvaser->id }}" {{ old('supvaser_id', optional($user)->supvaser_id) == $supvaser->id ? 'selected' : '' }}>
			    	{{ $supvaser->firstnamear }} {{ $supvaser->lastnamear }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('supvaser_id', '<p class="help-block">:message</p>') !!}
    </div>
</div> --}}

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-12 control-label">{{ trans('users.email') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($user)->email) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.email__placeholder') }}">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-12 control-label">{{ trans('users.password') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="password" type="text" id="password" minlength="1" maxlength="255" required="true" placeholder="{{ trans('users.password__placeholder') }}">
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var canvas = document.getElementById('signature-pad');
        var signaturePad = new SignaturePad(canvas);

        document.getElementById('clear').addEventListener('click', function () {
            signaturePad.clear();
        });

        document.getElementById('save').addEventListener('click', function () {
            console.log('Please provide a signature first.');
            if (signaturePad.isEmpty()) {
                alert('Please provide a signature first.');
            } else {
                // Save the signature as an image or perform other actions
                var dataURL = signaturePad.toDataURL();
                document.getElementById('singater').value=dataURL;
                console.log(dataURL);
            }
        });
    });
</script>
</body>

</html>

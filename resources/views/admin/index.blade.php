<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
  <link rel="stylesheet" href="{{ URL::to('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendors/iconfonts/puse-icons-feather/feather.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ URL::to('vendors/css/vendor.bundle.addons.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
  <link rel="shortcut icon" href="{{ URL::to('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-6 mx-auto">
            <div class="auto-form-wrapper">
              <form  action="{{ route('login') }}" method="POST">
               {{ csrf_field() }}
				  <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input id="email" type="email" class="form-control" name="email"  placeholder="Username" value="{{ old('email') }}" required autofocus>                      @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif</div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                   <input id="password" type="password" class="form-control" name="password"  placeholder="*********" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif    
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                 
                 <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                 
              </form>
            </div>
             
             
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ URL::to('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ URL::to('vendors/js/vendor.bundle.addons.js') }}"></script>
  <script src="{{ URL::to('js/off-canvas.js') }}"></script>
  <script src="{{ URL::to('js/hoverable-collapse.html') }}"></script>
  <script src="{{ URL::to('js/misc.js') }}"></script>
  <script src="{{ URL::to('js/settings.html') }}"></script>
  <script src="{{ URL::to('js/todolist.html') }}"></script>
</body>
</html>
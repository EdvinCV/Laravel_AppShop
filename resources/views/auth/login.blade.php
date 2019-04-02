@extends('layouts.app')

@section('body-class','login-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Login</h4>
                        </div>
                            <div class="card-body">
                                <div class="input-group">
                        </div>
                        <div class="input-group">
                </div>
                
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input placeholder="Email..." id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password...">
                </div>
            
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="remember" id="remember" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }}> Remember me
                        <span class="form-check-sign">
                        <span class="check"></span>
                        </span>
                    </label>
                </div>
              
              </div>    
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-wd btn-lg btn-link"> Iniciar Sesion</button>
              </div>
                    <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
            </form>
          </div>
        </div>
      </div>
</div>

<footer class="footer">
    <div class="container">
    <nav class="float-left">
        <ul>
            <li>
                <a href="https://www.creative-tim.com">
                App-Shop
                </a>
            </li>
            <li>
              <a href="https://creative-tim.com/presentation">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
        </ul>
    </nav>
    <div class="copyright float-right">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script> Made by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
    </div>
    </div>
</footer>

@endsection

@extends('layouts.app')

@section('headSection')
<style>


a.hello:link, a.hello:visited {
  background-color: #1877F2;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}
a.he:link, a.he:visited {
  background-color:#182C39;
  color: white;
  padding: 12px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}

a.hell:link, a.hell:visited {
  background-color: #AC2925;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:10px;
  font-weight: normal;
}
a.hello:hover, a.hello:active {
  background-color:navy;
  display: inline-block;
}
a.he:hover, a.he:active {
  background-color:#0D2D3E;
  
  display: inline-block;
}
input[type=submit]:hover {
  background-color: #45a049;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 9px 16px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}


</style>

@endsection

@section('main-content')
<section class="hero-wrap hero-wrap-3" >
      <div class="overla"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Login</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
      <br>
             
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Login') }}</div>
                @if (session('status3'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status3') }}
                        </div>
                    @endif 
                    @if (session('status6'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status6') }}
                        </div>
                    @endif 
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('status1'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status1') }}
                        </div>
                    @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" >
                                  
                                </button>
                                <a href="{{ route('register') }}" name="hello" class="hello">
                                  Register
                                </a>
<br><br>
                                @if (Route::has('password.request'))
                                    <a class="he" name="he" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

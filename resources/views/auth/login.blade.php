@extends('admin.layout.sign_signup')
@section('content')
    <section id="content">
        <div class="main padder">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 m-t-large">
                    <section class="panel">
                        <header class="panel-heading text-center"> {{env('APP_NAME')}} </header>
                        <form id="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="panel-body">
                        @csrf
                            <div class="block"> <label class="control-label">Email</label> <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <em class="invalid-feedback" role="alert">
                                        {{ $errors->first('email') }}
                                    </em>
                                @endif
                            </div>
                            <div class="block"> <label class="control-label">Password</label>  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>  @if ($errors->has('password'))
                                    <em class="invalid-feedback" role="alert">
                                        {{ $errors->first('password') }}
                                    </em>
                                @endif</div>
                            <div class="checkbox"> <label> <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Keep me logged in </label> </div> <a
                                href="{{ route('password.request') }}" class="pull-right m-t-mini"><small>Forgot password?</small></a> <button type="submit"
                                class="btn btn-info">Sign in</button>
                           
                           
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section> <!-- footer -->
   
@endsection
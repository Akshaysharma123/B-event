
@extends('admin.layout.sign_signup')
@section('content')
    <section id="content">
        <div class="main padder">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 m-t-large">
                    <section class="panel">
                        <header class="panel-heading text-center">{{ __('Reset Password') }}</header>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}" class="panel-body">
                        @csrf
                            <div class="block"> <label class="control-label">{{ __('E-Mail Address') }}</label> <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <em class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </em>
                                @endif
                           
                            
                                <button type="submit" class="btn btn-info">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                           
                           
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section> <!-- footer -->
   
@endsection
@extends('admin.layout.sign_signup')
@section('content')
<section id="content">
    <div class="main padder">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 m-t-large">
                <section class="panel">
                    <header class="panel-heading text-center"> {{env('APP_NAME')}} </header>
                    <form id="form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="panel-body">
                    @csrf
                    <div class="block"> <label class="control-label">Name</label> 
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <em class="invalid-feedback" role="alert">
                                {{ $errors->first('name') }}
                            </em>
                        @endif
                        </div>
                        <div class="block"> <label class="control-label">Email</label>  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="block"> <label class="control-label">Password</label>  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>  @if ($errors->has('password'))
                                <em class="invalid-feedback" role="alert">
                                    {{ $errors->first('password') }}
                                </em>
                            @endif</div>
                            <div class="block"> <label class="control-label">Confirm Password</label>   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></div>
                         <a
                            href="{{ route('login') }}" class="pull-right m-t-mini"><small>Back to login</small></a> <button type="submit"
                            class="btn btn-info">Sign Up</button>
                       
                       
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
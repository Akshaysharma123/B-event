@extends('admin.layout.master')
@section('content')
<section id="content">
        <section class="main padder">
            <div class="clearfix">
                <h4><i class="fa fa-edit"></i>Profile</h4>
            </div>
            <div class="row">
            <div class="col-lg-12"> <!-- .breadcrumb --> <ul class="breadcrumb"> <li><a href="{{route('home')}}"><i class="fa fa-home"></i>&nbsp;Home</a></li> <li class="active">Profile</li> </ul> <!-- / .breadcrumb --> </div>
                <div class="col-sm-12 col-12 col-md-12">
                    <section class="panel">
                        <div class="panel-body">
                                @include('admin.include.alert')
                            <form class="form-horizontal profile" method="post"  action="{{route('profile')}}" >
                                @csrf
                                <div class="form-group"> <label class="col-lg-3 control-label">Name*</label>
                                    <div class="col-lg-8"> <input type="text" name="name" placeholder="Name"
                                            class="form-control" required value="{{Auth::user()->name}}" required> </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Email*</label>
                                    <div class="col-lg-8"> <input type="email" name="email" placeholder="Email Address"
                                            class="bg-focus form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"   value="{{Auth::user()->email}}" required>
                                            @if ($errors->has('email'))
                                            <em class="invalid-feedback" role="alert">
                                                {{ $errors->first('email') }}
                                            </em>
                                        @endif <div class="line line-dashed m-t-large"></div> </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3"> <button type="reset" class="btn btn-white">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save </button> </div>
                                    </div>
                            </form>
                               <form class="form-horizontal changepassword" method="post"  action="{{route('changepassword')}}" >
                                    @csrf
                                <div class="form-group {{ $errors->has('current_password') ? ' has-error' : '' }}"> <label class="col-lg-3 control-label">Current Password*</label>
                                    <div class="col-lg-8"> <input type="password" name="current_password" placeholder="Current Password"
                                            class="bg-focus form-control" required>
                                            @if ($errors->has('current_password'))
                                        <em class="help-block">
                                       {{ $errors->first('current_password') }}
                                        </em>
                                    @endif
                                      
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('new_password') ? ' has-error' : '' }}"> <label class="col-lg-3 control-label">New Password*</label>
                                    <div class="col-lg-8"> <input type="password" name="new_password" placeholder="New Password"
                                            class="bg-focus form-control " required minlength="6" maxlength="16" id="new_password">
                                            @if ($errors->has('new_password'))
                                            <em class="help-block">
                                            {{ $errors->first('new_password') }}
                                            </em>
                                        @endif
                                      
                                    </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Confirm Password*</label>
                                    <div class="col-lg-8"> <input type="password" name="confirm_password" placeholder="Confirm Password"
                                            class="bg-focus form-control" required>
                                            <div class="line line-dashed m-t-large"></div>
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3"> <button type="reset" class="btn btn-white">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save </button> </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    
                </div>
               
            </div>
        </section>
    </section> <!-- footer -->
@endsection
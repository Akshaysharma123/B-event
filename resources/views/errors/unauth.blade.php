@extends('layouts.errorlayout') @section('title','Error 404')
@section('content')<div class="content-header row">
      </div>
      <div class="content-body">@include('includes.alert')
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 p-0">
              <div class="card-header bg-transparent border-0">
                <h2 class="text-center mb-2">Unauthorized</h2>
                
                <h3 class="text-uppercase text-center">Unauthorized Access</h3>
              </div>
              <div class="card-content">
              <fieldset class="row py-2 text-center">
                  <div class="col-12">
                  <img src="{{asset('assets/images/err-img.png')}}" alt="Error" class="img-fluid text-center" style="height:100px">
                  </div>
                </fieldset>
                <div class="row py-2">
                  <div class="col-12 col-sm-6 col-md-6">
                  <a href="{{route('logout')}}" class="btn btn-danger btn-block" ><i class="ft-power"></i> Logout</a>
                   
                  </div>
                  <div class="col-12 col-sm-6 col-md-6">
                    <button type="button" class="btn btn-primary btn-block" onclick="window.history.go(-1); return false;" ><i class="ft-home"></i> Back to Home</button>
                  </div>
                 
                </div>
              </div>
              
            </div>
          </div>
        </section>
      </div>@endsection
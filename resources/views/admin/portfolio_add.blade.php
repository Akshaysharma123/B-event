@extends('admin.layout.master')
@section('externalcss')


<link rel="stylesheet" href="{{asset('admin_asset/fine-uploader/jquery.fileupload.css')}}">
<link rel="stylesheet" href="{{asset('admin_asset/fine-uploader/jquery.fileupload-ui.css')}}">
@endsection
@section('content')
<section id="content">
        <section class="main padder">
            <div class="clearfix">
                <h4><i class="fa fa-picture-o"></i>Portfolio Images</h4>
            </div>
            <div class="row">
            <div class="col-lg-12"> <!-- .breadcrumb --> <ul class="breadcrumb"> <li><a href="{{route('home')}}"><i class="fa fa-home"></i>&nbsp;Home</a></li> <li><i class="fa fa-picture-o"></i>&nbsp;Portfolio</li> <li class="active">Add New Portfolio Images</li> </ul> <!-- / .breadcrumb --> </div>
                <div class="col-sm-12 col-12 col-md-12">
                    <section class="panel">
                        <div class="panel-body">
                                @include('admin.include.alert')
                            <form class="form-horizontal portfolio" method="post" data-validate="parsley" action="{{route('portfolio.add')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                <div class="form-group"> <label class="col-lg-3 control-label">Event Name*</label>
                                    <div class="col-lg-8"> <input type="text" name="event_name" placeholder="Event Name"
                                             class="form-control"  required> </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Event Address</label>
                                    <div class="col-lg-8"> <input type="text" name="event_address" placeholder="Event Address"
                                             class="form-control"  > </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Date/Time</label>
                                    <div class="col-lg-8"> <input type="text" name="event_date" placeholder="Event Date Time"
                                             class="form-control datepic"  > </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Client's Feedback</label>
                                    <div class="col-lg-8"> <textarea rows="5" name="client_feedback" placeholder="Client Feedback " class="form-control"  ></textarea> </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Priority</label>
                                    <div class="col-lg-8"> <input type="number" max="100" min="0" name="priority" placeholder="Set Priority Number"
                                             class="form-control"  > </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Photo*</label>
                                    <div class="col-lg-9 media">
                                    <div id="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="banner" id="image-upload" />
                                          </div>
                                       
                                        </div>
                                    
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group"> <label class="col-lg-3 control-label">Additional Images</label>
                                                <div class="col-lg-9 media">
                                                <div id="image-preview">
                                                        <label for="image-upload" id="image-label">Multi File</label>
                                                        <input type="file" name="additionals[]" id="image-upload" multiple />

                                                      </div>
                                                   
                                                    </div>
                                                
                                            </div>
                                  
                                    
                                            
                                                                                       </div>
                                </div>
                               
                                
                                
                                <div class="form-group">
                                    <div class="col-lg-12 col-lg-offset-4"> <button type="reset" class="btn btn-white">Cancel</button>
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

@section('externaljs')




@endsection
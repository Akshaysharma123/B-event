@extends('admin.layout.master')
@section('content')
<section id="content">
        <section class="main padder">
            <div class="clearfix">
                <h4><i class="fa fa-bars"></i>Edit Sliders</h4>
            </div>
            <div class="row">
            <div class="col-lg-12"> <!-- .breadcrumb --> <ul class="breadcrumb"> <li><a href="{{route('home')}}"><i class="fa fa-home"></i>&nbsp;Home</a></li> <li><i class="fa fa-bars"></i>&nbsp;Sliders</li> <li class="active">Edit Slider Images</li> </ul> <!-- / .breadcrumb --> </div>
                <div class="col-sm-12 col-12 col-md-12">
                    <section class="panel">
                        <div class="panel-body">
                                @include('admin.include.alert')
                            <form class="form-horizontal sliders_edit" method="post" data-validate="parsley" action="{{route('slider.update',$slider->id)}}" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                
                                <div class="form-group"> <label class="col-lg-3 control-label">Name*</label>
                                    <div class="col-lg-8"> <input type="text" name="name" placeholder="Name"
                                             class="form-control"  value="{{$slider->name}}" required> </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Priority</label>
                                    <div class="col-lg-8"> <input type="number" max="100" min="0" name="priority" placeholder="Set Priority Number"
                                             class="form-control"  value="{{$slider->priority}}" > </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Main Text</label>
                                    <div class="col-lg-8"> <input type="text" maxlength="50" name="main_text" placeholder="Set Slider Main Text"
                                             class="form-control"  value="{{$slider->main_text}}" > </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Sub Text</label>
                                    <div class="col-lg-8"> <input type="text" maxlength="100"  name="sub_text" placeholder="Slider sub-text"
                                             class="form-control"   value="{{$slider->sub_text}}"> </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Photo*</label>
                                    <div class="col-lg-9 media">
                                    <div id="image-preview" style="background-image:url({{ asset('storage/uploads/slider/'.$slider->path) }});background-position:center center;background-size:cover">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="image" id="image-upload" />
                                          </div>
                                          <small>1100 x 733 px recommended</small>
                                        </div>
                                    
                                </div>
                               
                                
                                
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3"> <a href="{{route('slider.list')}}" type="reset" class="btn btn-white">Back</a>
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
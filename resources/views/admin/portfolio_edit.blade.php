@extends('admin.layout.master')
@section('content')
<section id="content">
        <section class="main padder">
            <div class="clearfix">
                <h4><i class="fa fa-picture-o"></i>Portfolio Images</h4>
            </div>
            <div class="row">
            <div class="col-lg-12"> <!-- .breadcrumb --> <ul class="breadcrumb"> <li><a href="{{route('home')}}"><i class="fa fa-home"></i>&nbsp;Home</a></li> <li><i class="fa fa-picture-o"></i>&nbsp;Portfolio</li> <li class="active">Edit Portfolio Images</li> </ul> <!-- / .breadcrumb --> </div>
                <div class="col-sm-12 col-12 col-md-12">
                    <section class="panel">
                        <div class="panel-body">
                                @include('admin.include.alert')


                                <div class="row">
                                    <div class="col-md-6">
                                          <form class="form-horizontal portfolio_edit" method="post"  action="{{route('portfolio.edit',$portfolio->id)}}" enctype="multipart/form-data">
                            @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group"> <label class="col-lg-3 control-label">Event Name*</label>
                                    <div class="col-lg-8"> <input type="text" name="event_name" placeholder="Event Name"
                                             class="form-control"  required value="{{$portfolio->event_name}}"> </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Event Address</label>
                                    <div class="col-lg-8"> <input type="text" name="event_address" placeholder="Event Address"
                                             class="form-control"  value="{{$portfolio->event_address}}"> </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Date/Time</label>
                                    <div class="col-lg-8"> <input type="text" name="event_date" placeholder="Event Date Time"
                                             class="form-control datepic" value="{{$portfolio->event_date?Carbon\Carbon::parse($portfolio->event_date)->format('d-m-Y'):null}}" > </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Client's Feedback</label>
                                    <div class="col-lg-8"> <textarea rows="5" name="client_feedback" placeholder="Client Feedback " class="form-control"  >{{$portfolio->client_feedback}}</textarea> </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Priority</label>
                                    <div class="col-lg-8"> <input type="number" max="100" min="0" name="priority" placeholder="Set Priority Number"
                                             class="form-control" value="{{$portfolio->priority}}" > </div>
                                </div>
                                <div class="form-group"> <label class="col-lg-3 control-label">Photo*</label>
                                    <div class="col-lg-9 media">
                                    <div id="image-preview" style="background-image:url({{ asset('storage/uploads/portfolio/'.$portfolio->banner) }});background-position:center center;background-size:cover">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="banner" id="image-upload" />
                                          </div>

                                        </div>

                                </div>

                                <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3"> <a href="{{route('portfolio.list')}}" class="btn btn-white">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Save </button> </div>
                                    </div>
                                </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form class="form-horizontal portfolio_edit_images" method="post" action="{{route('image.upload',$portfolio->id)}}" enctype="multipart/form-data">
                                                @csrf
                                                {{ method_field('PUT') }}

                                    <div class="form-group"> <label class="col-lg-3 control-label">Additional Images</label>
                                                <div class="col-lg-9 media">
                                                <div id="image-preview">
                                                        <label for="image-upload" id="image-label">Multi File</label>
                                                        <input type="file" name="additionals[]"  multiple  required/>

                                                      </div>

                                                    </div>

                                            </div>
                                            <div class="form-group">
                                                    <div class="col-lg-9 col-lg-offset-3"> <a href="{{route('portfolio.list')}}" class="btn btn-white">Cancel</a>
                                                        <button type="submit" class="btn btn-primary">Save </button>
                                                        @if(count($images)>0)
                                                        <button type="button" class="btn btn-danger delete_all_images"  data-url="{{ route('image.delete_all') }}">Delete All </button>
                                                        @endif
                                                         </div>
                                                </div>
                                        </form>
                                        @if(count($images)>0)
                                    <div class="table-responsive">

   <table class="table table-striped b-t text-small datatable">
      <thead>
         <tr>
            <th width="20"><input type="checkbox"></th>
            <th>Name</th>
            <th>Path</th>
            <th>Date</th>

            <th width="30"></th>
         </tr>
      </thead>
      <tbody>
      @foreach($images as $image)
         <tr id="tr_{{$image->id}}">
            <td><input type="checkbox" class="sub_chk" data-id="{{$image->id}}"  name="post[]" value="{{$image->id}}"></td>

            <td><a href="{{route('portfolio.download',$image->id)}}" class="demo_img" title="{{$image->path}}">
 {{$image->name}}
 <div><img style="max-width:145px" src="{{ asset('storage/uploads/portfolio/additionals/'.$image->path) }}" alt="{{$image->path}}" /></div>
</a></td>
            <td>{{$image->path}}</td>
            <td>{{$image->created_at?Carbon\Carbon::parse($image->created_at)->format('d-m-Y'):""}}</td>


            <td class="text-right"> <div class="btn-group"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil text-info"></i></a> <ul class="dropdown-menu pull-right">  <li><a href="{{route('image.delete',$image->id)}}" >Delete</a></li> <li><a href="{{route('image.download',$image->id)}}" >Download</a></li></ul> </div> </td>

         </tr>
         @endforeach

      </tbody>
   </table>
</div>
@endif

                                                                                       </div>
                                </div>



                        </div>
                    </section>

                </div>

            </div>
        </section>
    </section> <!-- footer -->
@endsection
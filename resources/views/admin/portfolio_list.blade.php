@extends('admin.layout.master')
@section('content')
<section id="content">
        <section class="main padder">
            <div class="clearfix">
                <h4><i class="fa fa-bars"></i>Portfolio Images List</h4>
            </div>
            <div class="row">
            <div class="col-lg-12"> <!-- .breadcrumb --> <ul class="breadcrumb"> <li><a href="{{route('home')}}"><i class="fa fa-home"></i>&nbsp;Home</a></li> <li><i class="fa fa-picture-o"></i>&nbsp;Portfolio</li> <li class="active">Portfolio Images List</li> </ul> <!-- / .breadcrumb --> </div>
                <div class="col-sm-12 col-12 col-md-12">
                @include('admin.include.alert')
                <section class="panel">
                
   <header class="panel-heading"> Portfolio Images List </header>
   <div class="panel-body">
      <div class="row text-small">
         <div class="col-sm-6 m-b-mini">
         <div class="btn-group"> <label > <a class="btn btn-sm btn-primary" href="{{route('portfolio.add')}}">Add New</a></label> <label > <button type="button" class="btn btn-sm btn-danger delete_all"  data-url="{{ route('portfolio.delete_all') }}">Detele Selected</button></label>  </div>
           
         </div>
         
         <div class="col-sm-6">
            <form action="{{route('portfolio.list')}}" methd="GET" role="form">
            <div class="input-group"> <input type="search" class="input-sm form-control" placeholder="Search" name="search" value="{{request('search')}}"> <span class="input-group-btn"> <button class="btn btn-sm btn-white" type="submit" title="Search">Go!</button><a class="btn btn-sm btn-white" href="{{route('portfolio.list')}}" title="Reset"><i class="fa fa-refresh"></i></a> </span> </form></div>
         </div>
      </div>
   </div>
   <div class="table-responsive">
   
      <table class="table table-striped b-t text-small datatable">
         <thead>
            <tr>
               <th width="20"><input type="checkbox"></th>
               <th>@sortablelink('event_name','E.Name')</th>
               <th>@sortablelink('event_address','Address')</th>
               <th>@sortablelink('event_date','E.Date')</th>
               <th>@sortablelink('priority','Priority')</th>
               <th>Banner</th>
               <th>@sortablelink('created_at','Upload Date')</th>
               <th width="30"></th>
            </tr>
         </thead>
         <tbody>
         @foreach($images as $image)
            <tr id="tr_{{$image->id}}">
               <td><input type="checkbox" class="sub_chk" data-id="{{$image->id}}"  name="post[]" value="{{$image->id}}"></td>
               <td><a href="{{route('portfolio.edit',$image->id)}}">{{$image->event_name}}</a></td>
               <td>{{$image->event_address}}</td>
               <td>{{$image->event_date?Carbon\Carbon::parse($image->event_date)->format('d-m-Y'):""}}</td>
               <td>{{$image->priority?$image->priority:0}}</td>
               <td><a href="{{route('portfolio.download',$image->id)}}" class="demo_img" title="{{$image->banner}}">
	{{$image->banner}}
	<div><img src="{{ asset('storage/uploads/portfolio/'.$image->banner) }}" alt="{{$image->banner}}"  style="max-width:145px"/></div>
</a></td>
               <td>{{Carbon\Carbon::parse($image->created_at)->format('d-m-Y')}}</td>
               <td class="text-right"> <div class="btn-group"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil text-info"></i></a> <ul class="dropdown-menu pull-right"> <li><a href="{{route('portfolio.edit',$image->id)}}">Edit</a></li> <li><a href="{{route('portfolio.delete',$image->id)}}" >Delete</a></li> <li><a href="{{route('portfolio.download',$image->id)}}" >Download</a></li></ul> </div> </td>
              
            </tr>
            @endforeach
          
         </tbody>
      </table>
   </div>
   <footer class="panel-footer">
      <div class="row">
        
         <div class="col-sm-6 text-left"> @if ($images->firstItem())<small class="text-muted inline m-t-small m-b-small">{{trans('pagination.showing' ,['first' => $images->firstItem(), 'last' => $images->lastItem(), 'total' => $images->total()] )}}</small> @endif</div>
         <div class="col-sm-6 text-right text-center-sm">
               @if ($images->firstItem())
            {!! $images->appends(request()->except('page'))->links() !!}
            @endif
         </div>
      </div>
   </footer>

</section>
                    
                </div>
               
            </div>
        </section>
    </section> <!-- footer -->
@endsection
@extends('admin.layout.master')
@section('content')
<section id="content">
        <section class="main padder">
            <div class="row">
                <div class="col-lg-12">
                    <section class="toolbar clearfix m-t-large m-b"><a href="{{route('slider.add')}}"
                            class="btn btn-info btn-circle active"><i class="fa fa-bars"></i>Add Sliders<b class="badge bg-info"><i
                                    class="fa fa-plus"></i></b></a>
                                    <a href="{{route('portfolio.add')}}"
                            class="btn btn-info btn-circle active"><i class="fa fa-picture-o"></i>Add Portfolios<b class="badge bg-info"><i
                                    class="fa fa-plus"></i></b></a>
                                     <a href="{{route('slider.list')}}"
                            class="btn btn-primary btn-circle active"><i class="fa fa-bars"></i>Sliders List</a>
                             <a
                            href="{{route('portfolio.list')}}" class="btn btn-success btn-circle"><i class="fa fa-picture-o"></i>Portfolio List</a> 
                                
                    </section>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <!-- easypiechart -->
                        <div class="col-xs-6">
                        <section class="panel text-center"> <div class="panel-body"> <a class="btn btn-circle btn-twitter btn-lg" href="{{route('slider.list')}}"><i class="fa fa-bars"></i></a> <div class="h4">SLIDERS</div> <div class="line m-l m-r"></div> <h4 class="text-success"><strong>{{$sliders}}</strong></h4> <small></small> </div> </section>
                        </div>
                        <div class="col-xs-6">
                        <section class="panel text-center"> <div class="panel-body"> <a class="btn btn-circle btn-facebook btn-lg" href="{{route('portfolio.list')}}"><i class="fa fa-picture-o"></i></a> <div class="h4">PORTFOLIOS</div> <div class="line m-l m-r"></div> <h4 class="text-info"><strong>{{$portfolios}}</strong></h4> <small></small> </div> </section>
                        </div> <!-- easypiechart end-->
                    </div>
                    
                </div>
               
            </div>
           
            
        </section>
    </section> 
    @endsection
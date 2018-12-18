@extends('layouts.admin_layout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">View Categories</a> </div>
            <h1>Slider Table</h1>
        </div>
        <div class="container-fluid">
            <hr>
            @if(Session::has('flash_message_error'))
                <div class="alert alert danger" role="alert">{!!Session('flash_message_error')!!}</div>
            @endif
            @if(Session::has('flash_message_success'))
                <div class="alert alert success" role="alert">{!!Session('flash_message_success')!!}</div>
            @endif

            <div class="row-fluid">
                <div class="span12">

                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>Data table</h5>
                            <div class="fr"> <a href="{{url('/admin/add_slider')}}" class="btn btn-success">Add_New</a></div>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Slide</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                <tr class="gradeX">
                                    <td style="font-weight: bold">{{$slider->id}}</td>
                                    <td>
                                        <img style="width: 500px; height: 400px" src="{{asset('/images/back_end/slider/large/'.$slider->image)}}" alt="">
                                    </td>
                                    <td class="center">
                                        <a href="{{url('/admin/edit_slider/'.$slider->id)}}"  class="btn btn-primary btn-mini">Edit</a>
                                        <a href="{{url('/admin/delete_slider/'.$slider->id)}}" id="delCat" class="btn btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                               @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="widget-content">

        </div>
@endsection
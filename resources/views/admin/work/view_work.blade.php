@extends('layouts.admin_layout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">View Categories</a> </div>
            <h1>Group Table</h1>
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
                            <div class="fr"> <a href="{{url('/admin/add_work')}}" class="btn btn-success">Add_New</a></div>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($works as $work)
                                    <tr class="gradeX">
                                        <td>{{$work->id}}</td>
                                        <td>{{$work->title}}</td>
                                        <td><p>{{$work->desc}}</p></td>
                                        <td>
                                            <img style="width: 200px; height: 200px" src="{{asset('/images/back_end/works/large/'.$work->image)}}" alt="">
                                        </td>
                                        <td>
                                            <div class="fr">
                                                <a href="{{url('/admin/edit_work',$work->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                                <a href="{{url('/admin/delete_work',$work->id)}}"  id="delCat" class="btn btn-danger btn-mini">Delete</a>
                                            </div>
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

@endsection
@extends('layouts.admin_layout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">View Categories</a> </div>
            <h1>About Table</h1>
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
                            <div class="fr"> <a href="{{url('/admin/add_about')}}" class="btn btn-success">Add_New</a></div>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($about as $abo)
                                    <tr class="gradeX">
                                        <td>{{$abo->id}}</td>
                                        <td>{{$abo->title}}</td>
                                        <td><p>{{$abo->desc}}</p></td>
                                        <td>
                                            <div class="fr">
                                                <a href="{{url('/admin/edit_about',$abo->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                                <a href="{{url('/admin/delete_about',$abo->id)}}"  id="delCat" class="btn btn-danger btn-mini">Delete</a>
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
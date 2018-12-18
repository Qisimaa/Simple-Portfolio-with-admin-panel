@extends('layouts.admin_layout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
            <h1>Add Slider</h1>
        </div>
        <div class="container-fluid"><hr>

            @if(Session::has('flash_message_error'))
                <div class="alert alert danger" role="alert">{!!Session('flash_message_error')!!}</div>
            @endif
            @if(Session::has('flash_message_success'))
                <div class="alert alert danger" role="alert">{!!Session('flash_message_success')!!}</div>
            @endif

            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Security validation</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form  enctype="multipart/form-data" class="form-horizontal" method="post" action="{{url('/admin/add_slider')}}" name="add_product" id="add_product" novalidate="novalidate">
                                {{csrf_field()}}

                                <div class="control-group">
                                    <label class="control-label">Upload Slide</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image"/>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <input type="submit" value="ADD" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
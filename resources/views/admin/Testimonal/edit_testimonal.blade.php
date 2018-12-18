@extends('layouts.admin_layout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
            <h1>Edit Product</h1>
        </div>
        <div class="container-fluid"><hr>

            @if(Session::has('flash_message_error'))
                <div class="alert alert danger" role="alert">{!!Session('flash_message_error')!!}</div>
            @endif
            @if(Session::has('flash_message_success'))
                <div class="alert alert success" role="alert">{!!Session('flash_message_success')!!}</div>
            @endif

            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Security validation</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{url('/admin/edit_testimonal/'.$team->id)}}" name="edit_product" id="edit_prodcut" novalidate="novalidate">
                                <div class="control-group"> {{csrf_field()}}
                                    <label class="control-label">Full Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name" value="{{$team->FName}}" />
                                        <span id="chkPwd"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Status</label>
                                    <div class="controls">
                                        <input type="text" name="status" id="status" value="{{$team->status}}"/>
                                        <span id="chkPwd"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="desc" id="desc" cols="30" rows="10">{{$team->desc}}</textarea>
                                        <span id="chkPwd"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                        <label class="control-label">File upload input</label>
                                        <div class="controls">
                                            <input type="file" name="image" id="image"/>
                                            <input type="hidden" name="current_image" id="current_image" value="{{$team->image}}"/>
                                            <img src="{{asset('/images/back_end/testimonal/large/'.$team->image)}}" style="width: 100px;height: 100px;">
                                        </div>
                                    </div>

                                <div class="form-actions">
                                    <input type="submit" value="Edit" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
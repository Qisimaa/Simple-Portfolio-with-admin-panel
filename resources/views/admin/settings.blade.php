@extends('layouts.admin_layout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
        <h1>Admin Settings</h1>
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
                            <form class="form-horizontal" method="post" action="{{url('/admin/update_pwd')}}" name="password_validate" id="password_validate" novalidate="novalidate">
                                <div class="control-group"> {{csrf_field()}}
                                    <label class="control-label">Current Password</label>
                                    <div class="controls">
                                        <input type="password" name="current_pwd" id="current_pwd" />
                                        <span id="chkPwd"></span>
                                    </div>
                                </div><div class="control-group">
                                    <label class="control-label">New Password</label>
                                    <div class="controls">
                                        <input type="password" name="new_pwd" id="new_pwd" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Confirm password</label>
                                    <div class="controls">
                                        <input type="password" name="confirm_pwd" id="confirm_pwd" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Update" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection
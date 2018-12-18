<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/back_end/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back_end/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back_end/full_calendar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back_end/colorpicker.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back_end/datepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back_end/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back_end/uniform.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back_end/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/back_end/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/back_end/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/back_end/jquery.gritter.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('layouts.admin_layout.admin_header')
@include('layouts.admin_layout.admin_sidebar')
@yield('content')
@include('layouts.admin_layout.admin_footer')
<script src="{{asset('js/back_end/jquery.min.js')}}"></script>
<script src="{{asset('js/back_end/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/back_end/bootstrap.min.js')}}"></script>
<script src="{{asset('js/back_end/jquery.uniform.js')}}"></script>
<script src="{{asset('js/back_end/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/back_end/select2.min.js')}}"></script>
<script src="{{asset('js/back_end/jquery.validate.js')}}"></script>
<script src="{{asset('js/back_end/matrix.js')}}"></script>
<script src="{{asset('js/back_end/matrix.form_validation.js')}}"></script>
<script src="{{asset('js/back_end/matrix.tables.js')}}"></script>
<script src="{{asset('js/back_end/matrix.popover.js')}}"></script>

</body>
</html>
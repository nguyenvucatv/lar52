<!DOCTYPE html>
<html lang="en">    
    <head>    
        <meta charset="utf-8" />
        <title>Nguyen Vu | @yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <link href="{{ url('admin/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />

        {{-- Datatable --}}
        <link href="{{ url('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
       
        <link href="{{ url('admin/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ url('admin/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        
        <link href="{{ url('admin/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/layouts/layout2/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ url('admin/layouts/layout2/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ url('admin/apps/css/myapp.css') }}" rel="stylesheet" type="text/css" />
        
        @yield('style')

        <link rel="shortcut icon" href="favicon.ico" /> 
        <script src="{{ url('admin/global/plugins/jquery.min.js') }}" type="text/javascript"></script>

    </head>
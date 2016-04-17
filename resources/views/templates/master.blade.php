<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulooz</title>
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
  <div id="wrapper">
    @include('templates.sidebar')
    <div id="page-wrapper" class="gray-bg dashbard-1">
      @include('templates.header')
      <div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-3">
          <h2>Welcome Admin</h2>
          <small>You have 42 messages and 6 notifications.</small>
        </div>
    </div>

    <script src="{{url('assets/js/jquery-2.1.1.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{url('assets/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{url('assets/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{url('assets/js/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{url('assets/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{url('assets/js/demo/peity-demo.js')}}"></script>
    <script src="{{url('assets/js/inspinia.js')}}"></script>
    <script src="{{url('assets/js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/gritter/jquery.gritter.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('assets/js/demo/sparkline-demo.js')}}"></script>
    <script src="{{url('assets/js/plugins/chartJs/Chart.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/toastr/toastr.min.js')}}"></script>



</body>
</html>

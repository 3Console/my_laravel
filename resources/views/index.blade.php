<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    @include('header')
    @include('sidebar')
    @yield('content')
            <!-- jQuery -->
            <script src="assets/js/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="assets/js/bootstrap.min.js"></script>
    
            <!-- Metis Menu Plugin JavaScript -->
            <script src="assets/js/metisMenu.min.js"></script>
    
            <!-- Custom Theme JavaScript -->
            <script src="assets/js/startmin.js"></script>
            @yield('script')
</body>
</html>
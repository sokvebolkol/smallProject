<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- Material icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- Datatables --}}
    <link rel="stylesheet" href="{{asset('datatables/dataTables.bootstrap4.min.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body class="backgound_color">
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
{{-- Datatable JS --}}
<script src="{{asset('datatables/jquery.dataTables.js')}} "></script>
<script src="{{asset('datatables/dataTables.bootstrap4.min.js')}} "></script>
<script src="{{asset('datatables/dataTables-demo.js')}} "></script>
</html>
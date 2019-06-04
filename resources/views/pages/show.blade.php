@extends('layout.template')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-4">
            <table id="dataTable" class="table table-bordered text-center shadow-lg p-3 mb-5 bg-white rounded">
                <thead class="bg-info">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)                   
                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['email']}}</td>   
                        <td>
                            <a href="#"><i class="material-icons text-primary">edit</i></a>    
                            <a href="#"><i class="material-icons text-danger">delete</i></a>    
                            <a href="#"><i class="material-icons text-info">visibility</i></a>    
                        </td>                
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
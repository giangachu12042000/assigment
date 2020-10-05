@extends('layout.index')

@section('title','danh sách sinh viên')
@section('header','Danh sách sinh viên')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h3 class="m-right-14">Danh sách sinh viên </h3>
            </div>
            <div class="col-md-11">
                <table class="table ">
                    <thead>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Active</th>
                    </thead>
                    <tbody>
                            @foreach($students as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->age}}</td>
                                    <td>{{$item->gender == 1 ? 'nam' : 'nu'}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->is_active == 1 ? 'yes' : 'no'}}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

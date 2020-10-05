@extends('layout.index')

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
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->active}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
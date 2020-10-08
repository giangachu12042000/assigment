@extends('layout.index')
@section('header-content','chi tiet sinh vien')
@section('content')
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
@endsection
@extends('layout.index')

@section('title','danh sách sinh viên')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @section('header','Danh sách sinh viên')
        </div>
        <div class="col-md-2">
            sidebaer
        </div>
        <div class="col-md-10">
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
@endsection

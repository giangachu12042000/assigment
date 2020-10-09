@extends('layout.index')

@section('title','danh sách sinh viên')
@section('header','Danh sách sinh viên')
@section('header-content','Danh sách sinh viên ')

@section('content')
    
    <table class="table ">
        <thead>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Active</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($students as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->gender == 1 ? 'nam' : 'nu'}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->is_active == 1 ? 'yes' : 'no'}}</td>
                    <td>
                        <form action="{{route('students.destroy',$item->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">del</button>
                        </form>
                    </td>
                    <td><a href="{{route('students.edit',$item->id)}}" >edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

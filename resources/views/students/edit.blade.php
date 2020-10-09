@extends('layout.index')
@section('header-content','Sửa thông tin học sinh')
@section('content')
    <form action="{{route('students.update',$student->id)}}" method="POST" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" id="name" class="form-control" name="name" value="{{$student->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">address</label>
            <input type="text" class="form-control" name="address" id="exampleInputEmail1" value="{{$student->address}}" placeholder="nhap address">
        </div>
        <div class="form-group">
            <label for="age">age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="nhap tuoi" value="{{$student->age}}">
        </div>
        <div class="form-group">
            <label >gender</label>
            <input
                type="radio" class="form-control" name="gender" value="0"
                {{$student->gender === 0 ? 'checked' : ''}}
            >
            <input 
                type="radio" class="form-control" name="gender" value="1"
                {{$student->gender === 1 ? 'checked' : ''}}
            >
        </div>
        <div class="form-group">
            <label >status</label>
            <input 
                type="radio" class="form-control" name="is_active"
                value="0" {{$student->is_active == 0 ? 'checked' : ''}}
            >
            <input 
                type="radio" class="form-control" name="is_active"
                value="1" {{$student->is_active == 1 ? 'checked' : ''}}
            >
        </div>
        <button type="submit">update</button>
    </form>
@endsection

@extends('layout.index')
@section('header-content','thêm học sinh')
@section('content')
    <form action="{{route('students.store')}}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" id="name" class="form-control" name="name" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">address</label>
            <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="nhap address">
        </div>
        <div class="form-group">
            <label for="age">age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="nhap tuoi">
        </div>
        <div class="form-group">
            <label >nam</label>
            <input
                type="radio" class="form-control" name="gender" value="0"
            >
            <label >nu</label>
            <input 
                type="radio" class="form-control" name="gender" value="1"
            >
        </div>
        <div class="form-group">
            <label >no active</label>
            <input 
                type="radio" class="form-control" name="is_active" value="0"
            >
            <label >yes active</label>
            <input
                type="radio" class="form-control" name="is_active" value="1"
            >
        </div>
        <button type="submit">thêm</button>
    </form>
@endsection

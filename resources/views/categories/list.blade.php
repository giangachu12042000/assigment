@extends('layout.index')

@section('title','danh sách sinh viên')
@section('header','Danh sách sinh viên')
@section('header-content','Danh sách categories ')

@section('content')
    
    <table class="table ">
        <thead>
            <th>name</th>
            <th>status</th>
            <th>total: {{$total}}</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                     <td>{{$category->name}}</td>
                     <td>
                        {{$category->status}}
                     </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2">{{$categories->links()}}</td>
            </tr>
        </tbody>
    </table>
@endsection

@extends('layout.index')

@section('title','danh sách sinh viên')
@section('header','Danh sách sinh viên')
@section('header-content','Danh sách posts ')

@section('content')
    
    <table class="table ">
        <thead>
            <th>desc</th>
            <th>image</th>
             <th>author</th>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                     <td>{{$post->desc}}</td>
                     <td>
                        <img src="{{$post->image_url}}" alt="" with="100px">
                     </td>
                     @foreach($students as $student)
                        @if($student->id == $post->student_id)
                            <td>{{$student->name}}</td>
                        @endif
                     @endforeach
                </tr>
            @endforeach
            <tr>
                <td colspan="2">{{$posts->links()}}</td>
            </tr>
        </tbody>
    </table>
@endsection

@extends('layout.index')

@section('title','danh sách sinh viên')
@section('header','Danh sách sinh viên')
@section('header-content','Danh comments  ')

@section('content')
    
    <table class="table ">
        <thead>
            <th>content</th>
            <th>desc</th>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                     <td>{{$comment->content}}</td>
                     @foreach($posts as $post)
                        @if($post->id == $comment->post_id)
                            <td>{{$post->desc}}</td>
                        @endif
                     @endforeach
                </tr>
            @endforeach
            <tr>
                <td colspan="2">{{$comments->links()}}</td>
            </tr>
        </tbody>
    </table>
@endsection

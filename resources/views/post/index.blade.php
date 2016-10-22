@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div style="float:left;"><h4>我的文章列表</h4></div>

            <div class="index_btn" >
                <a class="btn btn-primary" href="/post/create">新建文章</a>
            </div>
        </div>
        <hr/>
        <div>
            <table id="mytable" class="table table-bordered text-center">
                <thead>
                <tr>
                    <th style="min-width:250px;">title</th>
                    <th>subtitle</th>
                    <th>author</th>
                </tr>
                </thead>

                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><a href="/post/{{$post->id}}/show">{{$post->title}}</a></td>
                        <td>{{$post->subtitle}}</td>
                        @if(App\User::where('id',$post->user_id)->first())
                            <td>{{App\User::where('id',$post->user_id)->first()->name}}</td>
                        @else
                            <td></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
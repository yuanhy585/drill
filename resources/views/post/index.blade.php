@extends('layout')

@section('content')
    <div class="container">
        <form role="form">
            <div class="row">
                <h4 style="padding-left:15px;">我的文章列表</h4>
                <br/>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">
                    搜索
                </button>
                <div style="float:right;padding-right:20px;">
                    <a class="btn btn-primary" href="/post/create">新建文章</a>
                </div>
            </div>
        </form>
    </div>
    <hr/>

    <div class="container">
        <div>
            <table id="mytable" class="table table-bordered text-center">
                <thead>
                <tr>
                    <th style="min-width:250px;">title</th>
                    <th>subtitle</th>
                    <th>author</th>
                    <th style="width:150px;">operation</th>
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
                        <td>
                            <a class="btn btn-info" href="/post/{{$post->id}}/edit">编辑</a>
                            <a class="btn btn-danger" href="/post/{{$post->id}}/delete">删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </div>
@endsection
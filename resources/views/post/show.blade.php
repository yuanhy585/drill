@extends('layout')

@section('content')
<div class="container">
    <div class="col-md-12">
        <button class="btn btn-md-info" style="float:right;margin:20px;">
            <a href="/post">返回文章列表</a>
        </button>
    </div>

    <div class="article">
        <h2 align="center">{{$post->title}}</h2>
        <div class="form-group col-md-12">
            <div>
                <h5>摘要：{{$post->subtitle}}</h5>
            </div>
        </div>


        <div class="form-group col-md-12">
            <h5>作者：{{App\User::where('id',$post->user_id)->first()->name}}</h5>
        </div>

        <div class="form-group col-md-12">
            <h5>创建时间：{{$post->created_at}}</h5>
        </div>

        <div class="form-group col-md-12">文章内容：{{$post->content}}</div>
    </div>

    @include('post.comment')
</div>
@endsection
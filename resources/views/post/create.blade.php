@extends('layout')

@section('content')
<div class="container">
    <form action="/post/store" method="post">
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
        <div class="col-md-12">
            <h3>添加新文章</h3>
            <input type="text" name="title" class="form-control" />
        </div>

        <div class="col-md-12">
            <h3>摘要</h3>
            <input type="text" name="subtitle" class="form-control" />
        </div>

        {{--<div class="col-md-12">--}}
            {{--<h3>上传图片</h3>--}}
            {{--<input type="file" name="picture" id="inputfile" />--}}
        {{--</div>--}}

        <div class="col-md-12">
            <h3>文章内容</h3>
            <textarea cols="120" rows="10" name="content" noresize="noresize"></textarea>
            <br/><br/>
        </div>

        <div class="col-md-12">
            <button class="btn btn-lg btn-primary">提交</button>
            <button class="btn btn-lg btn-danger">取消</button>
        </div>
    </form>
</div>
@endsection
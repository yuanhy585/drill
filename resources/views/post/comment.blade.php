
<div class="col-md-12">
    <h4>所有评论</h4><br/>
    <div class="comments">
        @foreach($post->comments as $comment)
            <div style="background:#ccc;width:100%;height:20px;"></div><br/>
            <div>{{$comment->comment}}</div>
        @if(Auth::user()->id == $comment->user_id)
            <a class="btn btn-sm btn-danger" style="float:right;" href="/comments/{{$comment->id}}/delete">删除评论</a><br/><br/>
            @endif
            <div style="float:right;">
                <span>评论人:{{App\User::where('id', $comment->user_id)->first()->name}}</span>
                <span>创建时间：{{$comment->created_at}}</span>
            </div>
            <hr/>
        @endforeach
    </div>
</div>



<div class="col-md-12">
    <form role="form" action="/comments" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="hidden" name="post_id" value="{{$post->id}}" />
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />

        <div class="commentadd">
            <div class="form-group">
                <h5>添加评论：</h5>
                <textarea cols="135" rows="10" name="comment" noresize="noresize"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">提交评论</button>
    </form>
</div>

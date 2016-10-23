<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function getPostList(Request $request)
    {
        $user_id = $request->get('user_id');
        $count = User::where('id', $user_id)->count();

        if($count == 0)
        {
            $rtn = 101;
            $message = "无此人信息，无法登录";
            $response = ['code'=>$rtn, 'message'=>$message, 'data'=>[]];
        }
        else
        {
            $datas = array();

            $posts = DB::table('posts')->get();
            if($posts)
            {
                foreach($posts as $post)
                {
                    $data['id']=$post->id;
                    $data['title']=$post->title;
                    $data['subtitle']=$post->subtitle;
                    $data['content']=$post->content;

                    $datas[] = $data;
                }

                $rtn = 100;
                $message = "信息获取成功";
                $response = ['code'=>$rtn, 'message'=>$message, 'data'=>$datas];
            }

        }

        return response()->json($response);
    }
}

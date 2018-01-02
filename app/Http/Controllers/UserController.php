<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //单动作控制器指定方法：get:指定路由时，不需要指定方法，直接调用
//    public function __invoke()
//    {
//        // TODO: Implement __invoke() method.
//    }
    public function __construct()
    {
        $this->middleware('token');
    }

    public function updata($id){
        echo $id;
    }

    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    /**
     * 展示给定用户的个人主页
     *
     * @param  int  $id
     * @return Response
     */
}

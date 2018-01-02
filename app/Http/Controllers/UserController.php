<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //单动作控制器指定方法：get:指定路由时，不需要指定方法，自调用__invoke
//    public function __invoke()
//    {
//
//    }
    //构造函数
    public function __construct()
    {
//        $this->middleware('token');
    }

    public function updata($id){
        echo $id;
    }

    public function show($id)
    {
        echo $id;
//        return view('user.profile', ['user' => user::findOrFail($id)]);
    }

    /**
     * 展示给定用户的个人主页
     *
     * @param  int  $id
     * @return Response
     */
}

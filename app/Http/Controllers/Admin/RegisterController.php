<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Seller;

class RegisterController extends Controller
{
    public function register(){
        return view('admin.register.register');
    }
    //入库
    public function success(Request $request){
       $data = $request->input();
       $userinfo =Seller::where(['seller_name'=>$data['seller_name']])->first();
       if($data['seller_name']==$userinfo['seller_name']){
            $data = [
                'code'=>'401',
                'message'=>'商家已存在,请直接登录',
                'data'=>[],
            ];
            return json_encode($data,JSON_UNESCAPED_UNICODE);
       }else{
           $res = Seller::insert($data);
           $data = [
               'code'=>'200',
               'message'=>'success',
               'data'=>[],
           ];
           return json_encode($data,JSON_UNESCAPED_UNICODE);
       }
    }

    public function index(){
        return view('admin.register.index');
    }
}
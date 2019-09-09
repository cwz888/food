<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Seller;
use Illuminate\Support\Facades\Cache;
class LoginController extends Controller
{
    public function sellerLogin(){
        return view('admin.login.sellerlogin');
    }

    public function sellerLogin_do(Request $request){
        $data = $request->input();

        $userinfo=Seller::where(['seller_name'=>$data['seller_name']])->first();
        if($data['seller_name']==$userinfo['seller_name'] && $data['seller_pwd']==$userinfo['seller_pwd']){
            $token=md5($data['seller_name'].$data['seller_pwd'].time());
            //token入库
            $res = Seller::where(['seller_name'=>$data['seller_name']])->update(['token'=>$token]);
            $arr=['seller_id'=>$userinfo['seller_id'],'seller_name'=>$userinfo['seller_name'],'seller_pwd'=>$userinfo['seller_pwd'],'token'=>$userinfo['token']];
             $data =[
                 'code'=>200,
                 'message'=>'success',
                 'data'=>$arr,
             ];
            return json_encode($data,JSON_UNESCAPED_UNICODE);
        }else{
            $data =[
                'code'=>201,
                'message'=>'用户名或密码错误',
                'data'=>[],
            ];
            return json_encode($data,JSON_UNESCAPED_UNICODE);
        }

    }

    public function userLogin(){
        return view('admin.login.userlogin');
    }
}
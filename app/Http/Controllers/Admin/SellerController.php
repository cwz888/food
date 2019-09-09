<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Seller;

class SellerController extends Controller
{
    //商户展示
    public function list()
    {
        // echo 1;
        $data = Seller::get();
        // dd($data);
        return view('admin.seller.list',['data'=>$data]);
    }

    

    //删除
    public function del($id){
        $res = Seller::where('user_id',$id)->delete();
        if ($res) {
            return \redirect('seller/list');
        }
    }


    // 人个信息
    public function personage(){
        // echo 1;
        //设置一个假的token  根据token查询商户信息
        $token = '122';
        $data = Seller::where('token',$token)->first();
        $data = \json_decode($data);
        // dd($data);

        return view('admin.seller.personage',['data'=>$data]);

    }


    // 个人信息修改
    public function update(Request $request){
        // echo 1;
        $data = $request->input();
        // dd($data);
        Seller::where('seller_id',$data['seller_id'])->update($data);

    }
}

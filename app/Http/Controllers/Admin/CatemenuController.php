<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Catemenu;

class CatemenuController extends Controller
{
    // 添加展示页面
    public function add()
    {
        // echo 1;
        return view('cetemeun.add');
    }

    // 执行添加页面
    public function adddo(Request $request)
    {
        // echo 2;
        // 接收所有值
        $data = $request->input();
        // dd($data);
        // 把值入库
        $res = Catemenu::create($data);
        if ($res) {
            return \json_encode(['code' => 200, 'msg' => '添加成功'], JSON_UNESCAPED_UNICODE);
        } else {
            return \json_encode(['code' => 400, 'msg' => '添加失败'], JSON_UNESCAPED_UNICODE);
        }
    }

    // 列表展示页面
    public function list()
    {
        $data = Catemenu::get();
        // dd($data);
        return view('cetemeun.list',['data'=>$data]);
    }
}

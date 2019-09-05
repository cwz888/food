<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Catemenu;

class CatemenuController extends Controller
{
    public function add()
    {
        // echo 1;
        return view('cetemeun.add');
    }
    public function adddo(Request $request)
    {
        // echo 2;
        $data = $request->input();
        // dd($data);
        $res = Catemenu::create($data);
        return \json_encode(['code' => 200, 'msg' =>'添加成功'], JSON_UNESCAPED_UNICODE);
        
    }
}

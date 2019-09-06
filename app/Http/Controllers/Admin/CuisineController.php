<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catemenu;
class CuisineController extends Controller
{
     //菜品添加页面
    public function add()
    {
    	//查找分类
    	$data=Catemenu::get()->toArray();
        return view('cuisine/add',['data'=>$data]);
    }
}

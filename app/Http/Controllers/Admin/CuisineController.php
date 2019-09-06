<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catemenu;
use App\Model\Menu;
class CuisineController extends Controller
{
     //菜品添加页面
    public function add()
    {
    	//查找分类
    	$data=Catemenu::get()->toArray();
        return view('admin.cuisine.add',['data'=>$data]);
    }

    public function list(Request $request)
    {
    	//接受搜索值
    	$find_name = $request->input('find_name');
    	//判断值是否存在
    	if(isset($find_name)){
    		//如果存在
    		$data = Menu::join('Catemenu', 'Catemenu.cate_id', '=', 'menu.cate_id')
    		->where('menu.menu_name','like','%'.$find_name.'%')
    		->paginate(2);
    	}else{
    		//如果不存在,就查询全部
    		//查询数据  因为涉及到了菜品的类型名称，所以的联查菜品类型表
			$data = Menu::join('Catemenu', 'Catemenu.cate_id', '=', 'menu.cate_id')->paginate(2);
    	}
    	
    	//分配数据
    	return view('admin/cuisine/list',['data'=>$data,'find_name'=>$find_name]);
    }
}

@extends('layouts.app')

@section('content')
   <form class="layui-form" action="">

    <div class="form-group">
        <label for="exampleInputEmail1">菜名：</label>
        <input type="text" id="cate_name" class="form-control" id="exampleInputEmail1" placeholder="请输入菜单分类名">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">菜品价格：</label>
        <input type="text" id="cate_name" class="form-control" id="exampleInputEmail1" placeholder="请输入菜单分类名">
    </div>
<select name="" id="" >
              <option>--请选择--</option>
              @foreach($data as $k => $v)
                <option>{{$v['cate_name']}}</option>
              @endforeach
          </select>
    <div class="form-group">
        <label for="exampleInputEmail1">所属菜系：</label>
          
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">菜品图片：</label>
        <input type="text" id="cate_name" class="form-control" id="exampleInputEmail1" placeholder="请输入菜单分类名">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">菜品描述：</label>
        <input type="text" id="cate_name" class="form-control" id="exampleInputEmail1" placeholder="请输入菜单分类名">
    </div>
    <button type="submit" id="sub" class="btn btn-default">确定</button>

</form>
@endsection

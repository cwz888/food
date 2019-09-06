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

    <div class="form-group">
        <label for="exampleInputEmail1">所属菜系：</label>
          <select name="" id="" class="form-control">
              <option>--请选择--</option>
              @foreach($data as $k => $v)
                <li><a href="#">{{$v['cate_name']}}</a></li>
              @endforeach
          </select>
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

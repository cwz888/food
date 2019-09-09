@extends('layouts.app')

@section('content')
<form action="{{url('category/doadd')}}" method="post" enctype="multipart/form-data">
@csrf

  <div class="form-group">
  <h3>分类展示</h3>

    <table class="table-striped table-bordered table-hover table-responsive" width="900" >
        <tr align='center'>
            <td>分类编号</td>
            <td>分类名称</td>
            <td>操作</td>
        </tr>
        
            
            @foreach($data as $v)
            
            <tr align='center'>
                <td>{{$v->cate_id}}</td>
                <td>{{$v->cate_name}}</td>
                <td><a href="{{url('cetemeun/del',['id'=>$v->cate_id])}}">删除</a></td>

            </tr>
        @endforeach
       


    </table>

@endsection
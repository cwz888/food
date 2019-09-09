@extends('layouts.app')

@section('content')
<form action="" method="post" enctype="multipart/form-data">
@csrf

  <div class="form-group">
  <h3>分类展示</h3>

    <table class="table-striped table-bordered table-hover table-responsive" width="900" >
        <tr align='center'>
            <td>商户编号</td>
            <td>商户名称</td>
            <td>操作</td>
        </tr>
        
            @foreach($data as $v)
            
            <tr align='center'>
                <td>{{$v->seller_id}}</td>
                <td>{{$v->seller_name}}</td>
                <td><a href="{{url('seller/del',['id'=>$v->seller_id])}}">删除</a></td>


            </tr>
        @endforeach
       


    </table>

@endsection
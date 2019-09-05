@extends('layouts.app')

@section('content')
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">菜名:</label>
            <div class="layui-input-block">
                <input type="text" name="title" required  lay-verify="required" placeholder="请输入菜名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">价格:</label>
            <div class="layui-input-block">
                <input type="password" name="password" required lay-verify="required" placeholder="请输入价格" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">图片:</label>
            <div class="layui-input-block" >
                <input type="file" class="" name="" id="">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">描述:</label>
            <div class="layui-input-block">
                <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-radius layui-btn-normal" lay-submit lay-filter="formDemo">立即上架</button>
                <button type="reset" id="bth" class="layui-btn layui-btn-radius layui-btn-danger">重置</button>
            </div>
        </div>
    </form>
    <script>
        $('#bth').click(function(){
            alert(23432423);
        });
    </script>
@endsection

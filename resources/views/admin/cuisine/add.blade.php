@extends('layouts.app')

@section('content')


<form method="post" enctype="multipart/form-data" action="#">
  {{csrf_field()}}

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
                <option value="{{$v['cate_id']}}">{{$v['cate_name']}}</option>
              @endforeach
          </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">菜品图片：</label>
        <ul class="list_btn">
           <li><img id="imgone" class="sz" width="100px" height="100px" src="" style="display: none;"></li>
           <li> <input type="file" id="house_img_one1" name="art_thumb" multiple="multiple" onchange="houseImgOne(this)"></li>
        </ul>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">菜品描述：</label>
        <input type="text" id="cate_name" class="form-control" id="exampleInputEmail1" placeholder="请输入菜单分类名">
    </div>
    <button type="submit" id="sub" class="btn btn-default">确定</button>

</form>
  <script>
  var _btnId = '';
  var all_urls="";
  var all_types="";
  function houseImgOne(_this) {
    var img = '<img class="sz" width="100px" height="100px" src=""  >'
    _btnId = $(_this).attr('id');
    var obj = document.getElementById("house_img_one1");
    var length = obj.files.length;
    //多图上传时遍历文件信息（可以通过object.files查看）
    for (var i = 0; i < length; i++) {
      var objUrl = getObjectURL(_this.files[i]);
      //图片后缀类型拼接
      all_types=all_types+_this.files[i].type;
      //将图片转换成base64自字符
      var oFReader = new FileReader();
      oFReader.readAsDataURL(_this.files[i]);
      oFReader.onload = function (oFREvent) {
        all_urls=all_urls+oFREvent.target.result+"&|||"; //拼接data形式base64的url
      };
      if (objUrl) {
        $('.sz:last').before(img);
        $('.sz').eq($(".sz").length - 2).attr("src", objUrl);
      }
    }
  }
  //点击提交按钮触发ajax
    $(".submit").click(function(){
    //console.log(all_types);
    $.ajax({
      type:"post",
      url:"{{url('admin/img')}}",
      data:{'imgs':all_urls,'types':all_types,'_token':"{{csrf_token()}}"},
      dataType:"json",
      success:function(data){
        if (data==1){
          // layer插件提示，可自行选择则
          layer.msg("上传成功", {icon: 6});
          window.location.reload();
        }else {
          alert("上传失败！");
        }
      }
    });
  });
  //获取blog对象url(实际获取的是缓存中的图片路径信息，用于即时显示，并非服务器返回的实际资源路径)
  function getObjectURL(file) {
    var url = null;
    if (window.createObjectURL != undefined) {
      url = window.createObjectURL(file);
    } else if (window.URL != undefined) {
      url = window.URL.createObjectURL(file);
    } else if (window.webkitURL != undefined) {
      url = window.webkitURL.createObjectURL(file);
    }
    return url;
  }
</script>
@endsection

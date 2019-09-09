@extends('layouts.app')

@section('content')
<form  action="">

    <div class="form-group">
        <label for="exampleInputEmail1">菜单分类名：</label>
        <input type="email" id="cate_name" class="form-control" id="exampleInputEmail1" placeholder="请输入菜单分类名">
    </div>
    <button type="submit" id="sub" class="btn btn-default">确定</button>

    

</form>
<script>
    $('#sub').click(function() {
        // alert(1);
        var cate_name = $('#cate_name').val();
        // console.log(cate_name);
        if (cate_name==''){
            alert('分类名不可为空');
            return false;
        }
        $.ajax({
            url:"{{url('cetemeun/adddo')}}",
            data:{cate_name:cate_name},
            dataType:'json',
            success:function(res){
                // console.log(res);
                if(res.code == 200){
                    location.href='/cetemeun/list';
                    alert(res.msg);
                }else{
                    location.href='/cetemeun/add';
                    alert(res.msg);

                }
                
            }
        })
        
    })
</script>
@endsection


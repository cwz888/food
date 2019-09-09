@extends('layouts.app')

@section('content')
<form action="" method="post" enctype="multipart/form-data">
@csrf

    
  
<input type="hidden" name="seller_id" id="seller_id" value="{{$data->seller_id}}">
  <div class="form-group">
    <label for="exampleInputName2">商户名称</label>
    <input type="text" class="form-control" id="seller_name" value="{{$data->seller_name}}">
  </div>
  <button type="button" id="but" class="btn btn-primary">修改</button>
  <!-- <button type="button" class="btn btn-success"></button> -->
<script>
    $('#but').click(function(){
        // alert(1);     
        var seller_name = $('#seller_name').val();
        var seller_id = $('#seller_id').val()
        // console.log(seller_id);
        $.ajax({
            url:"{{url('seller/update')}}",
            data:{seller_name:seller_name,seller_id:seller_id},
            dataType:'json',
            success:function(res){
                console.log(res);
                
            }
        })
        
    })

</script>

  @endsection
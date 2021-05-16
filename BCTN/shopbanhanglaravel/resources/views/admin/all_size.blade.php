@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Size List
    </div>
    
    <?php
              $message = Session::get('message');
              $message1 = Session::get('message_up_size');
              $message2 = Session::get('message_del_size');
              if($message){
                echo '<span class="text-alert" style="color: orange;>' .$message. '</span>';
                Session::put('message', null);
              }
              if($message1){
                echo '<span class="text-alert" style="color: orange;">' .$message1. '</span>';
                Session::put('message_up_size', null);
              }
              if($message2){
                echo '<span class="text-alert" style="color: orange;">' .$message2. '</span>';
                Session::put('message_del_size', null);
              }
            ?>
			<div class="table-responsive">   	
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              
            </th>
            <th>Size</th>
            <th>Description</th>
            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        	@foreach($all_size as $key => $size_pro)
          <tr>
            <td>{{-- <label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label> --}}</td>
            <td>{{$size_pro->size_name}}</td>
            <td>{{$size_pro->size_des}}</td>
            <td><span class="text-ellipsis">
            	<?php
            	if($size_pro->size_status == 0){
            	?>
            		<a href="{{URL::to('/unactive-size/'.$size_pro->size_id)}}"><span class = "fa-thumb-styling fa fa-thumbs-up"></span></a>
            	<?php
            	 }else{
            	?>
            		<a href="{{URL::to('/active-size/'.$size_pro->size_id)}}"><span class = "fa-thumb-styling fa fa-thumbs-down"></span></a>;
            	<?php
				      }
            	?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-size/'.$size_pro->size_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn chắc chắn muốn xóa')" href="{{URL::to('/delete-size/'.$size_pro->size_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        {{-- <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div> --}}
      </div>
    </footer>
  </div>
</div>

@endsection
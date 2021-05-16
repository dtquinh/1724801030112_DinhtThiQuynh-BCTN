@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Coupon List
    </div>
    <?php
              $message = Session::get('message');
              $message1 = Session::get('message_del_coupon');
              if($message){
                echo '<span class="text-alert" style="color: #2fce98;font-weight: 700;font-size: 20px;">' .$message. '</span>';
                Session::put('message', null);
              }
              if($message1){
                echo '<span class="text-alert" style="color: #2fce98;font-weight: 700;font-size: 20px;">' .$message1. '</span>';
                Session::put('message_del_coupon', null);
              }
            ?>
			<div class="table-responsive">   	
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              
            </th>
            <th>Coupon Name</th>
            <th>Code</th>
            <th>Quantity</th>
            <th>Discount Method</th>
            <th>Total Discount</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        	@foreach($coupon as $key => $cp)
          <tr>
            <td></td>
            <td>{{$cp->coupon_name}}</td>
            <td>{{$cp->coupon_code}}</td>
            <td>{{$cp->qty_coupon}}</td>

            <td><span class="text-ellipsis">
            	<?php
            	if($cp->coupon_condition == 0){
            	?>
            		Discount as a percentage
            	<?php
            	 }else{
            	?>
            		Discounts according to the amount
            	<?php
				      }
            	?>
            </span></td>
            <td>
              <?php
              if($cp->coupon_condition == 0){
              ?>
                Discounts {{$cp->total_discount}} %
              <?php
               }else{
              ?>
                Discounts {{$cp->total_discount}}
              <?php
              }
              ?>
                
              </td>
            <td>
              {{-- <a href="{{URL::to('/edit-brand-product/'.$cp->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a> --}}
              <a onclick="return confirm('Are you sure you want to delete it?')" href="{{URL::to('/delete-coupon/'.$cp->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
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
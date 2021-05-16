@extends('admin_layout')
@section('admin_content')


<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Customer Information
    </div>
    
    <div class="table-responsive">
            {{-- <?php
            $message = Session::get('Message');
            if($message){
              echo '<span class="text-alert">' .$message. '</span>';
              Session::put('message', null);
            }
            ?> --}}
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>Name</th>
            <th>No. Phone</th>
            <th>Email</th>
           {{--  <th style="width:30px;"></th> --}}
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td></td>
            <td>{{$order_by_id->customer_name}}</td>
            <td>{{$order_by_id->customer_phone}}</td>
            <td>{{$order_by_id->customer_email}}</td>
            
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
<br><br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Shipping Information
    </div>
    
    <div class="table-responsive">
            
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>Recipient Name</th>
            <th>Shipping Address</th>
            <th>Contact Phone Number</th>
            
            
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td></td>
            <td>{{$order_by_id->firstName}} {{$order_by_id->lastName}}</td>
            <td>{{$order_by_id->Note_addressLine}}, {{$order_by_id->Note_district}}, {{$order_by_id->Note_province}}</td>
            <td>{{$order_by_id->Note_phone}}</td>
            
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
<br><br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Order Details
    </div>
    
    <div class="table-responsive">
            
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            
           
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td></td>
            <td>{{$order_by_id->product_name}}</td>
            <td>{{$order_by_id->product_qty}}</td>
            <td>{{$order_by_id->product_price}}</td>
            <td>{{$order_by_id->product_price*$order_by_id->product_qty}}</td>
            
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category))



<?php
$sale_id = $_GET['sale_id'];
$out_trade_no = $_GET['out_trade_no'];
$total_fee = $_GET['total_fee'];
$trade_status = $_GET['trade_status'];
$sign = $_GET['sign'];
$trade_no = $_GET['trade_no'];
$currency = $_GET['currency'];
$sign_type = $_GET['sign_type'];
?>

<div class = "site-content thankyou-page">
    <div class = "container">
        <h1>Your payment is being processed. Thank you!</h1>
        <div class="thankyou-page-inner">
            <p><span><b>Sale ID</b></span><span class="thankyou-val"><?php echo "$sale_id" ?></span></p>
            <p><span><b>Out Trade No.</b></span><span class="thankyou-val"><?php echo $out_trade_no ?></span></p>
            <p><span><b>Total Fee:</b></span> <span class="thankyou-val"><?php echo $total_fee . $currency ?></span></p>
            <p><span><b>Trade Status</b></span> <span class="thankyou-val"><?php echo $trade_status ?></span></p>
            <p><span><b>Sign:</b></span> <span class="thankyou-val"><?php echo $sign ?></span></p>
            <p><span><b>Trade No.</b></span> <span class="thankyou-val"><?php echo $trade_no ?></span></p>
            <p><span><b>Sign Type</b></span> <span class="thankyou-val"><?php echo $sign_type ?> </span></p>
        </div>
    </div>
</div>


@include('footer')
@endsection
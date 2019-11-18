@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category))
<div class="site-content content-wrappper">
<div class="container">
    <form action="{{ url('/appointment/store')}}" method="post" enctype="multipart/form-data" class="appointment-form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">名称</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="telephone">电话号码。</label>
            <input type="text" class="form-control" name="telephone">
        </div>  
        <div class="row mx-0">
            <div class="form-group col pl-0">
                <label for="date">日期</label>
                <input type="date" class="form-control" name="date">
            </div>  
            <div class="form-group col pr-0">
                <label for="time">时间</label>
                <select class="form-control" name="time">
                    <option value="" selected disabled>选择时间</option>
                    <option value="08:00 AM">08:00 AM</option>
                    <option value="08:30 AM">08:30 AM</option>
                    <option value="09:00 AM">09:00 AM</option>
                    <option value="09:30 AM">09:30 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                    <option value="01:00 PM">01:00 PM</option>
                    <option value="01:30 PM">01:30 PM</option>
                    <option value="02:00 PM">02:00 PM</option>
                    <option value="02:30 PM">02:30 PM</option>
                    <option value="03:00 PM">03:00 PM</option>
                    <option value="03:30 PM">03:30 PM</option>
                    <option value="04:00 PM">04:00 PM</option>
                    <option value="04:30 PM">04:30 PM</option>
                    <option value="05:00 PM">05:00 PM</option>
                    <option value="05:30 PM">05:30 PM</option>
                    <option value="06:00 PM">06:00 PM</option>
                    <option value="06:30 PM">06:30 PM</option>
                    <option value="07:00 PM">07:00 PM</option>
                </select>                    
            </div>
        </div> 
<button type="submit" class="btn btn-default">提交</button>
</form>
</div>
</div>

@include('footer')
@endsection

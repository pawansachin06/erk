@extends('layouts.app')
@include('header', array('medical' =>$medical))
@section('content')
<div class="site-content single-doctor">
    <div class="single-banner">
        <div class="single-banner-content container">
            <div class="banner-left-content">
                <p class="img-section">
                    <img src="{{url('/storage').'/app/'.$single_doctor->image}}" class="img-responsive"/>
                </p>
                <div class="doctor-info">
                    <h3>{{$single_doctor->name}}</h3>
                    <div class="btn-wrapper">
                        <a href="#"><img src="{{url('/public/images/chat-icon-white.png')}}" class="img-responsive"/> 立即咨询</a>
                        <a href="#"><img src="{{url('/public/images/chat-icon.png')}}" class="img-responsive"/> 立即咨询</a>
                    </div>
                </div>
            </div>
            <div class="banner-right-content">
                <?php
                if (Auth::user()) {
                    if (Auth::user()->role == 1) {
                        ?>
                        <a href="#"><img src="{{url('/public/images/edit.png')}}"/> <span>编辑</span></a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row m-0">
            <div class="col-12 single-doctor-inner">
                <h5>{{$single_doctor->title}}</h5>
                <p class="category-name">Category:Famous doctor style</p>
                <p class="fs-14">{{$single_doctor->created_at}}</p>
            </div>
            <div class="col-12 single-doctor-inner">
                <div class="description fs-16">{!!$single_doctor->description!!}</div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection
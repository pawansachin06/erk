@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical))


<div>
    <input id="aaa" type="hidden" value="{{$single_doctor->id}}" name="head" />
</div>
<div class="site-content single-doctor" id="chatApp">
    <div class="single-banner">
        <div class="single-banner-content container">
            <div class="banner-left-content single-doctor-image">
                <p class="img-section">
                    <img src="{{url('/storage').'/app/'.$single_doctor->image}}" class="img-responsive"/>
                <div class="edit-img">
                    <form id="uploadForm" type="POST" enctype="multipart/form-data">
                        <input type="file" name="fileupload" id="fileupload" class="form-control inputfile inputfile-6"/>
                        <label for="fileupload">
                            <span class="uploaded-image"></span>
                        </label>
                    </form>
                    <img id="imageid" src="{{url('/storage').'/app/'.$single_doctor['image']}}" class="img-fluid"/>
                    <button id="DoctorImageDelete" class="close-img"><i class="fa fa-remove"></i></button>
                    <input type="hidden" id="imageidforsave" value="<?php echo $single_doctor['image'] ?>" />
                </div>
                </p>
                <div class="doctor-info">
                    <h3>{{$single_doctor->name}}</h3>
                    <input type="hidden" value="{{$single_doctor->name}}" id="head-oq" name="head" />
                    <h3>{{$single_doctor->company_name}}</h3>
                    <input type="hidden" value="{{$single_doctor->company_name}}" id="companyName" />
                    <div class="btn-wrapper">
                        <a href="JavaScript:Void(0)" class="open-popup" data-id="popup_window" data-animation="scale"><img src="{{url('/public/images/chat-icon-white.png')}}" class="img-responsive"/> 立即咨询</a>
                        <!--<a href="#"><img src="{{url('/public/images/chat-icon.png')}}" class="img-responsive"/> 立即咨询</a>-->
                    </div>
                </div>
            </div>
            <div class="banner-right-content edit-btn">
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
        <div class="row m-0 single-doctor-wrap">
            <div class="col-12 single-doctor-inner">
                <h5>{{$single_doctor->title}}</h5>
                <input type="hidden" value="{{$single_doctor->title}}" id="title" />
                <?php
                $date = new DateTime($single_doctor->created_at);
                ?>
                <p class="fs-14">{{$date->format('Y-m-d')}}</p>
            </div>
            <div class="col single-doctor-inner">
                <div class="description fs-14">{!!$single_doctor->description!!}</div>
                <textarea style="display: none;" id="description" class="single-doc form-control" rows="10" name="single_doctor" placeholder="Enter the text">{{$single_doctor->description}}</textarea>
            </div>
        </div>
    </div>
    <div id="popup_window" class="popup">
        <front-chat-component></front-chat-component>
    </div>
</div>


@include('footer')
@endsection

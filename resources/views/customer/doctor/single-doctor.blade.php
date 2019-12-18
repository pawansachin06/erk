@extends('layouts.app')
@include('header', array('medical' =>$medical))
@section('content')


<div>
    <input id="aaa" type="hidden" value="{{$single_doctor->id}}" name="head" />
</div>
<div class="site-content single-doctor">
    <div class="single-banner">
        <div class="single-banner-content container">
            <div class="banner-left-content">
                <p class="img-section">
                    <img src="{{url('/storage').'/app/'.$single_doctor->image}}" class="img-responsive"/>
                </p>
                <div class="doctor-info">
                    <h3>{{$single_doctor->name}}</h3>
                    <input type="hidden" value="{{$single_doctor->name}}" id="head-oq" name="head" />
                    <h3>{{$single_doctor->company_name}}</h3>
                    <input type="hidden" value="{{$single_doctor->company_name}}" id="companyName" />
                    <div class="btn-wrapper">
                        <a href="#" class="open-popup" data-id="popup_window" data-animation="scale"><img src="{{url('/public/images/chat-icon-white.png')}}" class="img-responsive"/> 立即咨询</a>
                        <a href="#"><img src="{{url('/public/images/chat-icon.png')}}" class="img-responsive"/> 立即咨询</a>
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
        <div class="popup-content">
            <a href="#" class="close-popup" data-id="popup_window" data-animation="scale">&times;</a>
            <div class="popup-content-inner">
                <div class="popup-title">
                    <h2>Title name</h2>
                </div>
                <div class="popup-chat">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="popup-send">
                <form action="#" class="m-0">
                    <div class="input-group">
                        <input type="text" class="form-control pop-up-type-msg" placeholder="Type message"/>
                        <a href="#" class="chat-send"><span><i class="fa fa-paper-plane chat-send-icon" aria-hidden="true"></i></span></a>
                    </div>         
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var singleid = jQuery("#aaa").val();
        $(".edit-btn a").click(function () {
            if ($("textarea").hasClass("single-doc")) {
                CKEDITOR.replace('single_doctor');
            }
            $(".single-doctor-wrap .single-doctor-inner:last-child()").append("<div class='save-btn-wrapper text-center'><button class='save-btn'>save</button></div>");
            $(".single-doctor h3").hide();
            $(".single-doctor .single-doctor-inner .description").hide();
            $(".single-doctor-inner h5").hide();
            event.preventDefault();
            var type = $(".single-doctor input").attr('type');
            switch (type) {
                case 'hidden':
                {
                    $(".single-doctor input").attr('type', 'text');
                    return;
                }
            }
        });
        $('body').on("click", ".save-btn-wrapper .save-btn", function () {
            ckdata = CKEDITOR.instances['description'].getData();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'http://localhost/erkclouds/admin/doctor/front-edit',
                method: "POST",
                data: {id: singleid, name: jQuery("#head-oq").val(), companyName: jQuery("#companyName").val(), title: jQuery("#title").val(), description: ckdata},
                success: function (data) {
                    alert("update data")
                }
            });
            setTimeout(function () {
                window.location.reload();
            }, 1000);
        });
        (function ($) {
            $.fn.openPopup = function (settings) {
                var elem = $(this);
                var settings = $.extend({
                    anim: 'fade'
                }, settings);
                elem.show();
                elem.find('.popup-content').addClass(settings.anim + 'In');
            }
            $.fn.closePopup = function (settings) {
                var elem = $(this);
                var settings = $.extend({
                    anim: 'fade'
                }, settings);
                elem.find('.popup-content').removeClass(settings.anim + 'In').addClass(settings.anim + 'Out');
                setTimeout(function () {
                    elem.hide();
                    elem.find('.popup-content').removeClass(settings.anim + 'Out')
                }, 500);
            }
        }(jQuery));

        // Click functions for popup
        $('.open-popup').click(function () {
            $('#' + $(this).data('id')).openPopup({
                anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
            });
        });
        $('.close-popup').click(function () {
            $('#' + $(this).data('id')).closePopup({
                anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
            });
        });
    });
</script>



@include('footer')
@endsection

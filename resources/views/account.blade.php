@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category, 'prod_purchase'=>$prod_purchase))

<div>
    <input id="aaa" type="hidden" value="{{$user->id}}" name="head" />
</div>


<div class="user-info site-content">
    <div class="container user-info-inner">
        <div class="user-info-innerr h-100 d-flex">
            <div class="user-sidebar p-0">
                <ul class="mb-0">
                    <li class="text-center py-3"><a href="#">账号管理</a></li>
                    <li class="py-3 active"><a href="#">个人中心</a></li>
                </ul>
            </div>
            <div class="user-content">
                <div class="user-content-upper p-4 d-flex">
                    <div class="user-content-upper-inner">
                        <div class="user-img mr-4">
                            <img src="{{url('/public/images/user.jpg')}}" />
                        </div>
                        <div class="login-user-info">
                            <p class="user-name">{{$user['name']}}</p>
                            <p class="edit-user-name">
                                <input type="hidden" value="{{$user['name']}}" id="username" name="username" />
                            </p>
                            <p class="user-age">Age: 34</p>
                            <p class="user-email">Email: {{$user['email']}}</p>
                            <p class="edit-user-email">
                                <input type="hidden" value="{{$user['email']}}" id="useremail" name="useremail" />
                            </p>
                        </div>
                    </div>
                    <div class="edit-btn">
                        <a href="#">
                            <img src="{{url('/public/images/edit1.png')}}">
                            <span>编辑</span>
                        </a>
                    </div>
                </div>
                <div class="user-content-lower">
                    <div class="user-product">
                        <div class="user-product-header px-4 py-3 d-flex justify-content-between">
                            <div class="user-product-left fs-16">我的产品</div>
                            <div class="user-product-right fs-16">查看更多 ></div>
                        </div>
                        <div class="user-product-content p-4">
                            @foreach($prod_purchase as $item)

                            <?php
                            $now = Carbon\Carbon::now();
                            $end_date = Carbon\Carbon::parse($item->valid_to);
                            $lengthOfAd = $end_date->diffInDays($now);
//                                print_r($lengthOfAd);
                            if ($item->valid_to > $now) {
                                if ($lengthOfAd <= 30) {
                                    $status = "almost expire";
                                } else {
                                    $status = "in using";
                                }
                            } else {
                                $status = "expired";
                            }
                            ?>
                            <div class="user-product-content-inner py-4 px-3">
                                <div class="user-product-content-innerr">
                                    <p>{{ $item->title }} <span>{{ $status }}</span></p>
                                    <p class="mb-0">有效期：{{ $item->valid_from }} 至 {{ $item->valid_to }}</p>
                                </div>
                                <div class="product-btn-wrapper d-flex justify-content-between">
                                    <?php if($status == "expired"){ ?>
                                        <p class="mb-0 mr-5">
                                            <a 
                                                data-toggle="modal" 
                                                data-target="#selectPlan" 
                                                data-title="{{ $item->title }}" 
                                                data-pid="{{ $item->prod_id }}" 
                                                class="nav-link btn mt-0" 
                                                href="javascript:void(0)"
                                                onclick="javascript: setAttValues(this)">立即续费</a>
                                        </p>
                                    <?php } ?>
                                    <p class="mb-0"><a href="#">立即续费</a></p>
                                </div>
                            </div>
                            <div class="user-product-content-inner">

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--//PLAN MODAL-->
<div class="modal fade" id="selectPlan">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="laravel-login">
                <div class="row login-page mx-0">
                    <div class="col-md-12 laravel-login-inner">
                        <div class="modal-header p-0">
                            <button type="button" class="close" data-dismiss="modal"><span><img src="{{asset('/public/images/cross-btn.png')}}"></span></button>
                        </div>
                        <div class="login-body-width panel panel-default mb-0">
                            <div class="panel-heading text-center">Select Plan</div>

                            <div class="panel-body p-0">
                                <form class="form-horizontal" method="POST" action="{{ url('/account/payment') }}">
                                    {{ csrf_field() }}

                                    <div class="mx-0 form-group">
                                        <div class="col-md-12 text-center login-btn-id p-0">
                                            <select id="plan" name="plan">
                                                <option value="">Select</option>
                                                <option value="1 Month">1 Month</option>
                                                <option value="3 Month">3 Month</option>
                                                <option value="6 Month">6 Month</option>
                                                <option value="1 Year">1 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mx-0 form-group">
                                        <div class="col-md-12 text-center login-btn-id">
                                            <input type="hidden" id="amt" name="amt" value="555" />
                                            <input type="hidden" id="title" name="title" value="" />
                                            <input type="hidden" id="pid" name="pid" value="" />
                                            <span id="price"></span>
                                        </div>
                                    </div>
                                    <div class="mb-0 form-group">
                                        <div class="col-md-12 text-center login-btn-id">
                                            <button type="submit" class="w-100 d-inline-block btn login-btn btn-primary">PAY</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        var singleid = jQuery("#aaa").val();
        $(".edit-btn a").click(function () {
            $(".user-content").append("<div class='save-btn-wrapper text-center'><button class='save-btn'>save</button></div>");
            $(".user-info .user-name").hide();
            $(".user-info .user-email").hide();
            event.preventDefault();
            var type = $(".user-info input").attr('type');
            switch (type) {
                case 'hidden':
                {
                    $(".user-info input").attr('type', 'text');
                    return;
                }
            }
        });
        $('body').on("click", ".save-btn-wrapper .save-btn", function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/erkclouds/account/user/user-edit',
                method: "POST",
                data: {id: singleid, username: jQuery("#username").val(), useremail: jQuery("#useremail").val()},
                success: function (data) {
                    alert("update data");
                }
            });
            setTimeout(function () {
                window.location.reload();
            }, 1000);
        });

        $('#plan').change(function () {
            if ($('#pid').val() == 4 || $('#pid').val() == 7 || $('#pid').val() == 11 || $('#pid').val() == 12) {
                if ($(this).val() == "1 Month") {
                    $('#amt').val('180');
                    $('#price').text("Price: 180 USD");
                } else if ($(this).val() == "3 Month") {
                    $('#amt').val('480');
                    $('#price').text("Price: 480 USD");
                } else if ($(this).val() == "6 Month") {
                    $('#amt').val('780');
                    $('#price').text("Price: 780 USD");
                } else if ($(this).val() == "1 Year") {
                    $('#amt').val('1000');
                    $('#price').text("Price: 1000 USD");
                }
            } else if ($('#pid').val() == 13) {
                if ($(this).val() == "1 Month") {
                    $('#amt').val('90');
                    $('#price').text("Price: 90 USD");
                } else if ($(this).val() == "3 Month") {
                    $('#amt').val('240');
                    $('#price').text("Price: 240 USD");
                } else if ($(this).val() == "6 Month") {
                    $('#amt').val('390');
                    $('#price').text("Price: 390 USD");
                } else if ($(this).val() == "1 Year") {
                    $('#amt').val('500');
                    $('#price').text("Price: 500 USD");
                }
            }
        })
    }
    );

    function setAttValues(obj) {
        setTimeout(function () {
//            alert("Hello " + obj.getAttribute('data-pid'));
            $('#title').val(obj.getAttribute('data-title'));
            $('#pid').val(obj.getAttribute('data-pid'));
        }, 1000);
    }


</script>


@include('footer')
@endsection

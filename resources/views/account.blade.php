@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category, 'prod_purchase'=>$prod_purchase))

<div>
    <input id="aaa" type="hidden" value="{{$user->id}}" name="head" />
</div>
<?php // print_r($medical); ?>
<div class="user-info site-content account-page">
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
                            <img src="{{url('/storage').'/app/'.$user['image']}}" />
                            <div class="edit-img">
                                <form id="uploadForm" type="POST" enctype="multipart/form-data">
                                    <input type="button" id="loadFileXml" value="Choose a file (Click me)" onclick="document.getElementById('fileupload').click();" />
                                    <input type="file" name="fileupload" id="fileupload" class="form-control inputfile"  />
                                    <label for="fileupload">
                                        <span placeholder="upload image" class="uploaded-image"></span>
                                    </label>
                                </form>
                                <img id="imageid" src="{{url('/storage').'/app/'.$user['image']}}" class="img-fluid"/>
                                <button id="AccountImageDelete" class="close-img"><i class="fa fa-remove"></i></button>
                                <input type="hidden" id="imageidforsave" value="" />
                            </div>
                        </div>
                        <div class="login-user-info">
                            <p class="user-name">{{$user['name']}}</p>
                            <p class="edit-user-name">
                                <input type="hidden" value="{{$user['name']}}" id="username" name="username" />
                            </p>
                            <p class="user-age">Age: {{$user['age']}}</p>
                            <p class="edit-user-age">
                                <input type="hidden" value="{{$user['age']}}" id="userage" name="userage" />
                            </p>
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
//                            print_r($item);
                            $now = Carbon\Carbon::now();
                            $end_date = Carbon\Carbon::parse($item->valid_to);
//                            print_r($end_date);
                            $lengthOfAd = $end_date->diffInDays($now);
//                            print_r($lengthOfAd);
                            $aCls = '';
                            if ($item->valid_to > $now) {
                                if ($lengthOfAd <= 30) {
                                    $status = "已到期";
                                    $aCls = 'almost_expire';
                                } else {
                                    $status = "使用中";
                                    $aCls = 'in_using';
                                }
                            } else {
                                $status = "快到期";
                                $aCls = 'expired';
                            }
                            ?>
                            <div class="user-product-content-inner py-4 px-3">
                                <div class="user-product-content-innerr">
                                    <p class="<?php echo $aCls ?>"><a href="{{$item->link}}" target="_blank">{{ $item->title }} <span>{{ $status }}</span></a></p>
                                    <p class="mb-0">有效期：{{ $item->valid_from }} 至 {{ $item->valid_to }}</p>
                                </div>
                                <div class="product-btn-wrapper d-flex justify-content-between">
                                    <?php if ($status == "expired") { ?>
                                        <p class="mb-0 mr-5">
                                            <a
                                                data-toggle="modal"
                                                data-target="#selectPlan"
                                                data-title="{{ $item->title }}"
                                                data-pid="{{ $item->prod_id }}"
                                                class="nav-link btn mt-0"
                                                href="javascript:void(0)"
                                                onclick="javascript: setAttValues(this)"><img src="{{url('/public/images/recharge-now.png')}}" /> 立即续费</a>
                                        </p>
                                    <?php } ?>
                                    <p class="mb-0"><a href="{{url('medical-products/post/'.$item->MedId)}}"><img src="{{url('/public/images/see-details.png')}}" /> 立即续费</a></p>
                                </div>
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
                            <button type="button" class="close" data-dismiss="modal">
                                <span><img src="{{asset('/public/images/cross-btn.png')}}"></span>
                            </button>
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

@include('footer')
@endsection

@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$allmedical,'category'=>$category,'news_category'=>$news_category))
<div class="site-content category-wrap single-post single-news-post">
    <div class="single-news-post-inner">
        <div class="container">
            <div class="img-section mt-5">
                <img src="{{url('/storage').'/app/'.$single_post->image}}"/>
                <h2 class="mt-5">{{$single_post->title}}</h2>
            </div>
        </div>
        <div class="post-content py-5">
            <div class="container">
                <p class="category-name fs-16">Category: {{$single_post->category_name['name']}}</p>
                <?php
                $date = new DateTime($single_post->created_at);
                ?>
                <p class="category-name"><span class="fs-16">Created_at: {{$date->format('d-m-Y')}}</span></p>
                <div class="post-description my-5 fs-16">{!!$single_post->description!!}</div>
            </div>
        </div>
        @if (!Auth::guest())
        <div class="button-wrapper text-center d-flex my-5 justify-content-center">

            <div class="submit-btn after-login text-center my-5 mr-4">
                <a class="btn mt-0" target="_blank" href="{{url($single_post->link)}}">{{$single_post->button}}</a>
            </div>

            <div class="purchase-btn after-login text-center my-5">
                <a data-toggle="modal" data-target="#selectPlan" class="nav-link btn mt-0" href="javascript:void(0)">Purchase</a>
            </div>
            }
        </div>
        @else

        @endif
    </div>
</div>

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
                                            <input type="hidden" id="title" name="title" value="{{$single_post->title}}" />
                                            <input type="hidden" id="pid" name="pid" value="{{$single_post->id}}" />
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
<script>
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
</script>
@include('footer')
@endsection

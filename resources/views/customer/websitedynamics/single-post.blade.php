@extends('layouts.app')
@include('header', array('medical' =>$medical,'category'=>$category,'news_category'=>$allcategory))
@section('content')
<div class="site-content category-wrap single-post single-news-post">
    <div class="single-news-post-inner single-post-inner">
        <div class="single-banner">
            <div class="single-banner-content container">
                <div class="banner-left-content">
                    <div class="post_image">
                        <img src="{{url('/storage').'/app/'.$website_dynamics[0]->website_image}}" />
                    </div>
                    <div class="post_info">
                        <div class="post_title">
                            <h2>{{$website_dynamics[0]->website_title}}</h2>
                        </div>
                        <div class="post_description">
                            <?php
                            $date = new DateTime($website_dynamics[0]->created_at);
                            ?>
                            <p class="category-name"><span class="fs-16">Created_at: {{$date->format('d-m-Y')}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-content py-5">
        <div class="container">
            <div class="post-description fs-16">{!!$website_dynamics[0]->website_description!!}</div>
        </div>

    </div>
</div>
@include('footer')
@endsection

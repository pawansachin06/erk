@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical,'category'=>$allcategory,'news_category'=>$news_category))
<div class="site-content category-wrap">
    <div class="container p-0">
        <div class="containerBox my-5 p-3 row mx-0">
            <div class="col-9 rightnav"> 
                <div class="rightnav-inner"> 
                    <div class="single-post">        
                        <h3>{{$single_post->title}}</h3>
                        <p class="category-name">Category: {{$single_post->category_name['name']}}</p>
                        <p class="post-time fs-12">| {{$single_post->created_at}}</p>
                        <div class="post-description fs-16 my-5">{!!$single_post->description!!}</div>
                    </div>
                    <p class="fs-16">Share to: Tencent Sina Renren.com Mail Favorites Copy URL:<a href="#">More</a></p>
                </div>
            </div>
            <div class="col-3 leftnav mr-0 p-0">  
                <div class="leftnav-innerr">
                    @include('customer.health.category',array('category' =>$allcategory))            
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection

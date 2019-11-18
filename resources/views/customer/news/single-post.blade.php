@extends('layouts.app')
@include('header', array('medical' =>$medical,'category'=>$category,'news_category'=>$allcategory))
@section('content')
<div class="site-content category-wrap news-post">
    <div class="container p-0">
        <div class="containerBox my-5 p-3 row mx-0">
            <div class="col-9 rightnav"> 
                <div class="rightnav-inner p-0"> 
                    <div class="single-post"> 
                        
                        <div class="post-content p-5">
                            <header class="entry-header">
                                <h2>{{$single_post->title}}</h2>
                                <p class="mb-0 category-name fs-16">Category: {{$single_post->category_name['name']}} <span class="fs-14">| {{$single_post->created_at}}</span></p>                                
                            </header>
                            <div class="img-section">
                            <img src="{{url('/storage').'/app/'.$single_post->image}}" class="img-responsive"/>
                        </div>
                            <div class="entry-content">                                
                                <div class="post-description my-5 fs-16">{!!$single_post->description!!}</div>
                                <p class="fs-16">Share to: Tencent Sina Renren.com Mail Favorites Copy URL:<a href="#">More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 leftnav mr-0 p-0">
                <div class="leftnav-innerr">
                @include('customer.news.category',array('category' =>$allcategory))
            </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection

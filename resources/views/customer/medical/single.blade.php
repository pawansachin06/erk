@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$allmedical,'category'=>$category,'news_category'=>$news_category))
<div class="site-content category-wrap news-post">
    <div class="container p-0">
        <div class="containerBox my-5 p-3 row mx-0">
            <div class="col-9 rightnav"> 
                <div class="rightnav-inner p-0"> 
                    <div class="single-post">                                               
                        <div class="post-content p-5 mb-5">
                            <header class="entry-header">
                                <h2><span>{{$single_post->title}}</span></h2>
                                <p class="mb-0 category-name fs-16">Category: {{$single_post->category}}
                                    <span class="fs-14">| {{$single_post->created_at}}</span>
                                </p> 
                            </header>
                            <div class="img-section">
                                <img src="{{url('/storage').'/app/'.$single_post->image}}" class="img-responsive"/>
                            </div>  
                            <div class="entry-content text-left">                                                               
                                <div class="post-description my-5 fs-16">{!!$single_post->description!!}</div>
                                <p class="fs-16">Share to: Tencent Sina Renren.com Mail Favorites Copy URL:<a href="#">More</a></p>
                            </div>
                        </div> 

                        @if (!Auth::guest())
                        <div class="submit-btn after-login text-center my-5">
                            <a class="btn" target="_blank" href="{{url($single_post->link)}}">{{$single_post->button}}</a>
                        </div>
                        @else
                        <div class="submit-btn before-login text-center my-5">
                            <a class="btn disabled" target="_blank" href="{{url($single_post->link)}}">{{$single_post->button}}</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-3 leftnav mr-0 p-0">
                <div class="leftnav-innerr">
                    @include('customer.medical.view',array('medical' =>$allmedical))
                </div>
            </div>



        </div>
    </div>
</div>
@include('footer')
@endsection

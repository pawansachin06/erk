@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$allcategory, 'other_category'=>$other_category))
<div class="site-content category-wrap">
    <div class="container p-0">
        <div class="containerBox my-5 p-3 row mx-0">  
            <div class="col-3 leftnav mr-0 p-0">  
                <div class="leftnav-innerr">                    
                    @include('customer.other.category',array('category' =>$other_category))
                </div>
            </div>
            <div class="col-9 rightnav">
                <div class="rightnav-inner">
                    <div class="top-bar">
                        <img src="{{url('/public/images/bell.png')}}" />
                        信息公告 
                    </div>
                    <?php
                    foreach ($post as $p) {
                        ?>
                        <div class="other-post-content">
                            <h3><input type="checkbox" /> <a href="{{url('/other/post/id/'.$p->id)}}">{{$p->title}}</a></h3>
                            <p class="post-time">( {{$p->created_at}} )</p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@include('footer')
@endsection

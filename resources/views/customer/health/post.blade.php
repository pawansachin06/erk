@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$allcategory))
<div class="site-content category-wrap">
    <div class="container p-0">
        <div class="containerBox my-5 p-3 row mx-0">       
            <div class="col-9 rightnav">
                <div class="rightnav-inner"> 
                    <?php
                    foreach ($post as $p) {
                        ?>
                        <h3><a href="{{url('/health/post/id/'.$p->id)}}">{{$p->title}}</a></h3>
                        <p class="post-time">| {{$p->created_at}}</p>
                        <?php
                    }
                    ?>
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

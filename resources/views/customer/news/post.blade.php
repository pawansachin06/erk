@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$allcategory,'category'=>$category))
<div class="site-content category-wrap">
    <div class="container p-0">
        <div class="containerBox p-3 row my-5 mx-0">            
            <div class="col-9 rightnav">
                <div class="rightnav-inner">
                    <?php
                    foreach ($post as $p) {
                        ?>
                        <h3><a href="{{url('/news/post/id/'.$p->id)}}">{{$p->title}}</a></h3>
                        <p class="post-time">| {{$p->created_at}}</p>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-3 leftnav p-0">
                <div class="leftnav-innerr">
                    @include('customer.news.category',array('category' =>$allcategory))
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection

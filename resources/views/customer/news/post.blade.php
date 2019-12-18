@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$allcategory,'category'=>$category))
<div class="site-content category-wrap">
    <div class="container p-0">
        <div class="containerBox p-3 my-5 d-flex">
            <div class="nav-wrapper">
                <div class="leftnav p-0">
                    <div class="leftnav-innerr">
                        @include('customer.news.category',array('category' =>$allcategory))
                    </div>
                </div>
                <div class="rightnav">
                    <div class="rightnav-inner">
                        <div class="top-bar">
                            信息公告
                        </div>
                        <?php
                        foreach ($post as $p) {
                            ?>
                            <div class="other-post-content">
                                <h3>
                                    <a href="{{url('/news/post/id/'.$p->id)}}">{{$p->title}}</a>
                                </h3>
                                <?php
                                $date = new DateTime($p->created_at);
                                ?>
                                <p class="post-time">{{$date->format('Y-m-d')}}</p>
                            </div>
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

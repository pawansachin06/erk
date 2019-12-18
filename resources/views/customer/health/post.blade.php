@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$allcategory))
<div class="site-content category-wrap">
    <div class="container p-0">
        <div class="containerBox my-5 p-3 row mx-0">

            <div class="col-sm-3 leftnav mr-0">
                <div class="leftnav-innerr">
                    @include('customer.health.category',array('category' =>$allcategory))
                </div>
            </div>
            <div class="col-sm-9 rightnav m-0">
                <div class="rightnav-inner">
                    <div class="top-bar">
                        信息公告
                    </div>
                    <?php
                    foreach ($post as $p) {
                        ?>
                        <div class="other-post-content">
                            <h3>
                                <a href="{{url('/health/post/id/'.$p->id)}}">{{$p->title}}</a>
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
@include('footer')
@endsection

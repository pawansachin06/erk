@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category))
<div class="site-content content-wrappper all-product">
    <div class="banner-part">
        <img src="{{url('/public/images/product-banner.png')}}"/>
        <div class="container">
            <div class="banner-content">
                <div class="row align-items-center banner-content-inner">
                    <div class="col-6 banner-content-innerr">
                        <h2>定制开发  个性需求</h2>
                        <p>尔康云软件开发，我们专注于以全方位一站式的定制开发服务为您解决管理系统、网站APP或微信端的个性需求!</p>
                    </div>
                    <div class="col-6 banner-content-innerr">
                        <img src="{{url('/public/images/pro.png')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="container">
            <div class="product-inner py-4">
                <div class="row mx-0">
                    <?php foreach ($medical as $m) { ?>
                        <div class="col-6 product-single mb-4">
                            <div class="product-innerr p-5">
                                <h2><?php echo $m['title'] ?></h2>
                                <p class="medical-desc">
                                    <?php
                                    $des = strip_tags($m['description']);
                                    echo substr($des, 0, 120) . '...';
                                    ?>
                                </p>
                                <div class="read-more">
                                    <a href="{{url('medical-products/post/id/'.$m->id)}}">立即进入 <span>></span></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection
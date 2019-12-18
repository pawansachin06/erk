@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category))
<div class="site-content content-wrappper">
    <div class="home-slider">
        <?php foreach ($slider as $slide) { ?>
            <div class="slider-item">
                <img src="{{url('/storage').'/app/'.$slide['image']}}" />
                <div class="slider-text">
                    <h1><span>科技未来</span> 数据新时代</h1>
                    <h4 class="text-uppercase">technology future data new era</h4>
                    <p>远秋健康医疗云大数据时代已来临</p>
                    <p>拓路前行，领跑未来，带给你不一样的数据时代</p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <section class="product-services sep_angled">
        <div class="product-services-inner">
            <div class="container">
                <div class="product-services-content-wrapper upper-part">
                    <div class="upper-part-inner">
                        <h2 class="text-uppercase">产品介绍</h2>
                        <p class="text-uppercase f-14">product introduction</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap product-services-innerr">
                    <?php foreach ($medical as $m) { ?>
                        <div class="product-services-content">
                            <div class="product-item-wrap">
                                <div class="services-box text-center">
                                    <a class="boxed_special" href="{{url('medical-products/post/id/'.$m->id)}}">
                                        <div class="figure transparent">
                                            <img src="{{url('/storage').'/app/'.$m['image']}}" />
                                        </div>
                                        <div class="content text-center with_button">
                                            <div class="hgroup">
                                                <h4 class="neutralize_links">
                                                    <?php echo $m['title'] ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <div class="overlay-text">
                                                <p><?php echo $m['shortdes'] ?></p>
                                                <button>查看详情 > </button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="doctor-section">
        <div class="container">
            <div class="upper-part">
                <div class="upper-part-inner">
                    <h2 class="text-uppercase">专家简介</h2>
                    <p class="text-uppercase f-14">expert introduction</p>
                </div>
            </div>
            <div class="doctor-slider">
                <?php foreach ($doctor as $doc) { ?>
                    <div class="doctor-slider-item px-3">
                        <div class="doctor-slider-item-inner">
                            <div class="doctor-details">
                                <a href="{{url('doctor/id/'.$doc->id)}}">
                                    <img src="{{url('/storage').'/app/'.$doc['image']}}" />
                                </a>
                                <p class="fs-14 doc-name"><a href="{{url('doctor/id/'.$doc->id)}}"><?php echo $doc['name'] ?> </a></p>
                                <p class="fs-16 mt-3 doc-title">{{$doc['title']}} </p>
                                <p class="fs-16 mt-3 doc-company">{{$doc['company_name']}} </p>
                            </div>
                            <div class="chat-icon">
                                <a href="#"><i class="fa fa-commenting chat-icon-img" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <div class="news-section">
        <div class="container">
            <div class="news-section-inner text-center">
                <div class="news-section-innerr">
                    <h2>健康自测</h2>
                    <p class="text-uppercase f-14">News Bulletin</p>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center news-section-inner">
                <?php foreach ($news_post as $np) { ?>
                    <div class="news-box px-3">
                        <div class="news-img">
                            <a href="{{url('news/post/id/'.$np['id'])}}">
                                <img src="{{url('/storage').'/app/'.$np['image']}}">
                            </a>
                        </div>
                        <div class="news-content">
                            <h3 class="my-4"><?php echo $np['title']; ?></h3>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="expert-intro">
        <div class="expert-intro-inner container">
            <div class="upper-part">
                <div class="upper-part-inner">
                    <h2 class="text-uppercase">消息公告</h2>
                    <p class="text-uppercase f-14">expert introduction</p>
                </div>
            </div>
            <div class="row mx-0 expert-intro-innerr">
                <div class="col-4 p-0 expert-left expert-left-slider">
                    <?php foreach ($website as $w) { ?>
                        <div class="expert-left-slider-content">
                            <img src="{{url('/storage').'/app/'.$w['website_image']}}" />
                            <p class="mb-0 f-14"><span><?php echo $w['website_title'] ?></span></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-8 expert-right">
                    <?php foreach ($website as $w) { ?>
                        <div class="expert-right-inner">
                            <div class="expert-post-info">
                                <div class="expert-post-date mr-4">
                                    <p class="date-p"><?php echo date('d', strtotime($w['created_at'])) ?> <span><?php echo date('Y/m', strtotime($w['created_at'])) ?></span></p>
                                </div>
                                <div class="expert-post-content">
                                    <h2 class="title-h"><a href="website_dynamics/post/id/<?php echo $w['id'] ?>"><?php echo $w['website_title'] ?></a></h2>
                                    <p><?php echo $w['website_description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="post-wrapper">
        <div class="post-wrapper-inner">
            <div class="container">
                <div class="upper-part">
                    <div class="upper-part-inner">
                        <h2 class="text-uppercase">健康资讯</h2>
                        <p class="text-uppercase f-14">health information</p>
                    </div>
                </div>
                <div class="row mx-0 expert-intro-innerr">
                    <div class="col-8 expert-right">
                        <?php foreach ($posts as $m) { ?>
                            <div class="expert-right-inner">
                                <div class="expert-post-info">
                                    <div class="expert-post-date mr-4">
                                        <p class="date-p"><?php echo date('d', strtotime($m['created_at'])) ?> <span><?php echo date('Y/m', strtotime($m['created_at'])) ?></span></p>
                                    </div>
                                    <div class="expert-post-content">
                                        <h3 class="title-h"><a href="health/post/id/<?php echo $m['id'] ?>"><?php echo $m['title'] ?></a></h3>
                                        <p class="medical-desc"> {!! substr($m['description'],0,125).'...'; !!}</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="col-4 expert-left expert-left-slider">
                        <?php foreach ($posts as $m) { ?>
                            <div class="expert-left-slider-content">
                                <img src="{{url('/storage').'/app/'.$m['website_image']}}" />
                                <p class="mb-0 f-14"><?php echo $m['title'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection

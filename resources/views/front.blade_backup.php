@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category))
<div class="site-content content-wrappper">
    <div class="home-slider">
        <?php foreach ($slider as $slide) { ?>
            <div class="slider-item">
                <img src="{{url('/storage').'/app/'.$slide['image']}}" />
                <div class="slider-text">
                    <h4 class="text-uppercase">technology future data new era</h4>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
<!--    <section class="services">
        <div class="services-inner elevate">
            <div class="container">
                <div class="row m-0 services-item-wrapper">
                    <div class="col-3 p-0 services-item" style="border-color: rgb(8, 142, 255);">
                        <div class="separator_top" style="border-left-width: 278px;">
                            <div></div>                        
                        </div>
                        <div class="services-box text-center">
                            <?php foreach ($medical as $med) { ?>
                                <a href="{{url('medical-products/post/id/'.$med->id)}}" class="boxed">
                                    <?php
                                }
                                ?>       
                                <div class="figure transparent">  
                                    <img src="{{asset('/public/images/icon_med_book_white.png')}}">                                
                                </div>
                                <div class="content text-center with_button">
                                    <div class="hgroup">
                                        <h4 class="neutralize_links">
                                            医学产品   
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="separator_bottom" style="border-left-width: 278px;"><div></div></div>
                    </div>
                    <div class="col-3 p-0 services-item" style="border-color: rgb(8, 142, 255);">
                        <div class="separator_top" style="border-left-width: 278px;">
                            <div></div>                        
                        </div>
                        <div class="services-box text-center">
                            <a href="{{url('doctor')}}" class="boxed">
                                <div class="figure transparent">
                                    <img src="{{asset('/public/images/icon_doctor1.png')}}">                                
                                </div>
                                <div class="content text-center with_button">
                                    <div class="hgroup">
                                        <h4 class="neutralize_links">
                                            专家风采
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="separator_bottom" style="border-left-width: 278px;"><div></div></div>
                    </div>
                    <div class="col-3 p-0 services-item" style="border-color: rgb(8, 142, 255);">
                        <div class="separator_top" style="border-left-width: 278px;">
                            <div></div>                        
                        </div>
                        <div class="services-box text-center">
                            <?php
                            $j = 0;
                            foreach ($category as $c) {
                                if ($j == 0) {
                                    ?>
                                    <a href="{{url('/health/category/id/'.$c->id)}}" class="boxed">
                                        <?php
                                    }
                                    $j++;
                                }
                                ?>
                                <div class="figure transparent">    
                                    <img src="{{asset('/public/images/icon_help_desk1.png')}}">  
                                </div>
                                <div class="content text-center with_button">
                                    <div class="hgroup">
                                        <h4 class="neutralize_links">
                                            健康资讯
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="separator_bottom" style="border-left-width: 278px;"><div></div></div>
                    </div>
                    <div class="col-3 p-0 services-item" style="border-color: rgb(8, 142, 255);">
                        <div class="separator_top" style="border-left-width: 275px;">
                            <div></div>                        
                        </div>
                        <div class="services-box text-center">
                            <?php
                            $i = 0;
                            foreach ($news_category as $p) {
                                if ($i == 0) {
                                    ?>
                                    <a href="{{url('/news/category/id/'.$p->id)}}" class="boxed">
                                        <?php
                                    }
                                    $i++;
                                }
                                ?>
                                <div class="figure transparent">   
                                    <img src="{{asset('/public/images/icon_tree_white.png')}}">
                                </div>
                                <div class="content text-center with_button">
                                    <div class="hgroup">
                                        <h4 class="neutralize_links">
                                            网站动态
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="separator_bottom" style="border-left-width: 275px;"><div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section class="product-services sep_angled">
        <div class="product-services-inner">
            <div class="container">
                <div class="product-services-content-wrapper upper-part">
                    <h2 class="text-uppercase">医学产品</h2>
                </div>
                <div class="row product-services-innerr">
                    <?php foreach ($medical as $m) { ?>
                        <div class="col">
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
                <h2 class="text-uppercase">专家风采</h2>
            </div>
            <div class="doctor-slider">
                <?php foreach ($doctor as $doc) { ?>
                    <div class="doctor-slider-item">
                        <a href="{{url('doctor/id/'.$doc->id)}}"><img src="{{url('/storage').'/app/'.$doc['image']}}" /></a>
                        <p class="fs-16"><a href="{{url('doctor/id/'.$doc->id)}}"><?php echo $doc['name'] ?> </a></p>
                    </div> 
                    <?php
                }
                ?>
            </div>
        </div>    
    </section>
    <div class="news-section" style="background: #f3f3f3;">
        <div class="container">
            <div class="news-section-inner mb-5 p-5">
                <h2>新闻</h2>                
            </div>
            <div class="row m-0 news-section-inner">
                <?php foreach ($news_post as $np) { ?>
                    <div class="col-4">
                        <div class="news-box">                        
                            <div class="news-img">
                                <a href="{{url('news/post/id/'.$np['id'])}}"><img src="{{url('/storage').'/app/'.$np['image']}}"></a>
                            </div>
                            <div class="news-content px-5">       
                                <div class="news-date">
                                    <?php echo $np['created_at']->format('d F'); ?>
                                </div>
                                <h3 class="mb-5"><?php echo $np['title']; ?></h3>
                                <?php
                                $str = $np['description'];
                                ?>
                                <p>{!! str_limit(strip_tags($str), $limit = 150, $end = '...') !!}</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="post-wrapper py-5">
        <div class="post-wrapper-inner">
            <div class="container">
                <h2 class="text-uppercase">健康资讯</h2>
                <div class="row m-0">
                    <?php foreach ($category as $cate) { ?>
                        <div class="col-4 pr-0">                
                            <div class="post-content">
                                <div class="post-title">
                                    <img src="{{asset('/public/images/public-health.png')}}">
                                    <a class="fs-14 category-title" href="#">
                                        <?php echo $cate['name']; ?>       
                                    </a>
                                    <a class="more" href="{{url('health/category/id/'.$cate['id'])}}">更多 ..</a>
                                </div>
                                <div class="post-list">
                                    <p class="post-list-item py-3">

                                        <?php foreach ($cate['posts_name'] as $ca) { ?>
                                            <a class="single-link" href="{{url('/health/post/id/'.$ca['id'])}}"><?php echo $ca['title']; ?></a>
                                            <?php
                                        }
                                        ?>

                                    </p>
                                </div>
                            </div>
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

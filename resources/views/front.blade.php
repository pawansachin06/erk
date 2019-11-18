@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category))
<div class="site-content content-wrappper">
    <div class="home-slider">
        <?php foreach ($slider as $slide) { ?>
            <div class="slider-item">
                <img src="{{url('/storage').'/app/'.$slide['image']}}" />
                <div class="slider-text">
                    <h4 class="text-uppercase mb-0">technology future data new era</h4>
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
                        <h2 class="text-uppercase">医学产品</h2>
                        <p class="text-uppercase f-14">product introduction</p>
                    </div>
                </div>
                <div class="row product-services-innerr">
                    <?php foreach ($medical as $m) { ?>
                        <div class="col-3">
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
                                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                                <button>Read More</button>
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
                    <h2 class="text-uppercase">专家风采</h2>
                    <p class="text-uppercase f-14">expert introduction</p>
                </div>
            </div>
            <div class="doctor-slider">
                <?php foreach ($doctor as $doc) { ?>
                    <div class="doctor-slider-item px-3">
                        <div class="doctor-slider-item-inner">
                            <a href="{{url('doctor/id/'.$doc->id)}}">
                                <img src="{{url('/storage').'/app/'.$doc['image']}}" />
                            </a>
                            <p class="fs-16"><a href="{{url('doctor/id/'.$doc->id)}}"><?php echo $doc['name'] ?> </a></p>
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
                    <h2>新闻</h2> 
                    <p class="text-uppercase f-14">news bulletin</p>
                </div>
            </div>
            <div class="d-flex news-section-inner">
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
                    <h2 class="text-uppercase">专家风采</h2>
                    <p class="text-uppercase f-14">expert introduction</p>
                </div>
            </div>
            <div class="row mx-0 expert-intro-innerr">
                <div class="col-4 p-0 expert-left expert-left-slider">
                    <div class="expert-left-slider-content">
                        <img src="{{asset('/public/images/expert-2.png')}}">
                        <p class="mb-0 f-16">What is Lorem Ipsum?</p>
                    </div>
                    <div class="expert-left-slider-content">
                        <img src="{{asset('/public/images/expert-1.png')}}">
                        <p class="mb-0 f-16">What is Lorem Ipsum?</p>
                    </div>
                    <div class="expert-left-slider-content">
                            <img src="{{asset('/public/images/expert-3.png')}}">
                            <p class="mb-0 f-16">What is Lorem Ipsum?</p>
                        </div>
                </div>
                <div class="col-8 expert-right">
                    <div class="expert-right-inner">
                        <div class="expert-post-info">
                            <div class="expert-post-date mr-4">
                                <p>06 <span>2019/13</span></p>
                            </div>
                            <div class="expert-post-content">
                                <h2>What is Lorem Ipsum?</h2>
                                <p>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</p>
                            </div>
                        </div>
                    </div>
                    <div class="expert-right-inner">
                        <div class="expert-post-info">
                            <div class="expert-post-date mr-4">
                                <p>06 <span>2019/13</span></p>
                            </div>
                            <div class="expert-post-content">
                                <h2>What is Lorem Ipsum?</h2>
                                <p>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</p>
                            </div>
                        </div>
                    </div>
                    <div class="expert-right-inner">
                        <div class="expert-post-info">
                            <div class="expert-post-date mr-4">
                                <p>06 <span>2019/13</span></p>
                            </div>
                            <div class="expert-post-content">
                                <h2>What is Lorem Ipsum?</h2>
                                <p>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-wrapper py-5">
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
                        <div class="expert-right-inner">
                            <div class="expert-post-info">
                                <div class="expert-post-date mr-4">
                                    <p>06 <span>2019/13</span></p>
                                </div>
                                <div class="expert-post-content">
                                    <h3>What is Lorem Ipsum?</h3>
                                    <p>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</p>
                                </div>
                            </div>
                        </div>
                        <div class="expert-right-inner">
                            <div class="expert-post-info">
                                <div class="expert-post-date mr-4">
                                    <p>06 <span>2019/13</span></p>
                                </div>
                                <div class="expert-post-content">
                                    <h3>What is Lorem Ipsum?</h3>
                                    <p>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</p>
                                </div>
                            </div>
                        </div>
                        <div class="expert-right-inner">
                            <div class="expert-post-info">
                                <div class="expert-post-date mr-4">
                                    <p>06 <span>2019/13</span></p>
                                </div>
                                <div class="expert-post-content">
                                    <h3>What is Lorem Ipsum?</h3>
                                    <p>What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?What is Lorem Ipsum?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-0 expert-left expert-left-slider">
                        <div class="expert-left-slider-content">
                            <img src="{{asset('/public/images/expert-3.png')}}">
                            <p class="mb-0 f-16">What is Lorem Ipsum?</p>
                        </div>
                        <div class="expert-left-slider-content">
                            <img src="{{asset('/public/images/expert-1.png')}}">
                            <p class="mb-0 f-16">What is Lorem Ipsum?</p>
                        </div>
                        <div class="expert-left-slider-content">
                            <img src="{{asset('/public/images/expert-2.png')}}">
                            <p class="mb-0 f-16">What is Lorem Ipsum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection

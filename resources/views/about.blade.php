@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'news_category'=>$news_category, 'category'=>$category, 'other_category'=>$other_category))



<div class="site-content content-wrappper about">
    <div class="container about-section-wrapper">
        <?php foreach ($about as $abt) { ?>
            <div class="about-section py-5">
                <div class="about-title text-center">
                    <h1 class="text-center"><?php echo $abt['title']; ?></h1>
                </div>
                <div class="about-content py-5">
                    <div class="about-inner row mx-0">
                        <div class="about-innerr col-6 px-0">
                            <img src="{{url('/storage').'/app/'.$abt['image']}}" />
                        </div>
                        <div class="about-innerr col-6">
                            <p><?php echo $abt['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="repeater-section">
        <div class="container">
            <div class="row repeater-section-inner">
                <?php foreach ($about as $abt) { ?>
                    <?php
                    $data = json_decode($abt['repeater']);
                    foreach ($data as $d) {
                        ?>
                        <div class="col-3 repeater-section-innerr">
                            <img src="{{url('/public/images/flag.png')}}" />
                            <span><?php echo $d->name; ?></span>
                        </div>
                    <?php }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
@include('footer')
@endsection

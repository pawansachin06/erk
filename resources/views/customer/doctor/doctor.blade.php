@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical, 'category' =>$category, 'news_category' =>$news_category))
<div class="site-content">
    <div class="f-doctor">
        <div class="container">
            <h1 class="text-center text-uppercase">专家风采</h1>
            <div class="doctor">
                <div class="row m-0">
                    <?php
                    foreach ($doctor as $doc) {
                        ?>
                        <div class="col-4 mb-5">
                            <div class="doctor-inner p-3">
                                <p class="img-section text-center py-3"><a href="{{url('doctor/id/'.$doc->id)}}"><img src="{{url('/storage').'/app/'.$doc->image}}"/></a></p>
                                <h2 class="text-center"><a href="{{url('doctor/id/'.$doc->id)}}">{{$doc->name}}</a></h2>
                                <p class="fs-14 text-center"><a href="{{url('doctor/id/'.$doc->id)}}">{{$doc->title}}</a></p>
                                <p class="fs-14 text-center"><a href="{{url('doctor/id/'.$doc->id)}}">| {{$doc->created_at}}</a></p>
                                </a>
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










@extends('admin.master')
@section('content')
<div class="content-section">
    <div class="admin-area text-center">

        <div class="panel panel-default">
            <h1 class="panel-heading mt-4">Welcome Admin</h1>
            <div class="mt-5 row admin-box">
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-product-hunt"></i></p>
                        <p class="mb-0"><a href="{{ url('admin/medical-products') }}" class="wht-btn">Medical Product</a></p>
                    </div>
                </div> 
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-medkit"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/health/posts') }}" class="wht-btn">Health Informaion</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-newspaper-o"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/news/posts') }}" class="wht-btn">Company News</a></p>
                    </div>
                </div>
            </div> 
            <div class="mt-5 row admin-box">
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-user-md"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/doctor/view') }}" class="wht-btn">Expert/Doctor</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-picture-o"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/slider/view') }}" class="wht-btn">Home Background</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-envelope-o"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/email/view') }}" class="wht-btn">Admin Email</a></p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row admin-box">
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-file-code-o"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/website_dynamics/view') }}" class="wht-btn">Website Dynamics</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-user"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/about/edit/1') }}" class="wht-btn">About Us</a></p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row admin-box">
                
                
            </div>
        </div>
    </div>
</div>
@endsection

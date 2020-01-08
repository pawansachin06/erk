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
                        <p class="mb-0"><a href="{{ url('admin/medical-products') }}" class="wht-btn">产品</a></p>
                    </div>
                </div> 
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-medkit"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/health/posts') }}" class="wht-btn">健康资讯</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-newspaper-o"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/news/posts') }}" class="wht-btn">公司动态</a></p>
                    </div>
                </div>
            </div> 
            <div class="mt-5 row admin-box">
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-user-md"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/doctor/view') }}" class="wht-btn">医生风采</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-picture-o"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/slider/view') }}" class="wht-btn">主页背景</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-envelope-o"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/email/view') }}" class="wht-btn">管理员电子邮件</a></p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row admin-box">
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-file-code-o"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/website_dynamics/view') }}" class="wht-btn">中文到</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-user"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/about/edit/1') }}" class="wht-btn">关于我们</a></p>
                    </div>
                </div>
                <div class="col-md-4 admin-box-inner">
                    <div class="admin-box-innerr">
                        <p class="mb-2"><i aria-hidden="true" class="fa fa-comments"></i></p>
                        <p class="mb-0"><a href="{{ url('/admin/chat') }}" class="wht-btn">聊天</a></p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row admin-box">
                
                
            </div>
        </div>
    </div>
</div>
@endsection

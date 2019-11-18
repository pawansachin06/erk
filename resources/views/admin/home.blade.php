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
                        <p class="mb-0"><a href="{{ url('/admin/doctor/view') }}" class="wht-btn">Famous Doctor</a></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

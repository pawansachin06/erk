<div class="header navbar">
    <div class="header-container">
        <div class="nav-logo">
            <a href="<?php echo url('/admin'); ?>">
                <div class="logo">Erkcloud</div>                
            </a>
        </div>
        <ul class="nav-left">
            <li>
                <a class="sidenav-fold-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-menu"></i>
                </a>
                <a class="sidenav-expand-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-menu"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-apps"></i>
                </a>
                <ul class="dropdown-menu dropdown-grid col-3 dropdown-lg">
                    <li>
                        <a href="{{url('/admin/medical-products')}}">
                            <div class="text-center">
                                <i class="mdi mdi mdi-cart font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Product</p>
                            </div>
                        </a>
                    </li>                    
                </ul>
            <li class="user-profile dropdown dropdown-animated scale-left">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="profile-img img-fluid" src="{{url('images/avatars/thumb-13.jpg')}}" alt="">
                </a>
                <ul class="dropdown-menu dropdown-md p-v-0">
                    <li>
                        <ul class="list-media">
                            <li class="list-item p-15">
                                <div class="media-img">
                                    <img src="{{url('images/avatars/thumb-13.jpg')}}" alt="">
                                </div>
                                <div class="info">
                                    <span class="title text-semibold">{{ Auth::user()->name }}</span>
                                    <span class="sub-title">{{ Auth::user()->email }}</span>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <?php $userId = Auth::id(); ?>
                        <a href="<?php echo secure_url("/admin/edit-profile/$userId"); ?>">
                            <i class="mdi mdi-account-multiple p-r-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}">
                            <i class="fa fa-sign-out p-r-10"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>    
            </li>
        </ul> 
    </div>
</div>
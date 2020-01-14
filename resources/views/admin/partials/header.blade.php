<div class="header navbar">
    <div class="header-container">
        <div class="nav-logo">
            <a href="<?php echo url('/admin'); ?>">
                <div class="logo"><img src="{{asset('/public/images/logo.png')}}"></div>
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
        <ul class="nav-right logout-admin">
           <li>
                        <a href="{{ url('/logout') }}">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                        </a>
                    </li>
        </ul>
    </div>
</div>
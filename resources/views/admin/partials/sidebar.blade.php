<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="side-nav-header">
                <span></span>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-product-hunt"></i>
                    </span>
                    <span class="title">产品</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/medical-products') }}">所有产品</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-medkit"></i>
                    </span>
                    <span class="title">健康资讯</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/admin/health/category') }}">所有类别</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/health/posts') }}">所有帖子</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-newspaper-o"></i>
                    </span>
                    <span class="title">公司动态</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/admin/news/category') }}">所有类别</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/news/posts') }}">所有帖子</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-user-md"></i>
                    </span>
                    <span class="title">医生风采</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/admin/doctor/view') }}">所有医生</a>
                    </li>
                </ul>
            </li>
            <!--<li class="nav-item dropdown">-->
            <!--    <a class="dropdown-toggle" href="javascript:void(0);">-->
            <!--        <span class="icon-holder">-->
            <!--            <i class="fa fa-picture-o"></i>-->
            <!--        </span>-->
            <!--        <span class="title">主页背景</span>-->
            <!--        <span class="arrow">-->
            <!--            <i class="mdi mdi-chevron-right"></i>-->
            <!--        </span>-->
            <!--    </a>-->
                <!--<ul class="dropdown-menu">-->
                <!--    <li>-->
                <!--        <a href="{{ url('/admin/slider/view') }}">背景图片</a>-->
                <!--    </li>-->
                <!--</ul>-->
            <!--</li>-->
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    <span class="title">管理员电子邮件</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/admin/email/view') }}">电子邮件</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-file-code-o"></i>
                    </span>
                    <span class="title">中文到</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/admin/website_dynamics/view') }}">全部发布</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ url('/admin/about/edit/1')}}">
                    <span class="icon-holder">
                        <i class="fa fa-user"></i>
                    </span>
                    <span class="title">关于我们</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-picture-o"></i>
                    </span>
                    <span class="title">账户</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/admin/account/view') }}">视图</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-user"></i>
                    </span>
                    <span class="title">用户</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/admin/user/view') }}">所有用户</a>
                    </li>
                </ul>
            </li>
            
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fa fa-comments"></i>
                    </span>
                    <span class="title">聊天</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/admin/chat') }}">所有聊天</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>

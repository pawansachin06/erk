<div class="header">
    <div class="topbar vcenter">
        <div class="container">

            <div class="navbar-header-inner d-flex justify-content-between align-items-center">
                <div class="menu w-100">
                    <nav class="navbar navbar-expand-lg p-0 m-0">
                        <a class="navbar-brand p-0" href="{{url('/')}}">
                            <img src="{{asset('/public/images/logo.png')}}">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">首  页</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor')}}">Doctor Introduction</a>
                                </li>

                                <?php
                                $i = 0;
                                foreach ($news_category as $p) {
                                    if ($i == 0) {
                                        ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/news/category/id/'.$p->id)}}">News</a>
                                        </li>
                                        <?php
                                    }
                                    $i++;
                                }
                                ?>


                                <?php
                                $j = 0;
                                foreach ($category as $c) {
                                    if ($j == 0) {
                                        ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/health/category/id/'.$c->id)}}">健康资讯</a>
                                        </li>
                                        <?php
                                    }
                                    $j++;
                                }
                                ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/about')}}">关于我们</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{url('medical-products/post')}}">
                                        产品介绍
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class="navbar-nav nav">
                    <?php
                    if ($user = Auth::user()) {
                        ?>
                        <li class="nav-item">

                            <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-sign-out"></i> <strong>退出</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin-dashboard')}}"> <strong>管理员</strong></a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('register')}}"><i class="fa fa-user"></i> <strong>注册</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin-dashboard')}}"> <strong>管理员</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}"><i class="fa fa-sign-in"></i> <strong>登录</strong></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>

        </div>
    </div>
</div>

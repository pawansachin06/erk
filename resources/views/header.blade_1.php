<div class="header">
        <div class="topbar py-3 vcenter">
            <div class="container pb-3">
                <div class="navbar-header w-100">
                <div class="navbar-header-inner d-flex w-100 justify-content-between align-items-center">
                    <a class="navbar-brand p-0 d-flex align-items-center" href="{{url('/')}}">
                        <img src="{{asset('/public/images/logo.png')}}">
                    </a>
                    <div class="menu">
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg px-0 py-3 m-0"> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">                        
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">首  页</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            医学产品
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($medical as $med) { ?>
                                    <li><a class="dropdown-item" href="{{url('medical-products/post/id/'.$med->id)}}"><?php echo $med['title'] ?>    </a></li>
                                    <?php
                                }
                                ?>                            
                            </ul>
                        </li>  
                        <?php
                        $i = 0;
                        foreach ($news_category as $p) {
                            if ($i == 0) {
                                ?>
                                <li class="nav-item">
                                <a class="nav-link" href="{{url('/news/category/id/'.$p->id)}}">网站动态</a>
                                </li>
                                <?php
                            }
                            $i++;
                        }
                        ?>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('doctor')}}">专家风采</a>
                        </li>                  

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
                        <?php
                        $i = 0;
                        foreach ($other_category as $p) {
                            ?>
                            <li class="nav-item appointment dropdown">
                                <?php if($p->name == '在线交流'){ ?>
                                    <a style="display:inline-block;" id="appointment" class="nav-link dropdown-toggle" href="{{url('/other/category/id/'.$p->id)}}" >{{$p->name}}</a>
                                    <span id="appoint" class="dropdown-toggle"></span>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{url('appointment')}}"><?php echo '约定' ?></a></li>
                                    </ul>
                                <?php }else{ ?>
                                    <a class="nav-link" href="{{url('/other/category/id/'.$p->id)}}">{{$p->name}}</a>
                                <?php } ?>
                            </li>
                            <?php
                        }
                        ?>
                            <?php
                            if ($user = Auth::user()) {
                                ?>
                                <li class="nav-item mobile">

                                    <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-sign-out"></i> <strong>LOGOUT</strong></a>
                                </li>
                                <?php
                            } else {
                                ?>                            
                                <li class="nav-item mobile">
                                    <a class="nav-link" href="{{url('register')}}"><i class="fa fa-user"></i> <strong>REGISTER</strong></a>
                                </li>
                                <li class="nav-item mobile">
                                    <a class="nav-link" href="{{url('login')}}"><i class="fa fa-sign-in"></i> <strong>LOGIN</strong></a>
                                </li>
                                <?php
                            }
                            ?>
                    </ul>
                        </div>
                </nav>
            </div>
        </div>
                        <ul class="navbar-nav nav">
                            <?php
                            if ($user = Auth::user()) {
                                ?>
                                <li class="nav-item">

                                <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-sign-out"></i> <strong>退出</strong></a>
                                </li>
                                <?php
                            } else {
                                ?>                            
                                <li class="nav-item">
                                <a class="nav-link" href="{{url('register')}}"><i class="fa fa-user"></i> <strong>注册</strong></a>
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
    </div>
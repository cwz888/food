<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('admin/index')}}"><i class="fa fa-gear"></i> <strong>首页</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>管理员发送的信息</strong>
                                    <span class="pull-right text-muted">
                                        <em>时间</em>
                                    </span>
                                </div>
                                <div>......</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>更多消息</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> 订单
                                    <span class="pull-right text-muted small">订单生成时间</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>更多订单</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>个人信息</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> 信息设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> 退出登陆</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode"></i> 商户列表</a>
                    </li>
                    <li>
                        <a href="{{url('admin/add')}}"><i class="fa fa-qrcode"></i> 菜品添加</a>
                    </li>
                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> 菜品列表</a>
                    </li>
                    <li>
                        <a href="ui-elements.html"><i class="fa fa-desktop"></i> 评论列表</a>
                    </li>
					<li>
                        <a href=""><i class="fa fa-bar-chart-o"></i> 订单中心</a>
                    </li>


                    <li>
                        <a href="table.html"><i class="fa fa-table"></i> 我的资产</a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="form.html"><i class="fa fa-edit"></i> Forms </a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="#">Second Level Link</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Second Level Link</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Second Level Link<span class="fa arrow"></span></a>--}}
                                {{--<ul class="nav nav-third-level">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Link</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Link</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Link</a>--}}
                                    {{--</li>--}}

                                {{--</ul>--}}

                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>--}}
                    {{--</li>--}}


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            饕之客  食味餮 <small>味遇你 幸之又幸</small>
                        </h1>
                    </div>
                </div>
                <div>
                    <img src="{{asset('img/food.gif')}}" alt="500" width="1000">
                    <img src="{{asset('img/foods.gif')}}" alt="500" width="1000">
                </div>
				<footer>
                    <p>无解释权 &copy; <a href="JavaScript:" target="_blank" title="">饕客团队</a> - Made in China </p>
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	 
    <!-- Metis Menu Js -->
    <script src="{{asset('js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('js/morris/morris.js')}}"></script>
	
	
	<script src="{{asset('js/easypiechart.js')}}"></script>
	<script src="{{asset('js/easypiechart-data.js')}}"></script>
	
	 <script src="{{asset('js/Lightweight-Chart/jquery.chart.js')}}"></script>
	
    <!-- Custom Js -->
    <script src="{{asset('js/custom-scripts.js')}}"></script>
 

</body>

</html>
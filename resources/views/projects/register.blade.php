<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
    @yield('title')
    @yield('head')
    <meta name="keywords" content="艺乡建"/>
    <meta name="description" content="艺乡建"/>
    <meta name="applicable-device" content="pc">
    <meta name="renderer" content="webkit" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

   

    <!--首页使用的css文件-->
    <link id="css__index" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FA/BD/CgAGe1wQpieAPhvRAABHB2LIsYA056.css?d=28164619544" />
    <!--一级目录//二级目录 用的css文件-->  <!--可以把相应的css样式拿出来-->
    <link id="css__about" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzOAUKBOAAAhW5-s3D0032.css?d=28164628904" />

    <!--生态合伙人对应的css  用起来标题和文字间隔大-->
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzqAenvTAAAhfnKekwc302.css?d=28164649649" />
    <link rel="stylesheet" type="text/css" href="/css/header.css" />
    <link rel="bookmark" href="Images/logo.ico" />
    <link rel="shortcut icon" href="Images/logo.ico" />
    <link id="css__news" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/0A/67/CgAGe1w8AOGAE6PnAAAmlpwRy5o489.css?d=28164617841" />

    <!--加一个3*n用的css-->
    <link id="css__case" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzSANQljAAApkJrClzM466.css?d=28164629154" />

    <link id="css__down" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzeAagP6AAApZGK0Fps254.css?d=28164618982" />
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/verify.css">
    
    
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/font.css">
    
    
    
    <style>
        .nav-active {
            border-bottom: 1px solid white;
        }
    </style>

    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jqueryV173.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject_modified.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject.js"></script>

</head>
<body class="index_body">
    @include('layout/header')


    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/verify.js" ></script>

    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="/img/Exmple.jpg" alt="" />
            </div>
        </div>
    </div>
    <div id="ea_c">
        <div class="n_main" >
            <div id="n_content_right_name_r" class="n_content_right_name_r">
                <ul>
                    <li>
                        <span class="n_r_wz1">
                            <span name="_n_r_wz1">您现在的位置：</span>
                        </span>
                        <span class="n_r_wz2">
                            <a href="{{ route('home') }}">
                                <span name="_n_r_wz2">首页</span>
                            </a>
                        </span>
                        <span class="n_r_wz3">-</span>
                        <span class="n_r_wz4">
                            <span id='ShoveWebControl_Text_about'>
                                <a href="{{ route('projects.index', ['category_id' => 1]) }}" target="_self">执行案例</a>
                            </span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="{{ route('projects.register') }}" class="curr1">培训报名</a>
                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47175/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>
            </div>

            @if (session('success'))
                <br>
                <div class="container">
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <br>
            @elseif(session('fail'))
                <div class="container">
                    <div class="alert alert-warning" role="alert">
                        {{ session('fail') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <br>
        @endif

            <!--加粗的一级标题-->
            <div id="n_content_left_t" class="n_content_left_t">
                <div id="n_content_left_t1" class="n_content_left_t1">
                    <span id='n_content_left_t_data'>培训报名</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Registration training</span>
                </div>
            </div>

            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
                <form method="POST" action="{{ route('projects.register.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">姓名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">公司</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="company" name="company">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tel" class="col-sm-2 col-form-label">电话</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tel" name="phone" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tel" class="col-sm-2 col-form-label">验证码</label>
                        <div class="col-sm-7 col-form-label">
                            <!-- <div id="demo2"></div>-->
                            <div id="demo1"></div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10 text-center" style="position: relative ;left:100px">
                            <button type="submit" class="btn btn-primary ">提交报名信息</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--确保两页存在留白-->
    <div class="n_content" >
        <div class="n_content_left" >
        </div>
        <div class="n_content_right" >
            <div class="n_content_right_name" >
            </div>
            <div class="n_content_right_m" >
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>

    <script>
        console.log("控制台输出");
        $('#demo1').slideVerify({
            type : 1,		//类型
            vOffset : 5,	//误差量，根据需求自行调整
            barSize : {
                width : '80%',
                height : '40px',
            },
            ready : function() {
            },
            success : function() {
                //......后续操作
            },
            error : function() {
                //alert('验证失败！');
            }
        });
    </script>

    @include('layout/footer')
</body>
</html>

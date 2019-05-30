<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">


<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head><title></title>
    <meta name="applicable-device" content="pc"><meta name="renderer" content="webkit" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <link id="css__index" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FA/BD/CgAGe1wQpieAPhvRAABHB2LIsYA056.css?d=28164619544" />
    <link id="css__about" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzOAUKBOAAAhW5-s3D0032.css?d=28164628904" />
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzqAenvTAAAhfnKekwc302.css?d=28164649649" />

    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/verify.css">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/verify.js" ></script>

    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
</head>

<body class="index_body">
    <form name="form1" method="get" action="#" id="form1" NavigateId="1,index.html" Page="/index.aspx">
    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="" />
    <!--导航栏页面-->
    @include('layout/header')

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
                                            <a href="index.html">
                                            <span name="_n_r_wz2">首页</span>
                                            </a>
                                        </span>
                        <span class="n_r_wz3">-</span>
                        <span class="n_r_wz4">
                                            <span id='ShoveWebControl_Text_about'>
                                                <a href="ProductsSt_ggxq.html" target="_self">执行案例</a>
                                            </span>
                                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                                            <a href="ProductsSt_ggjk.html" class="curr1">艺乡建规划</a>
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
                    <div class="form-group row">
                        <div class="col-sm-10 text-center" style="position: relative ;left:100px">
                            <button type="submit" class="btn btn-primary ">报名</button>
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

        <script type="text/javascript">var xn_n_14_VMenu1={normal:{class1:'xn_n_14_wrap_menu1',class2:'xn_n_14_wrap_menu2',class3:'xn_n_14_wrap_menu3',class4:'xn_n_14_wrap_menu4',class5:'xn_n_14_wrap_menu5',class6:'xn_n_14_wrap_menu6'},visited:{class1:'xn_n_14_wrap_menu1_2',class2:'xn_n_14_wrap_menu2_2',class3:'xn_n_14_wrap_menu3_2',class4:'xn_n_14_wrap_menu4_2',class5:'xn_n_14_wrap_menu5_2',class6:'xn_n_14_wrap_menu6_2',class6:'xn_n_14_wrap_menu6_2'},home:{defaultClass:'xn_n_14_wrap_menu1',visitedClass:'xn_n_14_wrap_menu1_2'},content:{defaultClass:'',visitedClass:'',focusClass:''},focus:{class1:'xn_n_14_wrap_menu1_cur',class2:'xn_n_14_wrap_menu2_cur',class3:'xn_n_14_wrap_menu3_cur',class4:'xn_n_14_wrap_menu4_cur',class5:'xn_n_14_wrap_menu5_cur',class6:'xn_n_14_wrap_menu6_cur'},beforeTag:{packUpClass:'',packDownClass:''},expendEffect:1,aniEffect:3,fIdParam:'FId',topUlId:'xn_n_14_VMenu1',homeLiId:'type1Li_n0'};xn_n_14_VMenu1.menu=new BaseControlMenu();xn_n_14_VMenu1.menu.Init('xn_n_14_VMenu1',xn_n_14_VMenu1);xn_n_14_VMenu1.menu.InitMenu('type1Ul_n000',xn_n_14_VMenu1);</script>
    </form>
</body>
</html>


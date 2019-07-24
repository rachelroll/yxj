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




    <!--生态合伙人对应的css  用起来标题和文字间隔大-->
    <!--css  products 确保banner-->
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzqAenvTAAAhfnKekwc302.css?d=28164649649" />
    <link rel="stylesheet" type="text/css" href="/css/header.css" />
    <link rel="bookmark" href="Images/logo.ico" />
    <link rel="shortcut icon" href="Images/logo.ico" />

    <!--加一个3*n用的css-->
     <link id="css__case_view" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzSAKJDfAAAoWlWT04Q144.css?d=28164629733" />

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
<body class="case_view_body">





@include('layout/header')


    <div id="ea_ba">
        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="/img/TownShipVision.jpg" alt="" />
                <p >TOWNSHIP <strong>VISION</strong></p>
                <p class="chinese">乡建视野</p>
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
                            <span id='ShoveWebControl_Text_about'><a href="" target="_self">乡建视野</a></span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="" class="clas2">办公室</a>
                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47177/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>
            </div>

            @yield('office_detail')
        </div>
        <div id="cview_complex_sidebar" class="cview_complex_sidebar">
        </div>
        <div id="cview_complex_content" class="cview_complex_content">
        </div>
    </div>

    <!--页尾--><!--联系方式-->
    @include('layout/footer')

    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/71/CgAGe1wjF1CAZ8hJAAAKvZYIEes9834.js?d=28164629763" id="js__case_view"></script>


</body>
</html>

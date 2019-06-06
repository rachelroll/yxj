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

    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/font.css">
    
    <!--首页使用的css文件-->
    <link id="css__index" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FA/BD/CgAGe1wQpieAPhvRAABHB2LIsYA056.css?d=28164619544" />
    <!--一级目录//二级目录 用的css文件-->  <!--可以把相应的css样式拿出来-->
    <link id="css__about" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzOAUKBOAAAhW5-s3D0032.css?d=28164628904" />

    <!--生态合伙人对应的css  用起来标题和文字间隔大-->
    <link id="css__products" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzqAenvTAAAhfnKekwc302.css?d=28164649649" />
    <link rel="bookmark" href="Images/logo.ico" />
    <link rel="shortcut icon" href="Images/logo.ico" />
    <link id="css__news" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/0A/67/CgAGe1w8AOGAE6PnAAAmlpwRy5o489.css?d=28164617841" />

    <!--加一个3*n用的css-->
    <link id="css__case" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzSANQljAAApkJrClzM466.css?d=28164629154" />

    <link id="css__down" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzeAagP6AAApZGK0Fps254.css?d=28164618982" />

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

    @yield('content')

    @include('layout/footer')
</body>
</html>






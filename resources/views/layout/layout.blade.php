<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="城市品牌,城市战略,城市规划,特色小镇,田园综合体,城乡改造"/>
    <meta name="description"
          content="艺乡建"/>
    <meta name="applicable-device" content="pc">
    <meta name="renderer" content="webkit"/>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <link id="css__index" rel="stylesheet" type="text/css"
          href="https://0.rc.xiniu.com/g2/M00/FA/BD/CgAGe1wQpieAPhvRAABHB2LIsYA056.css?d=28164619544"/>
    <link rel="bookmark" href="Images/logo.ico"/>
    <link rel="shortcut icon" href="Images/logo.ico"/>

    <script type="text/javascript">var _jtime = new Date();
        function jqload() {
            window.jLoad = new Date() - _jtime;
        }

        function jqerror() {
            window.jLoad = -1;
        }</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jqueryV173.js" onload="jqload()"
            onerror="jqerror()" id="jquery"></script>
    <script type = "text/javascript"
    src = "https://1.rc.xiniu.com/js/pb/2/Public.js" ></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject_modified.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject.js"></script>



    @yield('style')
    <title>艺乡建官方网站</title>
</head>
<body>
{{--@include('partial.header')--}}
<div class="container">
    @yield('content')
</div>
{{--@yield('footer')--}}

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

@yield('js')
@yield('js2')


</body>
</html>
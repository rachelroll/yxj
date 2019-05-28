<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
    @yield('title')
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
    <link rel="bookmark" href="Images/logo.ico" />
    <link rel="shortcut icon" href="Images/logo.ico" />

    <link id="css__news" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/0A/67/CgAGe1w8AOGAE6PnAAAmlpwRy5o489.css?d=28164617841" />

    <!--加一个3*n用的css-->
    <link id="css__case" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzSANQljAAApkJrClzM466.css?d=28164629154" />

    <link id="css__down" rel="stylesheet" type="text/css" href="https://0.rc.xiniu.com/g2/M00/FB/C1/CgAGe1wTCzeAagP6AAApZGK0Fps254.css?d=28164618982" />

    <script type="text/javascript">var _jtime=new Date();function jqload(){window.jLoad=new Date()-_jtime;}function jqerror(){window.jLoad=-1;}</script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/jq/jqueryV173.js" onload="jqload()" onerror="jqerror()" id="jquery"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/pb/2/Public.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject_modified.js"></script>
    <script type="text/javascript" src="https://1.rc.xiniu.com/js/tl/swfobject.js"></script>

</head>
<body class="index_body">
<form name="form1" method="get" action="#" id="form1" NavigateId="1,index.html" Page="/index.aspx">
    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="" />
    <div id="ea_h">
        <div class="top" >
            <div class="t_t" >

                <div id="t_logo" class="t_logo">

                    <div id="ea_l"><h1><a href="index.html" target="_self"><img  src="/img/logo.png" alt=""/></a></h1></div>
                </div>
            </div>
            <div id="ea_n">
                <div id="xn_n_14_wrap" class="xn_n_14_wrap">
                    <div class="xn_n_14_wrap_main">
                        <ul id="xn_n_14_VMenu1" class="type1Ul type1Ul_n000">
                            <li id="type1Li_n0" level=0 index=0 class="xn_n_14_wrap_menu1">
                                <a href="/" target="_self" >网站首页</a>
                            </li>
                            <li id="type1Li_n2" level=0 data_id="2" type="n" index=1 class="xn_n_14_wrap_menu1">
                                <a href="{{ route('aboutUs') }}" target="_self"><span name="xn_n_14_VMenu11199402017|T_Navigates|Id|2|Name">研究中心</span></a><ul id="type1Ul_t201" style="display:none" class="type1Ul type1Ul_t201">
                                    <li id="type1Li_t201_1" data_id="2_5" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="{{ route('aboutUs') }}" target="_self"><span name="xn_n_14_VMenu12084926113|T_NewsTypes|Id|5|Name">关于我们</span></a>
                                    </li>
                                    <li id="type1Li_t201_2" data_id="2_4" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="{{ route('researchTeam') }}" target="_self"><span name="xn_n_14_VMenu1544481522|T_NewsTypes|Id|4|Name">研究团队</span></a>
                                    </li>
                                    <li id="type1Li_t201_3" data_id="2_5" class="xn_n_14_wrap_menu2" type="t" index=3 level=1><a href="{{ route('researchContent') }}" target="_self"><span name="xn_n_14_VMenu12084926113|T_NewsTypes|Id|5|Name">研究内容</span></a>
                                    </li>
                                    <li id="type1Li_t201_4" data_id="2_4" class="xn_n_14_wrap_menu2" type="t" index=4 level=1><a href="{{ route('researchActivity') }}" target="_self"><span name="xn_n_14_VMenu1544481522|T_NewsTypes|Id|4|Name">社会活动</span></a>
                                    </li>
                                    <li id="type1Li_t201_5" data_id="2_5" class="xn_n_14_wrap_menu2" type="t" index=5 level=1><a href="{{ route('researchYearbook') }}" target="_self"><span name="xn_n_14_VMenu1544481522|T_NewsTypes|Id|4|Name">艺乡建年鉴</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li id="type1Li_n25" level=0 data_id="25" type="n" index=2 class="xn_n_14_wrap_menu1">
                                <a href="{{ route('themes-village') }}" target="_self"><span name="xn_n_14_VMenu1534444652|T_Navigates|Id|25|Name">建设主题</span></a><ul id="type1Ul_t2501" style="display:none" class="type1Ul type1Ul_t2501">
                                    <li id="type1Li_t2501_1" data_id="25_180" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="{{ route('themes-village') }}" target="_self"><span name="xn_n_14_VMenu12050772641|T_NewsTypes|Id|180|Name">乡村风貌格局</span></a>
                                    </li>
                                    <li id="type1Li_t2501_2" data_id="25_181" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="{{ route('themes-art-system') }}" target="_self"><span name="xn_n_14_VMenu11399543004|T_NewsTypes|Id|181|Name">公共艺术系统</span></a>
                                    </li>
                                    <li id="type1Li_t2501_3" data_id="25_181" class="xn_n_14_wrap_menu2" type="t" index=3 level=1><a href="{{ route('themes-industry-system') }}" target="_self"><span name="xn_n_14_VMenu11399543004|T_NewsTypes|Id|181|Name">艺术产业体系</span></a>
                                    </li>
                                    <li id="type1Li_t2501_4" data_id="25_181" class="xn_n_14_wrap_menu2" type="t" index=4 level=1><a href="{{ route('themes-towns-path') }}" target="_self"><span name="xn_n_14_VMenu11399543004|T_NewsTypes|Id|181|Name">艺术乡振路径</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li id="type1Li_n4" level=0 data_id="4" type="n" index=3 class="xn_n_14_wrap_menu1">
                                <a href="Exmple_yxjgh_gngh.html" target="_self"><span name="xn_n_14_VMenu1348511800|T_Navigates|Id|4|Name">执行案例</span></a><ul id="type1Ul_t401" style="display:none" class="type1Ul type1Ul_t401">
                                    <li id="type1Li_t401_1" data_id="4_30" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="Exmple_yxjgh_gngh.html" target="_self"><span name="xn_n_14_VMenu12023186808|T_NewsTypes|Id|30|Name">艺乡建规划</span></a>
                                    </li>
                                    <li id="type1Li_t401_2" data_id="4_140" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="Exmple_yxjxd.html" target="_self"><span name="xn_n_14_VMenu1119744234|T_NewsTypes|Id|140|Name">艺乡建行动</span></a>
                                    </li>
                                    <li id="type1Li_t401_3" data_id="4_140" class="xn_n_14_wrap_menu2" type="t" index=3 level=1><a href="Exmple_yxjpx.html" target="_self"><span name="xn_n_14_VMenu1119744234|T_NewsTypes|Id|140|Name">艺乡建培训</span></a>
                                    </li>
                                    <li id="type1Li_t401_4" data_id="4_140" class="xn_n_14_wrap_menu2" type="t" index=4 level=1><a href="Exmple_aljs.html" target="_self"><span name="xn_n_14_VMenu1119744234|T_NewsTypes|Id|140|Name">案例检索</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li id="type1Li_n3" level=0 data_id="3" type="n" index=4 class="xn_n_14_wrap_menu1">
                                <a href="{{ route('platform-committee') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1280976392|T_Navigates|Id|3|Name">平台资源</span></a><ul id="type1Ul_t301" style="display:none" class="type1Ul type1Ul_t301">
                                    <li id="type1Li_t301_1" data_id="3_67" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="{{ route('platform-committee') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11187967790|T_ProductTypes|Id|67|Name">项目决策委员会</span></a>
                                    </li>
                                    <li id="type1Li_t301_2" data_id="3_66" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="{{ route('platform-consultant') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11428035801|T_ProductTypes|Id|66|Name">资助顾问</span></a>
                                    </li>
                                    <li id="type1Li_t301_3" data_id="3_68" class="xn_n_14_wrap_menu2" type="t" index=3 level=1><a href="{{ route('platform-partner') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11775131821|T_ProductTypes|Id|68|Name">合作伙伴</span></a>
                                    </li>
                                    <li id="type1Li_t301_4" data_id="3_69" class="xn_n_14_wrap_menu2" type="t" index=4 level=1><a href="{{ route('platform-club') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1898815533|T_ProductTypes|Id|69|Name">俱乐部</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li id="type1Li_n27" level=0 data_id="27" type="n" index=5 class="xn_n_14_wrap_menu1">
                                <a href="{{ route('view-internal-office') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1422393226|T_Navigates|Id|27|Name">乡建视野</span></a><ul id="type1Ul_t2701" style="display:none" class="type1Ul type1Ul_t2701">
                                    <li id="type1Li_t2701_1" data_id="27_143" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="{{ route('view-internal-office') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11478336278|T_NewsTypes|Id|143|Name">国内办公室</span></a>
                                    </li>
                                    <li id="type1Li_t2701_2" data_id="27_143" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="{{ route('view-overseas-office') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11478336278|T_NewsTypes|Id|143|Name">国外办公室</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li id="type1Li_n1" level=0 data_id="1" type="n" index=6 class="xn_n_14_wrap_menu1">
                                <a href="News_jgdt.html" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1349622608|T_Navigates|Id|1|Name">资讯</span></a><ul id="type1Ul_t101" style="display:none" class="type1Ul type1Ul_t101">
                                    <li id="type1Li_t101_1" data_id="1_1" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="News_jgdt.html" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1772242264|T_NewsTypes|Id|1|Name">机构动态</span></a>
                                    </li>
                                    <li id="type1Li_t101_2" data_id="1_2" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="News_xmbd.html" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11814633233|T_NewsTypes|Id|2|Name">项目报道</span></a>
                                    </li>
                                    </li>
                                    <!--由专栏改名为乡建观察-->
                                    <li id="type1Li_t101_5" data_id="1_141" class="xn_n_14_wrap_menu2" type="t" index=5 level=1><a href="News_zl.html" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11114909043|T_NewsTypes|Id|141|Name">乡建观察</span></a>
                                    </li>
                                    <li id="type1Li_t101_6" data_id="1_3" class="xn_n_14_wrap_menu2" type="t" index=6 level=1><a href="News_hzfzx.html" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1530406057|T_NewsTypes|Id|3|Name">合作方资讯</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li id="type1Li_n7" level=0 data_id="7" type="n" index=7 class="xn_n_14_wrap_menu1">
                                <a href="JoinUs_lxwm.html" rel="nofollow" target="_self">
                                    <span name="xn_n_14_VMenu11774742020|T_Navigates|Id|7|Name">联系我们</span></a><ul id="type1Ul_t701" style="display:none" class="type1Ul type1Ul_t701">
                                    {{--<li id="type1Li_t701_1" data_id="7_13" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="JoinUs_lxwm.html" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11070449284|T_NewsTypes|Id|13|Name">联系我们</span></a>--}}
                                    {{--</li>--}}
                                </ul>
                            </li>
                        </ul>
                        <script type="text/javascript">var xn_n_14_VMenu1={normal:{class1:'xn_n_14_wrap_menu1',class2:'xn_n_14_wrap_menu2',class3:'xn_n_14_wrap_menu3',class4:'xn_n_14_wrap_menu4',class5:'xn_n_14_wrap_menu5',class6:'xn_n_14_wrap_menu6'},visited:{class1:'xn_n_14_wrap_menu1_2',class2:'xn_n_14_wrap_menu2_2',class3:'xn_n_14_wrap_menu3_2',class4:'xn_n_14_wrap_menu4_2',class5:'xn_n_14_wrap_menu5_2',class6:'xn_n_14_wrap_menu6_2',class6:'xn_n_14_wrap_menu6_2'},home:{defaultClass:'xn_n_14_wrap_menu1',visitedClass:'xn_n_14_wrap_menu1_2'},content:{defaultClass:'',visitedClass:'',focusClass:''},focus:{class1:'xn_n_14_wrap_menu1_cur',class2:'xn_n_14_wrap_menu2_cur',class3:'xn_n_14_wrap_menu3_cur',class4:'xn_n_14_wrap_menu4_cur',class5:'xn_n_14_wrap_menu5_cur',class6:'xn_n_14_wrap_menu6_cur'},beforeTag:{packUpClass:'',packDownClass:''},expendEffect:1,aniEffect:3,fIdParam:'FId',topUlId:'xn_n_14_VMenu1',homeLiId:'type1Li_n0'};xn_n_14_VMenu1.menu=new BaseControlMenu();xn_n_14_VMenu1.menu.Init('xn_n_14_VMenu1',xn_n_14_VMenu1);xn_n_14_VMenu1.menu.InitMenu('type1Ul_n000',xn_n_14_VMenu1);</script>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @yield('content')
</form>

<!--页尾--><!--联系方式-->
<div id="ea_b">
    <div class="foot" >
        <div class="foot_c" >

            <div class="foot_box" id="foot_box" >

                <div id="foot_tel" class="foot_tel">
                    <div class="foot_tel_f">
                        <div class="foot_company">
                            <span name="_foot_tel3|" >&nbsp;</span>
                        </div>
                        <div class="foot_add">
                            <span name="_foot_tel1|" ><font size="3">地址：中国·北京·朝阳区东四环中路大成国际中心写字楼B2-0526 </font></span>
                        </div>
                        <div class="foot_phone">
                            <span name="_foot_tel2|" ><font size="3">电话：010-59626463 18301573107</font></span>
                        </div>
                        <div style="width:300px;margin:0 0; padding:20px 0;"></div>

                    </div>

                </div>


                <div id="foot_fx" class="foot_fx">
                    <div id="bdshare" class="bdsharebuttonbox">
                        <a rel='nofollow' href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a rel='nofollow' href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        <a rel='nofollow' href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    </div>
                    <script type="text/javascript">window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "0", "bdSize": "16" }, "share": {} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=86835285.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
                </div>
                <div class="foot_ewm" id="foot_ewm" >
                    <img src="/img/ewm.png">
                    <p>
                        <span name="_foot_ewm|">扫码关注公众号</span>
                    </p>
                </div>
                <div id="foot_nav2" class="foot_nav2">
                    <ul id="ShoveWebControl_VMenu4" class="foot_type2Ul foot_type2Ul_n000">
                        <li id="foot_type2Li_n0" level=0 index=0 class=""><a href="index.html" target="_self" >首页</a></li>
                        <li id="foot_type2Li_n2" level=0 data_id="2" type="n" index=1 class="">
                            <a href="ResearchCenter_gywm.html" target="_self"><span name="ShoveWebControl_VMenu4742724384|T_Navigates|Id|2|Name">研究中心</span></a></li>
                        <li id="foot_type2Li_n25" level=0 data_id="25" type="n" index=2 class="">
                            <a href="ConstructionTheme_xcfmgj.html" target="_self"><span name="ShoveWebControl_VMenu4561697075|T_Navigates|Id|25|Name">建设主题</span></a></li>
                        <li id="foot_type2Li_n4" level=0 data_id="4" type="n" index=3 class="">
                            <a href="Exmple_yxjgh_gngh.html" target="_self"><span name="ShoveWebControl_VMenu41631118472|T_Navigates|Id|4|Name">执行案例</span></a></li>
                        <li id="foot_type2Li_n3" level=0 data_id="3" type="n" index=4 class="">
                            <a href="Resourse_xmjcwyh.html" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu41132593381|T_Navigates|Id|3|Name">平台资源</span></a></li>
                        <li id="foot_type2Li_n27" level=0 data_id="27" type="n" index=5 class="">
                            <a href="View_gnbgs.html" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu4455471716|T_Navigates|Id|27|Name">乡建视野</span></a></li>
                        <li id="foot_type2Li_n1" level=0 data_id="1" type="n" index=6 class="">
                            <a href="News_jgdt.html" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu41249476791|T_Navigates|Id|1|Name">咨询</span></a></li>
                        <li id="foot_type2Li_n7" level=0 data_id="7" type="n" index=7 class="">
                            <a href="JoinUs_lxwm.html" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu4441751923|T_Navigates|Id|7|Name">联系我们</span></a></li>
                    </ul>
                    <script type="text/javascript">var ShoveWebControl_VMenu4={normal:{class1:'',class2:'',class3:'',class4:'',class5:'',class6:''},visited:{class1:'',class2:'',class3:'',class4:'',class5:'',class6:'',class6:''},home:{defaultClass:'',visitedClass:''},content:{defaultClass:'',visitedClass:'',focusClass:''},focus:{class1:'',class2:'',class3:'',class4:'',class5:'',class6:''},beforeTag:{packUpClass:'',packDownClass:''},expendEffect:1,aniEffect:1,fIdParam:'FId',topUlId:'ShoveWebControl_VMenu4',homeLiId:'foot_type2Li_n0'};ShoveWebControl_VMenu4.menu=new BaseControlMenu();ShoveWebControl_VMenu4.menu.Init('ShoveWebControl_VMenu4',ShoveWebControl_VMenu4);;</script>
                </div>
            </div>

            <!--我们暂时先不放了
            <div class="foot_box1" id="foot_box1" >
            <div id="foot_copy" class="foot_copy">
                    <div class="foot_copy_name">
                        <span name="_foot_copy1|" >Copyright ©2018 - 2021<font size="3"> 光合集团</font></span>
                    </div>
                    <div class="foot_sitemap">
                        <a href="kfszd.html" target="_blank">
                            <span name="_foot_copy3|">网站地图</span>
                        </a>
                    </div>
                    <div class="foot_copy_ba">
                        <a rel="nofollow" href="http://www.miitbeian.gov.cn" target="_blank">
                            <span name="_foot_copy2|" >京ICP备19002531号-1</span>
                        </a>
                    </div>
                   <div class="foot_copy_ba"><a href="siteMap.html" class="foot_copy_map" target="_blank">&nbsp;&nbsp;网站地图</a></div>
                   <div class="foot_copy_ba"><span class="xn_brand" >犀牛云提供企业云服务</span></div> </div>
            </div>-->
        </div>
    </div>
</div>
</body>
</html>






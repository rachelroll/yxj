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
                        @if($_SERVER['REQUEST_URI'] == '/')
                        <li id="type1Li_n0" level=0 index=0 class="xn_n_14_wrap_menu1" style="border-bottom: 1px solid white">
                            @else
                            <li id="type1Li_n0" level=0 index=0 class="xn_n_14_wrap_menu1">
                                @endif
                            <a href="/" target="_self" >网站首页</a>
                        </li>

                        @if($_SERVER['REQUEST_URI'] == '/about-us')
                        <li id="type1Li_n2" level=0 data_id="2" type="n" index=1 class="xn_n_14_wrap_menu1" style="border-bottom: 1px solid white">
                            @else
                             <li id="type1Li_n2" level=0 data_id="2" type="n" index=1 class="xn_n_14_wrap_menu1">
                             @endif
                            <a href="{{ route('aboutUs') }}" target="_self">
                                <span name="xn_n_14_VMenu11199402017|T_Navigates|Id|2|Name">研究中心</span>
                            </a><ul id="type1Ul_t201" style="display:none" class="type1Ul type1Ul_t201">
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
                        @if($_SERVER['REQUEST_URI'] == '/themes-village')
                        <li id="type1Li_n25" level=0 data_id="25" type="n" index=2 class="xn_n_14_wrap_menu1" style="border-bottom: 1px solid white">
                        @else
                        <li id="type1Li_n25" level=0 data_id="25" type="n" index=2 class="xn_n_14_wrap_menu1">
                        @endif
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
                        @if($_SERVER['REQUEST_URI'] == 'projects/category/1')
                        <li id="type1Li_n4" level=0 data_id="4" type="n" index=3 class="xn_n_14_wrap_menu1">
                        @else
                        <li id="type1Li_n4" level=0 data_id="4" type="n" index=3 class="xn_n_14_wrap_menu1">
                        @endif
                            <a href="{{ route('projects.index', ['category_id' => 1]) }}" target="_self"><span name="xn_n_14_VMenu1348511800|T_Navigates|Id|4|Name">执行案例</span></a><ul id="type1Ul_t401" style="display:none" class="type1Ul type1Ul_t401">
                                <li id="type1Li_t401_1" data_id="4_30" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="{{ route('projects.index', ['category_id' => 1]) }}" target="_self"><span name="xn_n_14_VMenu12023186808|T_NewsTypes|Id|30|Name">艺乡建规划</span></a>
                                </li>
                                <li id="type1Li_t401_2" data_id="4_140" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="{{ route('projects.index', ['category_id' => 6]) }}" target="_self"><span name="xn_n_14_VMenu1119744234|T_NewsTypes|Id|140|Name">艺乡建行动</span></a>
                                </li>
                                <li id="type1Li_t401_3" data_id="4_140" class="xn_n_14_wrap_menu2" type="t" index=3 level=1><a href="{{ route('projects.index', ['category_id' => 22]) }}" target="_self"><span name="xn_n_14_VMenu1119744234|T_NewsTypes|Id|140|Name">艺乡建培训</span></a>
                                </li>
                                <li id="type1Li_t401_4" data_id="4_140" class="xn_n_14_wrap_menu2" type="t" index=4 level=1><a href="{{ route('aljs') }}" target="_self"><span name="xn_n_14_VMenu1119744234|T_NewsTypes|Id|140|Name">案例检索</span></a>
                                </li>
                            </ul>
                        </li>
                        @if($_SERVER['REQUEST_URI'] == '/platform-committee')
                        <li id="type1Li_n3" level=0 data_id="3" type="n" index=4 class="xn_n_14_wrap_menu1" style="border-bottom: 1px solid white">
                        @else
                        <li id="type1Li_n3" level=0 data_id="3" type="n" index=4 class="xn_n_14_wrap_menu1">
                        @endif
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
                        @if($_SERVER['REQUEST_URI'] == '/')
                        <li id="type1Li_n27" level=0 data_id="27" type="n" index=5 class="xn_n_14_wrap_menu1" style="border-bottom: 1px solid white">
                        @else
                        <li id="type1Li_n27" level=0 data_id="27" type="n" index=5 class="xn_n_14_wrap_menu1">
                        @endif
                            <a href="{{ route('view-internal-office') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1422393226|T_Navigates|Id|27|Name">乡建视野</span></a><ul id="type1Ul_t2701" style="display:none" class="type1Ul type1Ul_t2701">
                                <li id="type1Li_t2701_1" data_id="27_143" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="{{ route('view-internal-office') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11478336278|T_NewsTypes|Id|143|Name">国内办公室</span></a>
                                </li>
                                <li id="type1Li_t2701_2" data_id="27_143" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="{{ route('view-overseas-office') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11478336278|T_NewsTypes|Id|143|Name">国外办公室</span></a>
                                </li>
                            </ul>
                        </li>
                        @if
                        <li id="type1Li_n1" level=0 data_id="1" type="n" index=6 class="xn_n_14_wrap_menu1">
                        @else
                        <li id="type1Li_n1" level=0 data_id="1" type="n" index=6 class="xn_n_14_wrap_menu1">
                        @endif
                            <a href="{{ route('news-list', ['category_id' => 1]) }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1349622608|T_Navigates|Id|1|Name">资讯</span></a><ul id="type1Ul_t101" style="display:none" class="type1Ul type1Ul_t101">
                                <li id="type1Li_t101_1" data_id="1_1" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="{{ route('news-list', ['category_id' => 1]) }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1772242264|T_NewsTypes|Id|1|Name">机构动态</span></a>
                                </li>
                                <li id="type1Li_t101_2" data_id="1_2" class="xn_n_14_wrap_menu2" type="t" index=2 level=1><a href="{{ route('news-list', ['category_id' => 2]) }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11814633233|T_NewsTypes|Id|2|Name">项目报道</span></a>
                                </li>
                                </li>
                                <!--由专栏改名为乡建观察-->
                                <li id="type1Li_t101_5" data_id="1_141" class="xn_n_14_wrap_menu2" type="t" index=5 level=1><a href="{{ route('news-list', ['category_id' => 3]) }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11114909043|T_NewsTypes|Id|141|Name">乡建观察</span></a>
                                </li>
                                <li id="type1Li_t101_6" data_id="1_3" class="xn_n_14_wrap_menu2" type="t" index=6 level=1><a href="{{ route('news-list', ['category_id' => 4]) }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu1530406057|T_NewsTypes|Id|3|Name">最新动态</span></a>
                                </li>
                            </ul>
                        </li>
                        <li id="type1Li_n7" level=0 data_id="7" type="n" index=7 class="xn_n_14_wrap_menu1">
                            <a href="{{ route('contact') }}" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11774742020|T_Navigates|Id|7|Name">联系我们</span></a><ul id="type1Ul_t701" style="display:none" class="type1Ul type1Ul_t701">
                                {{--<li id="type1Li_t701_1" data_id="7_13" class="xn_n_14_wrap_menu2" type="t" index=1 level=1><a href="JoinUs_lxwm.html" rel="nofollow" target="_self"><span name="xn_n_14_VMenu11070449284|T_NewsTypes|Id|13|Name">联系我们</span></a>--}}
                                {{--</li>--}}
                            </ul>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        var xn_n_14_VMenu1={
                            normal:{
                                class1:'xn_n_14_wrap_menu1',
                                class2:'xn_n_14_wrap_menu2',
                                class3:'xn_n_14_wrap_menu3',
                                class4:'xn_n_14_wrap_menu4',
                                class5:'xn_n_14_wrap_menu5',
                                class6:'xn_n_14_wrap_menu6'
                            },
                            visited:{
                                class1:'xn_n_14_wrap_menu1_2',
                                class2:'xn_n_14_wrap_menu2_2',
                                class3:'xn_n_14_wrap_menu3_2',
                                class4:'xn_n_14_wrap_menu4_2',
                                class5:'xn_n_14_wrap_menu5_2',
                                class6:'xn_n_14_wrap_menu6_2',
                            },
                            home:{
                                // defaultClass:'xn_n_14_wrap_menu1',
                                visitedClass:'xn_n_14_wrap_menu1_2'
                            },
                            content:{
                                defaultClass:'',
                                visitedClass:'',
                                focusClass:''
                            },
                            focus:{
                                class1:'xn_n_14_wrap_menu1_cur',
                                class2:'xn_n_14_wrap_menu2_cur',
                                class3:'xn_n_14_wrap_menu3_cur',
                                class4:'xn_n_14_wrap_menu4_cur',
                                class5:'xn_n_14_wrap_menu5_cur',
                                class6:'xn_n_14_wrap_menu6_cur'
                            },
                            beforeTag:{
                                packUpClass:'',
                                packDownClass:''
                            },
                            expendEffect:1,
                            aniEffect:3,
                            fIdParam:'FId',
                            topUlId:'xn_n_14_VMenu1',
                            homeLiId:'type1Li_n0'
                        };
                        xn_n_14_VMenu1.menu=new BaseControlMenu();
                        xn_n_14_VMenu1.menu.Init('xn_n_14_VMenu1',xn_n_14_VMenu1);
                        xn_n_14_VMenu1.menu.InitMenu('type1Ul_n000',xn_n_14_VMenu1);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
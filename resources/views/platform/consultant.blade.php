@extends('layout/layout')
@section('title')
    <title>
        资助顾问
    </title>
@endsection

@section('content')

    <div id="ea_ba">

        <div id="products_banner" class="products_banner">
            <div class="products_banner_m">
                <img  src="img/PlantForm.jpg" alt="" />
                <p>PLATPLATFORM <strong>RESOURCES</strong></p>
                <p class="chinese">平台资源</p>



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
                                            <span id='ShoveWebControl_Text_about'><a href="{{ route('platform-committee') }}" target="_self">平台资源</a></span>
                                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                                            <a href="" class="curr1">资助顾问</a>
                                        </span>
                    </li>
                    <li>
                        <img src="https://1.rc.xiniu.com/rc/Contents/47175/Images/icpsp1_n_right_wz.png" alt="" />
                    </li>
                </ul>

            </div>

            <!--下面的都是ea_c中的而可选项-->

            <!--加粗的一级标题-->
            <div id="n_content_left_t" class="n_content_left_t">
                <div id="n_content_left_t1" class="n_content_left_t1">
                    <span id='n_content_left_t_data'>资助顾问</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Financial adviser</span>
                </div>
            </div>

            <!--简单的一级目录原型-->
            <div id="n_content_left_cnt" class="n_content_left_cnt">
                <ul id="ShoveWebControl_VMenu2" class="left_typeUl left_typeUl_n000" >
                    <ul id="left_typeUl_t100" class="left_typeUl left_typeUl_t100">
                        <li id="left_typeLi_t100_1" data_id="1_1" class="left_menu1" type="t" index=1 level=0>
                            <a href="{{ route('platform-committee') }}" rel="nofollow" target="_self">
                                <span name="ShoveWebControl_VMenu22134030082|T_NewsTypes|Id|1|Name"style="font-size:20px;">项目决策委员会</span>
                            </a>
                        </li>
                        <li id="left_typeLi_t100_2" data_id="1_2" class="left_menu1 @if(request()->fullUrl() == route('platform-consultant')) left_menu1_cur @endif" type="t" index=2 level=0>
                            <a href="{{route('platform-consultant')}}" rel="nofollow" target="_self">
                                <span name="ShoveWebControl_VMenu21609884532|T_NewsTypes|Id|2|Name"style="font-size:20px;">资助顾问</span>
                            </a>
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1" type="t" index=3 level=0><a href="{{ route('platform-partner') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name"style="font-size:20px;">合作伙伴</span></a>
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1" type="t" index=3 level=0><a href="{{ route('platform-club') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name"style="font-size:20px;">俱乐部</span></a>
                        </li>
                    </ul>
                </ul>
            </div>

            <!--简单的图文竖版,可以插入图片-->

            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">

                <div class="xn_c_products_2_text">
                    <p class="p3">资助顾问</p>
                    <p style="height: 10px;"></p>
                    <p class="p1">为了更好地陪伴初创的艺乡建创业团队成长，“艺乡建计划”团队特别邀请了全国各地乡建艺术及相关专家、教授成为我们的“项目资助顾问”。他们将作为“星探”挖掘和推荐本地或者自己熟悉的乡建团队建设；向合适的地区和个人推介“艺乡建计划”； 受邀和项目组一起参与初选；并将持续关注、跟进、支持获得资助的“艺乡建计划”。</p>
                    <br>


                    <p class="p3">项目进度</p>
                    <p style="height: 10px">
                    <p clsss="p2">新时代下的中国文旅探索</p>
                    <p clsss="p2">中国人民大学艺术振兴乡村建设高峰论坛</p>
                    <p clsss="p2">国家发展改革委规划司召开 2019年全国特色小镇现场经验交流会</p>
                    <p clsss="p2">人民大学教授遇上乡村小乡村！12天，焕然一新！</p>
                    <p clsss="p2">“艺乡建”云南联合研究基地正式成立</p>
                    <p clsss="p2">神农架远山儿童村项目北京座谈会</p>
                    <p clsss="p2">小芝麻 大乾坤“乡村振兴背景下芝麻产业发展模式研究”研讨会</p>
                    <p clsss="p2">用心写爱，让爱发声——神农架远山儿童村项目正式启动</p>
                    <p clsss="p2">七大行动！高校服务乡村振兴战略要这么做</p>
                    <p clsss="p2">艺术振兴乡村途径研究与实践</p>
                    <p clsss="p2">尚逸|婺源云何堂</p>




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










        </div>
    </div>

    <input type="hidden" id="pageId" value="1" />
    <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>


@endsection














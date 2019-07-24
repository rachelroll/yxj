@extends('layout/layout')
@section('title')
    <title>
        俱乐部
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
                            <span id='{{ route('platform-committee') }}'><a href="ProductsSt_ggxq.html" target="_self">平台资源</a>
                            </span>
                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                            <a href="" class="curr1">俱乐部</a>
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
                    <span id='n_content_left_t_data'>俱乐部</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>Club</span>
                </div>
            </div>

            <!--简单的一级目录原型-->
            <div id="n_content_left_cnt" class="n_content_left_cnt">
                <ul id="ShoveWebControl_VMenu2" class="left_typeUl left_typeUl_n000" >
                    <ul id="left_typeUl_t100" class="left_typeUl left_typeUl_t100">
                        <li id="left_typeLi_t100_1" data_id="1_1" class="left_menu1 @if(request()->fullUrl() == route('platform-committee')) left_menu1_cur @endif" type="t" index=1 level=0>
                            <a href="{{ route('platform-committee') }}" rel="nofollow" target="_self">
                                <span name="ShoveWebControl_VMenu22134030082|T_NewsTypes|Id|1|Name" style="font-size:20px;">项目决策委员会</span>
                            </a>
                        </li>
                        <li id="left_typeLi_t100_2" data_id="1_2" class="left_menu1" type="t" index=2 level=0>
                            <a href="{{route('platform-consultant')}}" rel="nofollow" target="_self">
                                <span name="ShoveWebControl_VMenu21609884532|T_NewsTypes|Id|2|Name"style="font-size:20px;">资助顾问</span>
                            </a>
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1" type="t" index=3 level=0><a href="{{ route('platform-partner') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name"style="font-size:20px;">合作伙伴</span></a>
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1 @if(request()->fullUrl() == route('platform-club')) left_menu1_cur @endif" type="t" index=3 level=0><a href="{{ route('platform-club') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name"style="font-size:20px;">俱乐部</span></a>
                        </li>
                    </ul>
                </ul>
            </div>

            <!--简单的图文竖版,可以插入图片-->
            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">

                <div class="xn_c_products_2_text">


                    <p class="p1">艺乡建俱乐部支持机构、个人以及各个类型的团队参与其中，感受生活，体验乡建视野，感受乡建魅力。艺乡建将会通过专业的支持性服务，帮助乡建乡村组织或者个人实现自身的可持续发展，比如提供项目评估、人力资源、管理咨询、能力建设、行业交流等方面的服务；</p>
                    <p class="p1">只要你发现不一样的乡村，一心致力于实现美好乡村建设，那么你就是乡村振兴的原动力量无论你是谁，只要你关注艺乡建，并拥有将乡村振兴的梦想以及理念付诸行动的清晰计划，你就是我们所寻找的 “艺乡建”俱乐部成员，我们会帮你完善，帮你实现，帮你圆梦。</p>

                    <br><br>

                    <p class="p2">乡村振兴工作者</p>
                    <p class="p2">乡村文化发展者</p>
                    <p class="p2">景观规划设计者</p>
                    <p class="p2">乡旅文化爱好者</p>
                    <p class="p2">高校名师传授者</p>
                    <p class="p2">国外友人参观者</p>
                    <p class="p2">国内新生力量养育者</p>
                    <p class="p2">乡建文化缔造者</p>
                    <p class="p2">农村环境保护者</p>
                    <p class="p2">学生生活体验志愿者</p>
                    <p class="p2">普通群众感受者</p>
                    <p class="p2">普通群众感受者</p>




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












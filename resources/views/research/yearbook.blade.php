@extends('layout/layout')
@section('title')
    <title>
        艺乡建年鉴
    </title>
@endsection

@section('content')
    <div id="ea_ba">
        <div class="products_banner_m">
            <img src="../img/Research.jpg"alt="" />
            <p>RESEARCH <strong>CENTER</strong></p>
            <p class="chinese">研究中心</p>
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
                                            <span id='ShoveWebControl_Text_about'><a href="{{ route('aboutUs') }}">研究中心</a></span>
                                        </span>
                        <span class="n_r_wz5">-</span>
                        <span class="n_r_wz6">
                                            <a href="#" class="curr1">艺乡建年鉴</a>
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
                    <span id='n_content_left_t_data'>艺乡建年鉴</span>
                </div>
                <div class="n_content_left_t2">
                    <span id='n_content_left_t_data2'>YXJ Yearbooks</span>
                </div>
            </div>

            <!--简单的一级目录原型-->
            <div id="n_content_left_cnt" class="n_content_left_cnt">
                <ul id="ShoveWebControl_VMenu2" class="left_typeUl left_typeUl_n000" >
                    <ul id="left_typeUl_t100" class="left_typeUl left_typeUl_t100">
                        <li id="left_typeLi_t100_1" data_id="1_1" class="left_menu1" type="t" index=1 level=0><a href="{{ route('aboutUs') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22134030082|T_NewsTypes|Id|1|Name"  style="font-size:20px;">关于我们</span></a>
                        </li>
                        <li id="left_typeLi_t100_2" data_id="1_2" class="left_menu1" type="t" index=2 level=0><a href="{{ route('researchTeam') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu21609884532|T_NewsTypes|Id|2|Name"  style="font-size:20px;">研究团队</span></a>
                        </li>
                        <li id="left_typeLi_t100_3" data_id="1_141" class="left_menu1" type="t" index=3 level=0><a href="{{ route('researchContent') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu22123378910|T_NewsTypes|Id|141|Name"  style="font-size:20px;">研究内容</span></a>
                        </li>
                        <li id="left_typeLi_t100_4" data_id="1_3" class="left_menu1" type="t" index=4 level=0><a href="{{ route('researchActivity') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu21952530233|T_NewsTypes|Id|3|Name"  style="font-size:20px;">社会活动</span></a>
                        </li>
                        <li id="left_typeLi_t100_4" data_id="1_3" class="left_menu1 @if(request()->fullUrl() == route('researchYearbook')) left_menu1_cur @endif" type="t" index=5 level=0><a href="{{ route('researchYearbook') }}" rel="nofollow" target="_self"><span name="ShoveWebControl_VMenu21952530233|T_NewsTypes|Id|3|Name"  style="font-size:20px;">艺乡鉴年鉴</span></a>
                        </li>
                    </ul>
                </ul>
            </div>

            <!--简单的图文竖版,可以插入图片-->
            <div id="xn_c_products_2_warp" class="xn_c_products_2_warp">
                <!--字体大小24px-->
                <div class="xn_c_products_2_text">
                    <div id="xn_c_down_15_ndown_lb" class="xn_c_down_15_ndown_lb">
                        @if($books)
                            @foreach($books as $book)
                        <div class="xn_c_down_15_ndown_lb_m">
                            <div class="xn_c_down_15_ndown_lb_img">
                                <img data-original='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $book->cover }}'/>
                                <div class="xn_c_down_15_bg">
                                    <a href='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $book->content }}' target="_blank">
                                    </a>
                                </div>
                            </div>
                            <div class="xn_c_down_15_ndown_lb_title" style="font-size: 14px">
                                {{ $book->title }}
                            </div>
                            <div class="xn_c_down_15_ndown_lb_xq" style="font-size: 14px">
                                <a href='{{ config('filesystems.disks.oss.cdnDomain') . '/' . $book->content }}' target="_blank">
                                    <span name="_15_ndown_lb_xq">下载</span>
                                </a>
                            </div>
                        </div>
                            @endforeach
                        @endif
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

        <script type="text/javascript" src="https://0.rc.xiniu.com/g2/M00/02/72/CgAGe1wjF9eAejYeAABCcl7PcJM7884.js?d=28164619591" id="js__index"></script>

@endsection

@extends('frontend.layout')
@section('content')
<div class="content">
    <div class="col-xs-12 bg-white black col-no-padding padding-tb-1 border-top">
        <div class="col-xs-8">{{$case->case_title}}</div>
        <div class="col-xs-1"><a href="{{ url('/') }}"><span class="entypo-home">首页</span></a></div>
        <div class="col-xs-1"><a onclick="window.history.back()"><span class="entypo-reply">返回</span></a></div>
        <div class="col-xs-1"><a href="@if(count($before)) {{url('/case/detail', array('id' => $before[0]->id))}} @endif"><span class="entypo-left">上一页</span></a></div>
        <div class="col-xs-1"><a href="@if(count($after)) {{url('/case/detail', array('id' => $after[0]->id))}} @endif">下一页<span class="entypo-right"></span></a></div>
    </div>

    <div class="col-xs-12 slide no-padding">
        <!-- slider -->
        <div class="slider-wrapper theme-default">
            <div id="gallery-1" class="royalSlider rsDefault">
                @foreach($case->images as $img)
                 <a class="rsImg" data-rsBigImg="{{$img->src}}" href="{{$img->src}}"><img width="120" height="60" class="rsTmb" src="{{$img->src}}" /></a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-white case-detail padding-tb-2">
        <div class="col-xs-8">
            <h2>{{$case->case_title}}</h2>
            <p>{{$case->case_desc}}</p>
        </div>
        <div class="col-xs-4">
            <dl class="last-news">
                <dt>{{$case->case_title}}</dt>
                <dd>
                    <p>
                        <b>客户名称：</b>{{$case->client_name}}
                    </p>
                    <p>
                        <b>所属行业：</b>{{$case->in_name}}
                    </p>
                    <p>
                        <b>服务内容：</b>{{$case->service_content}}
                    </p>
                </dd>
            </dl>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="col-xs-12 case-list col-no-padding no-padding">
        <div class="col-xs-12 long-section"> 相关案例 </div>
        @if(!count($relates))
        <div class="padding-tb-3 bg-white tcenter mg-top-15px">无相关案例</div>
        @else
        <div class="mg-top-15px mg-bottom-15px">
        @include('frontend.includes.case-list', array('cases' => $relates, 'ratio' => 3, 'num' => 4))
        <div class="clearfix"></div>
        </div>
        @endif
    </div>

</div>
@endsection

@section('page_css')
<link rel="stylesheet" href="{{asset('frontend/css/rs-default.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/royalslider.css')}}" />
@endsection
@section('page_js')
<script src="{{asset('frontend/js/jquery.royalslider.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
    jQuery(document).ready(function($) {
      $('#gallery-1').royalSlider({
        fullscreen: {
          enabled: false,
          nativeFS: true
        },
         autoPlay: {
            // autoplay options go gere
            enabled: true,
            delay: 3000,
            pauseOnHover: true
        },

        controlNavigation: 'thumbnails',
        autoScaleSlider: true, 
        autoScaleSliderWidth: 1200,     
        autoScaleSliderHeight: 600,
        imgWidth: '100%',
        // imgHeight: '100%',
        loop: true,
        imageScaleMode: 'fill',
        navigateByClick: true,
        numImagesToPreload:10,
        arrowsNav:true,
        arrowsNavAutoHide: true,
        arrowsNavHideOnTouch: true,
        keyboardNavEnabled: true,
        fadeinLoadedSlide: true,
        globalCaption: true,
        globalCaptionInside: false,
        thumbs: {
          appendSpan: true,
          firstMargin: true,
          paddingBottom: 4
        }
      });
    });
//]]>
</script>
@endsection
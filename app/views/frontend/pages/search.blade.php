@extends('frontend.layout')
@section('content')
<div class="content col-no-padding">
    <div class="page-title-2 bg-blue text-center">
        搜索结果
    </div>
    <div class="case-list col-xs-12">
        @if(!count($cases) && !count($news_list))
            <div class="page-title-8 bg-white text-center">暂无结果</div>
        @else
            @if(count($cases))
            @foreach ($cases as $case)
            <a href="{{url('/case', array('id' => $case->id))}}">
                <div class="col-xs-3 case-item">
                    <img src="{{$case->case_image}}">
                    <div class="case-desc">
                        <h4>{{$case->case_title}}</h4>
                        <p>{{$case->service_content}}</p>
                    </div>
                </div>
            </a>
            @endforeach
            @endif
            @if(count($news_list))
            @foreach ($news_list as $news)
            <a href="{{url('/news', array('id' => $case->id))}}">
                <div class="col-xs-3 case-item">
                    <img src="{{$news->post_image}}">
                    <div class="case-desc">
                        <h4>{{$news->post_title}}</h4>
                        <p>{{$news->day}}</p>
                    </div>
                </div>
            </a>
            @endforeach
            @endif
        @endif

    </div>
</div>
@endsection
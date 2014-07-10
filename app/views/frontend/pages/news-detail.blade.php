@extends('frontend.layout')
@section('content')
    <div class="col-xs-12 bg-white black col-no-padding padding-tb-1 sm-font border-top">
        <div class="col-xs-8"></div>
        <div class="col-xs-4 tright alist"><a href="{{ url('/') }}"><span class="entypo-home">首页</span></a>
        <a onclick="window.history.back()"><span class="entypo-reply">返回</span></a>
        <a href="@if(count($before)) {{url('/news/detail', array('id' => $before[0]->id))}} @endif"><span class="entypo-left">上一条</span></a>
        <a href="@if(count($after)) {{url('/news/detail', array('id' => $after[0]->id))}} @endif">下一条<span class="entypo-right"></span></a></div>
    </div>
    <div class="padding-tb-2 bg-white">
        <div class="col-xs-8 bg-white">
            <h2 class="news-title">{{$news->post_title}}</h2>
            <p class="light-black news-meta">{{$news->updated_at}}</p>
            <div class="news-content">{{$news->post_content}}</div>
        </div>
        <!-- 侧栏 -->
        <div class="col-xs-4">
            <dl class="last-news">
                <dt>最新动态</dt>
                <dd>
                    <ul>
                        @foreach($last_news as $news)
                        <li><a href="{{url('/news/detail', array('id' => $news->id))}}">{{$news->post_title}}</a></li>
                        @endforeach
                    </ul>
                </dd>
            </dl>
            <div class="msg-box"><a href="{{Config::get('app.weibo')}}" target="_blank">我们的新浪微博已经开通，敬请关注</a></div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
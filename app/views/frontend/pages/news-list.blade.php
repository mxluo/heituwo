@extends('frontend.layout')
@section('content')
<div class="content">
    <div class="page-title-8 bg-blue page-title">
        <h1>新闻动态</h1>
    </div>
    <div class="padding-tb-2 bg-white news-list">
        <!-- 新闻列表 -->
        <div class="col-xs-8">
            @foreach ($news_list as $news)
            <div class="media">
                @if(!empty($news->post_image))
                <a class="pull-left" href="{{url('/news/detail', array('id' => $news->id))}}">
                    <img class="media-object" src="{{$news->post_image}}" alt="{{$news->post_title}}" style="height:auto; width:180px;">
                </a>
                @endif
                <div class="media-body">
                    <h4 class="media-heading"><a href="{{url('/news/detail', array('id' => $news->id))}}">{{$news->post_title}}</a></h4>
                    <p class="text-indent">{{mb_substr(strip_tags(trim($news->post_content)), 0, 150)}}... <a href="{{url('/news/detail', array('id' => $news->id))}}">阅读全文</a></p>
                </div>
            </div>
            <hr>
            @endforeach
            {{$news_list->links()}}
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
</div>
@endsection
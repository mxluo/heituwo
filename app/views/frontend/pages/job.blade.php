@extends('frontend.layout')
@section('content')
<div class="content">
    <div class="page-title-8 bg-blue page-title">
        <h1>加入我们</h1>
        <h2 class="black">与最优秀的团队一起工作</h2>
    </div>
    @if(!count($jobs))
    <div class="no-content">目前没有招聘信息</div>
    @else

    <div class="col-xs-12 sm-font bg-white no-padding jobs-list">
        <div class="col-xs-12 no-padding">
            <?php $i = 1; ?>
            @foreach($jobs as $job)
            <div class="col-xs-4 border-right job">
                <h2>{{$job->job}}</h2>
                <h4 style="color:#777;">{{$job->en_job}}</h4>
                <p class="lightdark small-font">{{$job->created_at}}</p>
                <p><strong>招聘人数：</strong>{{$job->number}}人</p>
                <p><strong>工作地点：</strong>{{$job->place}}</p>
                <div>
                    <p class="bold">工作职责：</p>
                    {{$job->duty}}
                </div>
                <div class="padding-tb-2">
                    <p class="bold">招聘要求：</p>
                    {{$job->ask_for}}
                </div>
                <p>请发送简历作品集至： <a href="mailto:{{Config::get('info.hr_email')}}">{{Config::get('info.hr_email')}}</a>
                </p>
            </div>
            @if($i++ % 3 == 0) 
            </div>
            <div class="col-xs-12 no-padding"> 
            @endif
        @endforeach    
    </div>
    @endif
</div>
@endsection
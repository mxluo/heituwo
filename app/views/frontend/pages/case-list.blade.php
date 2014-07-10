@extends('frontend.layout')
@section('content')
<div class="content col-no-padding">
    <div class="page-title-8 bg-blue page-title">
        <h1>案例</h1>
    </div>
    <div class="filter">
        <ul class="list-inline">
            <li>
                <a href="#" class="active">按行业分类</a>
                <ul class="sub-filter-list list-inline border-bottom">
                    <li><a href="{{url('/case')}}">全部</a></li>
                    @foreach ($industries as $i)
                    <li><a href="{{url('/case', array('i' => $i->id, 's' => 0))}}">{{$i->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="#">按专业分类</a>
                <ul class="sub-filter-list list-inline hidden border-bottom">
                    <li><a href="{{url('/case')}}">全部</a></li>
                    @foreach ($specialties as $s)
                    <li><a href="{{url('/case', array('i' => 0, 's' => $s->id))}}">{{$s->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="case-list case-big-list col-xs-12">
        @if(!count($cases))
        <div class="padding-tb-3 bg-white tcenter mg-top-15px">无相关案例</div>
        @endif
        @include('frontend.includes.case-list', array('ratio' => 3, 'num' => 4))
    </div>
    @if($cases->getLastPage() > 1)
    <div class="case-list-view-more col-xs-12 mg-top-15px">
       浏览更多 
    </div>
    @endif
    <div class="clearfix"></div>   
    <div class="height-15px"></div>
</div>
@endsection
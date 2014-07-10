@extends('backend.layout')
@section('page_title')
<h1>招聘 <a href="{{url('/admin/job/new')}}" class="btn btn-info">添加招聘</a></h1>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 form-group">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>职位名称</th>
                    <th>英文名称</th>
                    <th>招聘数量</th>
                    <th>工作地点</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @if(!count($jobs))
                <tr>
                    <td colspan="5">目前没有招聘</td>
                </tr>
                @else
                @foreach($jobs as $job)
                <tr>
                    <td>{{$job->job}}</td>
                    <td>{{$job->en_job}}</td>
                    <td>{{$job->number}}</td>
                    <td>{{$job->place}}</td>
                    <td>
                        <a href="{{url('/admin/job/edit', array('id' => $job->id))}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            编辑
                        </a>
                        <a href="{{url('/admin/job/delete', array('id' => $job->id))}}" class="btn btn-danger btn-sm btn-icon icon-left" onclick="return confirm('确认删除吗？')">
                            <i class="entypo-cancel"></i>
                            删除
                        </a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="col-md-12 form-group text-center">
        {{$jobs->links()}}
    </div>
</div>
@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.css') }}"  id="style-resource-3">
@endsection

@section('page_js')
<script src="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.min.js') }}" id="script-resource-11"></script>
@endsection
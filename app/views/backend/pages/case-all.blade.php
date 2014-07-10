@extends('backend.layout')
@section('page_title')
<h1>案例  <a href="{{url('/admin/case/new')}}" class="btn btn-info">添加案例</a></h1>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 form-group">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>标题</th>
                    <th>客户名称</th>
                    <th>行业分类</th>
                    <th>专业分类</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @if(!count($cases))
                <tr>
                    <td colspan="6">目前没有案例</td>
                </tr>
                @else
                @foreach($cases as $case)
                <tr>
                    <td>{{$case->case_title}}</td>
                    <td>{{$case->client_name}}</td>
                    <td>{{$inds[$case->case_industry]}}</td>
                    <td>{{$spes[$case->case_specialty]}}</td>
                    <td>
                        <a href="{{url('/admin/case/edit', array('id' => $case->id))}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            编辑
                        </a>
                        <a href="{{url('/admin/case/delete', array('id' => $case->id))}}" class="btn btn-danger btn-sm btn-icon icon-left" onclick="return confirm('确认删除吗？')">
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
        {{$cases->links()}}
    </div>
</div>
@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.css') }}"  id="style-resource-3">
@endsection

@section('page_js')
<script src="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.min.js') }}" id="script-resource-11"></script>
@endsection
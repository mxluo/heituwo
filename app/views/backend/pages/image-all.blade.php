@extends('backend.layout')
@section('page_title')
<h1>图片管理</h1>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 form-group">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>案例标题</th>
                    <th>客户名称</th>
                    <th>图片数量</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @if(!count($cases))
                <tr>
                    <td colspan="4">目前没有案例</td>
                </tr>
                @else
                @foreach($cases as $case)
                <tr>
                    <td>{{$case->case_title}}</td>
                    <td>{{$case->client_name}}</td>
                    <td>{{$case->count}}</td>
                    <td>
                        <a href="{{url('/admin/image/edit', array('id' => $case->id))}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            编辑图片
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
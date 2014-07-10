@extends('backend.layout')
@section('page_title')
<h1>分类</h1>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 row form-group">
        <div class="col-md-4">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-body">
                    <form action="{{url('/admin/category/create')}}" method="post" accept-charset="utf-8" class="">
                        <div class="form-group">
                            <label class="control-label">名称</label>
                            <input type="text" name="name" class="form-control" placeholder="" value="{{Input::old('name')}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">类型</label>
                            <select name="type" class="selectboxit">
                                <option value="1">行业</option>
                                <option value="2">专业</option>
                                <!-- <option value="3">动态</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label"></label>
                            <button type="submit" class="btn btn-success">添加分类目录</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /col-md-4-->
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>分类名</th>
                        <th>类型</th>
                        <th>操作</th>
                    </tr>
                </thead>

                <tbody>
                    @if(!count($categories))
                    <tr>
                        <td colspan="4">目前没有分类</td>
                    </tr>
                    @else
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category['id'] }}</td>
                        <td>{{ $category['name'] }}</td>
                        <td>{{ $types[$category['type']] }}</td>
                        <td>
                            <a href="{{url('/admin/category/edit', array('id' => $category['id']))}}" class="btn btn-default btn-sm btn-icon icon-left">
                                <i class="entypo-pencil"></i>
                                编辑
                            </a>
                            <a href="{{url('/admin/category/delete', array('id' => $category['id']))}}" class="btn btn-danger btn-sm btn-icon icon-left" onclick="return confirm('确认删除吗？')">
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
        <!-- /col-md-4 --> 
    </div>
</div>
@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.css') }}"  id="style-resource-3">
@endsection

@section('page_js')
<script src="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.min.js') }}" id="script-resource-11"></script>
@endsection
@extends('backend.layout')
@section('page_title')
<h1>分类 <a href="{{url('/admin/category/all')}}" class="btn btn-info">分类列表</a></h1>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 row form-group">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-body">
                    <form action="{{url('/admin/category/update', ['id' => $category->id])}}" method="post" accept-charset="utf-8" class="">
                        <div class="form-group">
                            <label class="control-label">名称</label>
                            <input type="text" name="name" class="form-control" placeholder="" value="{{Input::old('name', $category->name)}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">类型</label>
                            <select name="type" class="selectboxit">
                                <option value="1" @if(Input::old('type', $category->type) == 1) selected @endif>行业</option>
                                <option value="2" @if(Input::old('type', $category->type) == 2) selected @endif>专业</option>
                                <option value="3" @if(Input::old('type', $category->type) == 3) selected @endif>动态</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label"></label>
                            <button type="submit" class="btn btn-success">更新</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /col-md-12-->
    </div>
</div>
@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.css') }}"  id="style-resource-3">
@endsection

@section('page_js')
<script src="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.min.js') }}" id="script-resource-11"></script>
@endsection
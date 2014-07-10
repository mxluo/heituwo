@extends('backend.layout')
@section('page_title')
<h1>添加动态 <a href="{{url('/admin/post/all')}}" class="btn btn-info">动态列表</a></h1>
@endsection
@section('content')
<div class="row">
  <form action="{{url('/admin/post/create')}}" method="post" accept-charset="utf-8" class="form-horizontal">
    <div class="form-group img-div">
      <label class="col-md-1 control-label"></label>
      <div class="col-md-6">
        <div class="img-box col-md-5" style="display:none">
        <img style="margin-bottom:5px;" width="400" height="400" src="">
        <button class="img-del btn btn-default" data-url="" type="button">
          <i class="entypo-cancel"></i> 删除图片
        </button>
      </div>
      </div>
    </div>
    <div class="form-group">
      <script type="text/javascript">UPLOAD_URL = '{{url('/admin/image/upload')}}';</script>
      <label class="col-md-1 control-label">封面图片: </label>
      <div class="col-md-6">
          <div class="input-group">
            <input type="text" id="cover-img-url" name="img" value="{{Input::old('img')}}" data-preview="#cover-view-img" placeholder="填写URL或者选择本地文件上传" class="url-image form-control">
            <span class="input-group-btn">
              <button class="btn btn-white file-uploader" data-option="{urlContainer:'#cover-img-url', accept:{extensions: 'jpeg,jpg,png,gif,bmp', mimeTypes:'image/*'},maxSize:4096}" type="button">
                <i class="entypo-popup"></i> 本地文件
              </button>
            </span>
          </div><!-- /input-group -->
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-1 control-label">标题: </label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="title" value="{{Input::old('title')}}" placeholder="标题"><br>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-1 control-label">内容: </label>
      <div class="col-md-8">
        <script id="myEditor" name="content" type="text/plain" style="width:100%;height:480px;">{{Input::old('content')}}</script>
      </div>
    </div>
    <hr>
    <div class="col-md-12 form-group pull-right">
      <div class="col-md-1 col-md-offset-1">
        <button type="submit" class="btn btn-success"> 发 布 </button>
      </div>
    </div>
  </form>       
</div>
<hr />
<div class="row content"></div>

<br />
@include('backend.includes.fileuploader')
@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('/backend/js/umeditor/themes/default/css/umeditor.css') }}"  id="style-resource-3">
<link rel="stylesheet" href="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.css') }}"  id="style-resource-3">
@endsection

@section('page_js')
<script type="text/javascript" src="{{ asset('/backend/js/umeditor/umeditor.config.js') }}"></script>
<script type="text/javascript" src="{{ asset('/backend/js/umeditor/umeditor.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/backend/js/umeditor/lang/zh-cn/zh-cn.js') }}"></script>
<script type="text/javascript">
  var editor = UM.getEditor('myEditor')
</script>
@endsection
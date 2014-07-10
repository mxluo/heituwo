@extends('backend.layout')
@section('page_title')
<h1>编辑动态 <a href="{{url('/admin/post/all')}}" class="btn btn-info">动态列表</a></h1>
@endsection
@section('content')
<div class="row">
  <form action="{{url('/admin/post/update', array('id' => $post->id))}}" method="post" accept-charset="utf-8" class="form-horizontal">
    <div class="col-md-12 form-group img-div">
      <script type="text/javascript">UPLOAD_URL = '{{url('/admin/image/upload')}}';</script>
      <label class="col-md-1">封面图片: </label>
      <div @if(empty($post->post_image)) style="display:none" @endif class="img-box col-md-6">
        <img style="margin-bottom:5px;" width="291" height="164" src="{{Input::old('img',$post->post_image)}}">
        <button class="img-del btn btn-default" type="button">
          <i class="entypo-cancel"></i> 删除图片
        </button>
      </div>
      <div class="col-md-6">
          <div class="input-group">
            <input type="text" id="cover-img-url" name="img" value="{{Input::old('img',$post->post_image)}}" data-preview="#cover-view-img" placeholder="填写URL或者选择本地文件上传" class="url-image form-control">
            <span class="input-group-btn">
              <button class="btn btn-white file-uploader" data-option="{urlContainer:'#cover-img-url', accept:{extensions: 'jpeg,jpg,png,gif,bmp', mimeTypes:'image/*'},maxSize:4096}" type="button">
                <i class="entypo-popup"></i> 本地文件
              </button>
            </span>
          </div><!-- /input-group -->
      </div>
    </div>
    <div class="col-md-12 form-group">
      <label class="col-md-12">标题：</label>
      <div class="col-md-12">
        <input type="text" class="form-control " name="title" value="{{Input::old('title',$post->post_title)}}" placeholder="标题"><br>
      </div>
    </div>
    <div class="col-md-12 form-group">
      <label class="col-md-12">内容：</label>
      <div class="col-md-12">
        <script id="myEditor" name="content" type="text/plain" style="width:100%;height:480px;">{{Input::old('content',$post->post_content)}}</script>
      </div>
    </div>
    <div class="col-md-12 form-group">
      <div class="col-md-12">
        
      </div>
    </div>
    <div class="col-md-12 form-group pull-right">
      <div class="col-md-1">
        <button type="submit" class="btn btn-success"> 保 存 </button>
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
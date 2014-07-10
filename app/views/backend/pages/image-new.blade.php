@extends('backend.layout')
@section('page_title')
<h1>添加图片 <a href="{{url('/admin/case/all')}}" class="btn btn-info">案例列表</a></h1>
@endsection
@section('content')
<div class="row">
  <form action="{{url('/admin/image/create', array('cid' => $cid))}}" method="post" accept-charset="utf-8" class="form-horizontal">
    <script type="text/javascript">UPLOAD_URL = '{{url('/admin/image/upload')}}';</script>
    
    <div class="col-md-12 form-group img-div">           
      <div style="display:none;" class="img-box col-md-12">
        <img style="margin-bottom:5px;" width="600" height="338" src="">
        <button class="img-del btn btn-default" data-url="" type="button">
          <i class="entypo-cancel"></i> 删除图片
        </button>
      </div>
      <div class="col-md-6">
          <div class="input-group">
            <input type="text" id="cover-img-url" name="img[]" value="" data-preview="#cover-view-img" placeholder="填写URL或者选择本地文件上传" class="url-image form-control">
            <span class="input-group-btn">
              <button class="btn btn-white file-uploader" data-option="{urlContainer:'#cover-img-url', accept:{extensions: 'jpeg,jpg,png,gif,bmp', mimeTypes:'image/*'},maxSize:4096}" type="button">
                <i class="entypo-popup"></i> 本地文件
              </button>
            </span>
          </div><!-- /input-group -->
      </div>
    </div>

    <div class="col-md-12 form-group img-div">           
      <div style="display:none;" class="img-box col-md-12">
        <img style="margin-bottom:5px;" width="600" height="338" src="">
        <button class="img-del btn btn-default" data-url="" type="button">
          <i class="entypo-cancel"></i> 删除图片
        </button>
      </div>
      <div class="col-md-6">
          <div class="input-group">
            <input type="text" id="cover-img-url1" name="img[]" value="" data-preview="#cover-view-img" placeholder="填写URL或者选择本地文件上传" class="url-image form-control">
            <span class="input-group-btn">
              <button class="btn btn-white file-uploader" data-option="{urlContainer:'#cover-img-url1', accept:{extensions: 'jpeg,jpg,png,gif,bmp', mimeTypes:'image/*'},maxSize:4096}" type="button">
                <i class="entypo-popup"></i> 本地文件
              </button>
            </span>
          </div><!-- /input-group -->
      </div>
    </div>

    <div class="col-md-12 form-group">
      <div class="col-md-4">
        <div id="add-input" class="btn btn-info"> 添加更多图片 </div>
      </div>
    </div>


    <div class="col-md-12 form-group">
    </div>
    <div class="col-md-12 form-group">
      <div class="col-md-4">
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
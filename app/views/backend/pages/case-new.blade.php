@extends('backend.layout')
@section('page_title')
<h1>添加案例 <a href="{{url('/admin/case/all')}}" class="btn btn-info">案例列表</a></h1>
@endsection
@section('content')
<div class="row">
  <form action="{{url('/admin/case/create')}}" method="post" accept-charset="utf-8" class="form-horizontal">
    <div class="col-md-8">
      <div class="form-group">
        <label class="col-md-2 control-label">案例标题: </label>
        <div class="col-md-10">
          <input type="text" class="form-control " name="title" value="{{Input::old('title')}}" placeholder="案例标题"><br>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">客户名称: </label>
        <div class="col-md-10">
          <input type="text" class="form-control " name="client_name" value="{{Input::old('client_name')}}" placeholder="客户名称"><br>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">服务内容: </label>
        <div class="col-md-10">
          <input type="text" class="form-control " name="service_content" value="{{Input::old('service_content')}}" placeholder="服务内容，多个内容以空格分隔"><br>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">行业分类: </label>
        <div class="col-md-4">
          <select name="industry" class="selectboxit col-md-3">
            @foreach($industries as $industry)
            <option value="{{ $industry['id'] }}" @if(Input::old('industry') == $industry['id'])selected@endif>{{ $industry['name'] }}</option>
            @endforeach
          </select>
        </div>
        <label class="col-md-2 control-label">专业分类: </label>
        <div class="col-md-4">
          <select name="specialty" class="selectboxit col-md-3">
            @foreach($specialties as $specialty)
            <option value="{{ $specialty['id'] }}" @if(Input::old('specialty') == $specialty['id'])selected@endif>{{ $specialty['name'] }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">案例描述: </label>
        <div class="col-md-10">
          <script id="myEditor" name="desc" type="text/plain" style="width:100%;height:300px;">{{Input::old('desc')}}</script>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-success"> 发布 </button>
        </div>
      </div>
    </div>
    <!-- /end left -->

    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="panel-title">案例图片</div>
        </div>
        <div class="panel-body">
          <div class="form-group img-div">
            <script type="text/javascript">UPLOAD_URL = '{{url('/admin/image/upload')}}';</script>
            <!--dom结构部分-->
            <div id="uploader-demo">
                <!--用来存放item-->
                <ul id="fileList" class="uploader-list">
                  <?php $images = Input::old('images') ?>
                  @if(!empty($images))
                  @foreach($images as $img)
                  <li id="" class="file-item thumbnail">
                    <img src="{{$img}}">
                    <input type="hidden" class="img-hidden" name="images[]" value="{{$img}}" />
                    <div class="file-panel" style="height: 0px;"><span class="cancel">删除</span></div>
                  </li>
                  @endforeach
                  @endif
                </ul>
                <hr>
                <div id="filePicker">添加图片</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /end right -->
  </form>       
</div>
<hr />
<div class="row content"></div>

<br />

@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('/backend/js/umeditor/themes/default/css/umeditor.css') }}"  id="style-resource-3">
<link rel="stylesheet" href="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.css') }}"  id="style-resource-3">
@endsection

@section('page_js')
<script type="text/javascript" src="{{ asset('/backend/js/umeditor/umeditor.config.js') }}"></script>
<script type="text/javascript" src="{{ asset('/backend/js/umeditor/umeditor.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/backend/js/umeditor/lang/zh-cn/zh-cn.js') }}"></script>
<script src="{{asset('/backend/js/webuploader.html5only.js')}}" type="text/javascript" ></script>
<script src="{{asset('/backend/js/fileuploader.js')}}" type="text/javascript" ></script>
<script type="text/javascript">
  var editor = UM.getEditor('myEditor');
</script>
@endsection
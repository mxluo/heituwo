@extends('backend.layout')
@section('page_title')
<h1>首页幻灯片</h1>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{url('admin/system/slide')}}" method="post" accept-charset="utf-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="panel-title">首页幻灯片</div>
        </div>
        <div class="panel-body">
          <div class="form-group img-div">
            <script type="text/javascript">UPLOAD_URL = '{{url('/admin/image/upload')}}';</script>
            <!--dom结构部分-->
            <div id="uploader-demo">
              <!--用来存放item-->
              <ul id="fileList" class="uploader-list">
                <?php $images = Input::old('images', $slides) ?>
                @if(!empty($images))
                  @foreach($images as $img)
                <li id="" class="file-item thumbnail">
                  <img src="{{$img}}">
                  <input type="hidden" class="img-hidden" name="images[]" value="{{$img}}" />
                  <div class="file-panel" style="height: 0px;">
                    <span class="cancel">删除</span>
                  </div>
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
      <hr>
      <div class="form-group">
        <div class="col-md-4">
          <button type="submit" class="btn btn-success"> 提交 </button>
        </div>
      </div>
    </form>
  </div>
</div>
<hr />
@endsection

@section('page_js')
<script src="{{asset('/backend/js/webuploader.html5only.js')}}" type="text/javascript" ></script>
<script src="{{asset('/backend/js/fileuploader.js')}}" type="text/javascript" ></script>
@endsection
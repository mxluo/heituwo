@extends('backend.layout')
@section('page_title')
<h1>联系</h1>
@endsection
@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-body">
        <form action="{{url('/admin/system/contact')}}" method="post" accept-charset="utf-8" class="form-horizontal">

          <div class="form-group" alt="通过富文本编辑器‘百度地图’按钮添加地图">
            <label class="col-md-2 control-label">{{$contacts[5]->option_name}}: </label>
            <div class="col-md-9">
              <script id="myEditor" name="map" type="text/plain" style="width:100%;height:360px;">{{$contacts[5]->option_value}}</script>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">{{$contacts[0]->option_name}}: </label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="business" value="{{$contacts[0]->option_value}}"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">{{$contacts[1]->option_name}}: </label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="other" value="{{$contacts[1]->option_value}}"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">{{$contacts[2]->option_name}}: </label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="job" value="{{$contacts[2]->option_value}}"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">{{$contacts[3]->option_name}}: </label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="tel" value="{{$contacts[3]->option_value}}"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">{{$contacts[4]->option_name}}: </label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="fax" value="{{$contacts[4]->option_value}}"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">国家: </label>
            <div class="col-md-2">
              <input type="text" class="form-control " name="state" value="{{$addr[3]}}"><br>
            </div>
            <label class="col-md-2 control-label">城市: </label>
            <div class="col-md-2">
              <input type="text" class="form-control " name="city" value="{{$addr[2]}}"><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">地址: </label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="address" value="{{$addr[1]}}"><br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">楼层: </label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="floor" value="{{$addr[0]}}"><br>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6">              
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
            </div>
            <div class="col-md-9">
              <button type="submit" class="btn btn-success"> 保 存 </button>
            </div>
          </div>
    
        </form>
      </div> 
    </div>
  </div>     
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
<script type="text/javascript">
  var editor1 = UM.getEditor('myEditor')
</script>
@endsection
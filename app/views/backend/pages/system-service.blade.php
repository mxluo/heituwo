@extends('backend.layout')
@section('page_title')
<h1>服务</h1>
@endsection
@section('content')
      <div class="row">
        <form action="{{url('/admin/system/service')}}" method="post" accept-charset="utf-8" class="form-horizontal">

          <div class="col-md-12 form-group">
            <blockquote class="blockquote-default">
              <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">服务简介: </div>
              <textarea type="text" class="form-control " name="introduct">{{$services[0]->option_value}}</textarea>
            </blockquote>
          </div>

          <div class="col-md-12 form-group">
            <div class="col-md-6">
              <blockquote class="blockquote-default">
                <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">{{$services[2]->option_name}}: </div>
                <script id="myEditor2" name="sev1" type="text/plain" style="width:100%;height:200px;">{{$services[2]->option_value}}</script>
              </blockquote>
            </div>
            <div class="col-md-6">
              <blockquote class="blockquote-default">
                <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">{{$services[3]->option_name}}: </div>
                <script id="myEditor3" name="sev2" type="text/plain" style="width:100%;height:200px;">{{$services[3]->option_value}}</script>
              </blockquote>
            </div>
          </div>

          <div class="col-md-12 form-group">
            <div class="col-md-6">
              <blockquote class="blockquote-default">
                <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">{{$services[4]->option_name}}: </div>
                <script id="myEditor4" name="sev3" type="text/plain" style="width:100%;height:200px;">{{$services[4]->option_value}}</script>
              </blockquote>
            </div>
            <div class="col-md-6">
              <blockquote class="blockquote-default">
                <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">{{$services[5]->option_name}}: </div>
                <script id="myEditor5" name="sev4" type="text/plain" style="width:100%;height:200px;">{{$services[5]->option_value}}</script>
              </blockquote>
            </div>
          </div>
          
          <div class="col-md-12 form-group">
            <blockquote class="blockquote-default">
              <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">合作客户: </div>
              <script id="myEditor1" name="customer" type="text/plain" style="width:100%;height:200px;">{{$services[1]->option_value}}</script>
            </blockquote>
          </div>

          <div class="col-md-12 form-group">
            <div class="col-md-12">              
            </div>
          </div>
          <div class="col-md-12 form-group pull-right">
            <div class="col-md-2">
              <button type="submit" class="btn btn-success"> 保 存 </button>
            </div>
          </div>

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
<script type="text/javascript">
  var editor1 = UM.getEditor('myEditor1')
  var editor2 = UM.getEditor('myEditor2')
  var editor3 = UM.getEditor('myEditor3')
  var editor4 = UM.getEditor('myEditor4')
  var editor5 = UM.getEditor('myEditor5')
</script>
@endsection
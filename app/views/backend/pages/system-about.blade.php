@extends('backend.layout')
@section('page_title')
<h1>关于</h1>
@endsection
@section('content')
      <div class="row">
        <form action="{{url('/admin/system/about')}}" method="post" accept-charset="utf-8" class="form-horizontal">
          
          <div class="col-md-12 form-group">
            <blockquote class="blockquote-default">
              <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">公司简介: </div>
              <script id="myEditor1" name="introduction" type="text/plain" style="width:100%;height:200px;">{{$introduction->option_value}}</script>
            </blockquote>
          </div>
          <div class="col-md-12 form-group">
            <blockquote class="blockquote-default">
              <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">企业文化: </div>
              <script id="myEditor2" name="culture" type="text/plain" style="width:100%;height:200px;">{{$culture->option_value}}</script>
            </blockquote>
          </div>

          <div class="col-md-12 form-group">
            <blockquote class="blockquote-default">
              <div style="font-size:18px;font-weight:bold;margin-bottom:5px;">活力团队: </div>
              <script id="myEditor3" name="group" type="text/plain" style="width:100%;height:200px;">{{$group->option_value}}</script>
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
</script>
@endsection
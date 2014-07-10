@extends('backend.layout')
@section('page_title')
<h1>基本</h1>
@endsection
@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="panel panel-primary" data-collapsed="0">
      <div class="panel-body">
        <form action="{{url('/admin/system/basic')}}" method="post" accept-charset="utf-8" class="form-horizontal">

          <div class="form-group">
            <label class="col-md-2 control-label">站点名称:</label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="site_name" value="{{$site_name}}">
              <br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">站点关键词:</label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="site_keywords" value="{{$site_keywords}}">
              <br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">站点描述:</label>
            <div class="col-md-9">
              <input type="text" class="form-control " name="site_description" value="{{$site_description}}">
              <br>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-success">保 存</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
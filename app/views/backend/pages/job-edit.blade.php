@extends('backend.layout')
@section('page_title')
<h1>编辑招聘 <a href="{{url('/admin/job/all')}}" class="btn btn-info">招聘列表</a></h1>
@endsection
@section('content')
      <div class="row">
        <form action="{{url('/admin/job/update', array('id' => $job->id))}}" method="post" accept-charset="utf-8" class="form-horizontal">
          
          <div class="col-md-12 form-group">
            <label class="col-md-1 control-label">职位名称: </label>
            <div class="col-md-7">
              <input type="text" class="form-control " name="job" value="{{$job->job}}" placeholder="职位名称"><br>
            </div>
            <div class="col-md-4">
            </div>
          </div>

          <div class="col-md-12 form-group">
            <label class="col-md-1 control-label">英文名称: </label>
            <div class="col-md-7">
              <input type="text" class="form-control " name="ejob" value="{{$job->en_job}}" placeholder="Job Title"><br>
            </div>
            <div class="col-md-4">
            </div>
          </div>

          <div class="col-md-12 form-group">
            <label class="col-md-1 control-label">招聘数量: </label>
            <div class="col-md-3">
              <input type="text" class="form-control " name="num" value="{{$job->number}}" placeholder="输入阿拉伯数字"><br>
            </div>
            <label class="col-md-1 control-label">工作地点: </label>
            <div class="col-md-3">
              <input type="text" class="form-control " name="place" value="{{$job->place}}" placeholder="工作地点"><br>
            </div>
          </div>

          <div class="col-md-12 form-group">
            <label class="col-md-1 control-label">工作职责: </label>
            <div class="col-md-7">
              <script id="myEditor1" name="duty" type="text/plain" style="width:100%;height:200px;">{{$job->duty}}</script>
            </div>
            <div class="col-md-4">
            </div>
          </div>

          <div class="col-md-12 form-group">
            <label class="col-md-1 control-label">招聘要求: </label>
            <div class="col-md-7">
              <script id="myEditor2" name="ask" type="text/plain" style="width:100%;height:200px;">{{$job->ask_for}}</script>
            </div>
            <div class="col-md-4">
            </div>
          </div>
         
          <div class="col-md-12 form-group">
          </div>
          <div class="col-md-12 form-group">
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
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
</script>
@endsection
@extends('backend.layout')
@section('page_title')
<h1>
    管理员
</h1>
@endsection
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-body">
                <form action="{{url('/admin/user/edit')}}" method="post" accept-charset="utf-8" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label">用户名：</label>
                        <label class="col-md-1 control-label">{{$user->user_login}}</label>
                        <label class="col-md-2 control-label"><button type="button" id="edit-pass" class="btn btn-sm btn-default">修改密码</button></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">邮箱：</label>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control" value="{{Input::old('user_email', $user->user_email)}}">
                        </div>
                    </div>
                    <div class="pass" style="display:none">
                        <div class="form-group">
                            <label class="col-md-3 control-label">原密码：</label>
                            <div class="col-md-6">
                                <input type="password" name="old_password" class="form-control" placeholder="输入原密码"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">新密码：</label>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control" placeholder="输入新密码"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">确认密码：</label>
                            <div class="col-md-6">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="确认新密码"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">保存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#edit-pass').click(function() {
        $('.pass').show();
        $(this).hide();    
    });  
  });
</script>
@endsection
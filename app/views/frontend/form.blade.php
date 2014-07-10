<div class="col-xs-12 bg-white page-title-4">
        <form action="{{url('/demand')}}" method="post" accept-charset="utf-8" class="form">
            <div class="col-xs-12 form-group">
                <h4 class="col-xs-2 blue">快速需求发送</h4>
                @if(Session::has('message'))
                  <div class="col-xs-10">
                    <div class="tips {{ 'text-'. Session::get('color', 'info') }}">
                    {{ Session::get('message') }}
                    </div>
                  </div>
                @endif
                @if(count($errors->all()))
                <div class="col-xs-10">
                  <div class="tips text-danger">
                      <ul class="no-padding">
                      @foreach($errors->all('<li class="pull-left">:message&nbsp;&nbsp;&nbsp;</li>') as $error)
                          {{$error}}
                      @endforeach
                      </ul>
                  </div>
                </div>
                @endif
            </div>
            <div class="col-xs-10 form-group">
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="cname" value="" placeholder="您的姓名">
                </div>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="email" value="" placeholder="您的邮箱地址">
                </div>
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="tel" value="" placeholder="您的联系电话">
                </div>
            </div>
            <div class="col-xs-10 form-group">
                <div class="col-xs-3">
                    <input type="text" class="form-control" name="company" value="" placeholder="您所代表的公司">
                </div>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="product" value="" placeholder="贵公司的产品或网站地址">
                </div>
                <div class="col-xs-3">
                </div>
            </div>
            <div class="col-xs-10 form-group">
                <div class="col-xs-9">
                    <textarea class="form-control" rows="3" name="desc" placeholder="详细商务合作描述：项目类型、时间安排、数量、软件平台等。"></textarea>
                </div>
                <div class="col-xs-3">
                    <button type="submit" class="no-padding no-border">
                        <img src="{{ asset('/frontend/img/btn_out.png') }}">
                    </button>
                </div>
            </div>
        </form>
    </div>
<div class="clearfix"></div>
    <div class="page-title-4 col-xs-12 bg-gray">
        <div class="col-xs-4">
            <h2>我们的联系方式</h2>
            <br>
            <ul class="no-padding">
                <li>商务合作：<a href="mailto:xz@i-xz.com">xz@i-xz.com</a></li>
                <li>其他咨询：<a href="mailto:info@i-xz.com">info@i-xz.com</a></li>
                <li>招聘：<a href="mailto:hr@i-xz.com">hr@i-xz.com</a></li>
                <li>电话：021-62456818</li>
                <li>传真：021-62456818</li>
                <li>地址：上海市长宁区延安西路1882号</li>
            </ul>
        </div>
        <div class="col-xs-8 ">
            <div class="contact-box">
                <form action="{{url('/demand')}}" method="post" accept-charset="utf-8" class="form">
                    <div class="col-xs-12 form-group">
                    <h4 class="blue"><div class="col-xs-9">快速需求发送</div></h4>
                        @if(Session::has('message'))
                          <div class="col-xs-12">
                            <div class="tips {{ 'text-'. Session::get('color', 'info') }}">
                            {{ Session::get('message') }}
                            </div>
                          </div>
                        @endif
                        @if(count($errors->all()))
                        <div class="col-xs-12">
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
                    <div class="col-xs-12 form-group">
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
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="company" value="" placeholder="您所代表的公司">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="product" value="" placeholder="贵公司的产品或网站地址">
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <div class="col-xs-9">
                            <textarea class="form-control" style="height:62px" name="desc" placeholder="详细商务合作描述：项目类型、时间安排、数量、软件平台等。"></textarea>
                        </div>
                        <div class="col-xs-3">
                            <button type="submit" class="btn btn-info form-btn-blue btn-block padding-tb-2">提交需求</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
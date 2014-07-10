<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="{{$site_keywords}}" />
  <meta name="description" content="{{$site_description}}" />
  <meta name="author" content="writor.me" />

  <title>{{$site_name}}-{{$pagedesc}}</title>
  <link href="{{ asset('/frontend/img/favicon.png') }}" rel="shortcut icon"/>
  <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.css') }}" >
  <link rel="stylesheet" href="{{ asset('/frontend/css/entypo/css/entypo.css') }}">
  <link rel="stylesheet" href="{{ asset('/frontend/css/base.css') }}" >
  @yield('page_css')
  <script src="{{ asset('/frontend/js/jquery-1.11.0.min.js') }}"></script>

  <!--[if lt IE 9]>
  <script src="{{ asset('/backend/js/ie8-responsive-file-warning.js') }}"></script>
  <![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container">
    <!-- navigation -->
    <nav class="nav row">
      <!-- menu -->
      <div class="col-xs-8 no-padding">
        <ul class="menu list-unstyled">
          <li>
            <div class="logo">
              <a href="{{ url('/') }}"><img src="{{ asset('/frontend/img/logo.jpg') }}"></a>
            </div>
          </li>
          <li>
            <a href="{{ url('/') }}">首页</a>
          </li>          
          <li>
            <a href="{{ url('/note') }}">笔记</a>
          </li>
          <li>
            <a href="{{ url('/work') }}">作品</a>
          </li>
          <li>
            <a href="{{ url('/about') }}">关于</a>
          </li>
        </ul>
      </div>

      <!-- seaarch form -->
       <div class="col-xs-4 pull-right right-link tright">
       <a href="javascript:void(0)" title=""><img src="{{asset('frontend/img/tel.png')}}" height="25" width="25" alt=""> 咨询电话：021-62456818</a>
       <a href="/contact#contact" title=""><img src="{{asset('frontend/img/mail.png')}}" height="25" width="25" alt=""> 留言</a>
      </div>
    </nav>

    <!-- main -->
    <section class="main row">
    @yield('content')
    </section>

    <!-- Footer -->
    <footer class="footer row">
      <div class="row">
        <div class="col-xs-4 intro-box">
          <img class="footer-logo" src="{{ asset('/frontend/img/footer-logo.png') }}">
          <p class="intro">星哲设计策划以品牌战略为核心，为客户提供设计、咨询、落地实施的无缝对接服务，帮助公司提升品牌价值，促进商业成功。</p>
          <div class="col-xs-6 no-padding"><img class="qrcode" width="200" src="{{ asset('/frontend/img/qrcode.jpg') }}"></div>
          <div class="col-xs-5 tright footer-left-link">
            <p><a href="/job" title="加入我们">加入我们</a></p>
            <p><a href="/news" title="新闻动态">新闻动态</a></p>
          </div>
        </div>
        <div class="col-xs-4 servies">
          <h2>服务范围</h2>
          <ul class="list-unstyled">
            <li><a href="">标志 &nbsp;&&nbsp; VI</a></li>
            <li><a href="">品牌 &nbsp;&&nbsp; 营销</a></li>
            <li><a href="">产品 &nbsp;&&nbsp; 包装</a></li>
            <li><a href="">网络 &nbsp;&&nbsp; 交互</a></li>
            <li><a href="">环境 &nbsp;&&nbsp; 展示</a></li>
          </ul>
        </div>
        <div class="col-xs-4 contacts">
          <h2>联系我们</h2>
          <p>商务合作：xz@i-xz.com</p>
          <p>其他咨询：info@i-xz.com</p>
          <p>招聘：hr@i-xz.com</p>
          <p>电话：021-62456818</p>
          <p>传真：021-62456818</p>
          <p>地址：上海市长宁区延安西路1882号</p>
          <div class="clearfix"></div>
          <ul class="social">
            <li class="sinaweibo"><a href="">Sina Weibo</a></li>
            <li class="youku"><a href="">Youku</a></li>
            <li class="flickr"><a href="">Flickr</a></li>
            <li class="link"><a href="">Link</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright row">
        <div class="col-xs-12">Copyright &copy; {{date('Y')}} xingzhe All right reserved. 沪ICP备12020525号-1</div>
      </div>
    </footer>

  <script src="{{ asset('/frontend/js/bootstrap.js') }}"></script>
  <script src="{{ asset('/frontend/js/placeholder.js') }}"></script>
  <script src="{{ asset('/frontend/js/common.js') }}"></script>

  @yield('page_js')
  </div>
</body>
</html>
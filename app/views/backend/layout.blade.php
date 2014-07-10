<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Writor" />
  <meta name="author" content="writor.me" />

  <title>{{$site_name}}</title>

  <link rel="stylesheet" href="{{ asset('/backend/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}"  id="style-resource-1">
  <link rel="stylesheet" href="{{ asset('/backend/css/font-icons/entypo/css/entypo.css') }}"  id="style-resource-2">
  <link rel="stylesheet" href="{{ asset('/backend/css/bootstrap.min.css') }}"  id="style-resource-4">
  <link rel="stylesheet" href="{{ asset('/backend/css/core.css') }}"  id="style-resource-5">
  <link rel="stylesheet" href="{{ asset('/backend/css/forms.css') }}"  id="style-resource-7">
  <link rel="stylesheet" href="{{ asset('/backend/css/custom.css') }}"  id="style-resource-8">
  @yield('page_css')
  <script src="{{ asset('/backend/js/jquery-1.11.0.min.js') }}"></script>

  <!--[if lt IE 9]>
  <script src="{{ asset('/backend/js/ie8-responsive-file-warning.js') }}"></script>
  <![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="page-body">
  <div class="page-container @if(isset($_COOKIE['sidebar_status']) && $_COOKIE['sidebar_status'] == 'hide') sidebar-collapsed @endif">
    <div class="sidebar-menu">
      <header class="logo-env">
        <!-- logo -->
        <div class="logo">
          <a href="{{url('admin')}}">
            <h1>星哲</h1>
          </a>
        </div>
        <!-- logo collapse icon -->
        <div class="sidebar-collapse">
          <a href="#" class="sidebar-collapse-icon with-animation">
            <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition --> <i class="entypo-menu"></i>
          </a>
        </div>
        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
          <a href="#" class="with-animation">
            <!-- add class "with-animation" to support animation --> <i class="entypo-menu"></i>
          </a>
        </div>
      </header>
      <ul id="main-menu" class="">
        <li>
          <a href="{{ url('admin') }}">
            <i class="entypo-gauge"></i>
            <span>控制面板</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/admin/case/all') }}">
            <i class="entypo-trophy"></i>
            <span>案例</span>
          </a>
          <ul>
            <li>
              <a href="{{ url('/admin/case/all') }}">
                <i class="entypo-list"></i>
                <span>所有案例</span>
              </a>
            </li>

            <li>
              <a href="{{ url('/admin/case/new') }}">
                <i class="entypo-pencil"></i>
                <span>添加案例</span>
              </a>
            </li>            
          </ul>
        </li>

        <li>
          <a href="{{ url('/admin/post/all') }}">
            <i class="entypo-book-open"></i>
            <span>动态</span>
          </a>
          <ul>
            <li>
              <a href="{{ url('/admin/post/all') }}">
                <i class="entypo-list"></i>
                <span>所有动态</span>
              </a>
            </li>

            <li>
              <a href="{{ url('/admin/post/new') }}">
                <i class="entypo-pencil"></i>
                <span>添加动态</span>
              </a>
            </li>            
          </ul>
        </li>

        <li>
          <a href="{{ url('/admin/job/all') }}">
            <i class="entypo-graduation-cap"></i>
            <span>招聘</span>
          </a>
          <ul>
            <li>
              <a href="{{ url('/admin/job/all') }}">
                <i class="entypo-list"></i>
                <span>所有招聘</span>
              </a>
            </li>

            <li>
              <a href="{{ url('/admin/job/new') }}">
                <i class="entypo-pencil"></i>
                <span>添加招聘</span>
              </a>
            </li>            
          </ul>
        </li>
        
        <li>
          <a href="{{ url('/admin/system/basic') }}">
            <i class="entypo-tools"></i>
            <span>站点</span>
          </a>
          <ul>
            <li>
              <a href="{{ url('/admin/system/basic') }}">
                <i class="entypo-cog"></i>
                <span>基本</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/admin/system/slide') }}">
                <i class="entypo-picture"></i>
                <span>首页幻灯片</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/admin/user/info') }}">
                <i class="entypo-user"></i>
                <span>管理员</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li>
          <a href="{{ url('/admin/image/all') }}">
            <i class="entypo-picture"></i>
            <span>图片</span>
          </a>
        </li> -->
        <li>
          <a href="{{ url('/admin/category/all') }}">
            <i class="entypo-doc-text"></i>
            <span>分类</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/admin/demand/all') }}">
            <i class="entypo-chart-line"></i>
            <span>需求</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main-content container">
      <div class="row">
        <!-- Profile Info and Notifications -->
        <div class="col-md-6 col-sm-8 clearfix">
          <ul class="user-info pull-left pull-none-xsm">

            <!-- Profile Info -->
            <li class="profile-info dropdown">
              <!-- add class "pull-right" if you want to place this from right -->
              @yield('page_title')
              
              <ul class="dropdown-menu">
                <!-- Reverse Caret -->
                <li class="caret"></li>
                <!-- Profile sub-links -->
                <li>
                  <a href="#">
                    <i class="entypo-user"></i>
                    编辑资料
                  </a>
                </li>
                <li>
                  <a href="/mailbox/main/">
                    <i class="entypo-mail"></i>
                    Inbox
                  </a>
                </li>
                <li>
                  <a href="/extra/calendar/">
                    <i class="entypo-calendar"></i>
                    Calendar
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="entypo-clipboard"></i>
                    Tasks
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Raw Links -->
        <div class="col-md-6 col-sm-4 clearfix hidden-xs">
          <ul class="list-inline links-list pull-right">
            <li>
              <a href="{{url('/admin/auth/logout')}}">
                注销登录
                <i class="entypo-logout right"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <hr />
      @if(Session::has('message'))
      <div class="form-group">
        <div class="tips {{ 'text-'. Session::get('color', 'info') }}">
        <i class="pull-right">✕</i>
        {{ Session::get('message') }}
        </div>
      </div>
      @endif
      @if(count($errors->all()))
      <div class="tips text-danger">
          <i class="pull-right">✕</i>
          <ul>
          @foreach($errors->all('<li class="pad-y-5">:message</li>') as $error)
              {{$error}}
          @endforeach
          </ul>
      </div>
      @endif
      @yield('content')
      <!-- Footer -->
      <footer class="main">
        &copy; {{date('Y')}} <strong>星哲</strong>
        Powered by 
        <a href="http://writor.me" target="_blank">Writor Blog Framework</a>
      </footer>
    </div>
  </div>

  <script src="{{ asset('/backend/js/gsap/main-gsap.js') }}" id="script-resource-1"></script>
  <script src="{{ asset('/backend/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}" id="script-resource-2"></script>
  <script src="{{ asset('/backend/js/bootstrap.js') }}" id="script-resource-3"></script>
  <script src="{{ asset('/backend/js/joinable.js') }}" id="script-resource-4"></script>
  <script src="{{ asset('/backend/js/resizeable.js') }}" id="script-resource-5"></script>
  <script src="{{ asset('/backend/js/api.js') }}" id="script-resource-6"></script>
  <script src="{{ asset('/backend/js/cookies.min.js') }}" id="script-resource-7"></script>
  <script src="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.min.js') }}" id="script-resource-11"></script>
  <script src="{{ asset('/backend/js/admin-common.js') }}" id="script-resource-23"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    var currentAction = $('#main-menu a[href="{{URL::current()}}"]:last');
    var parentUl = currentAction.parent().parent('ul');
    var parentRoot = parentUl.parent('li.root-level');
    var parentLink = parentUl.prev('a');
    //TODO:js还需要优化，因为如果没有子菜单的高亮无效
    parentRoot.addClass('active opened').siblings().removeClass('active').removeClass('opened');
    if (parentRoot.hasClass('has-sub') || $('.page-container.sidebar-collapsed').length) {
      parentUl.slideDown(300);
    };
  });
  </script>
  @yield('page_js')
</body>
</html>
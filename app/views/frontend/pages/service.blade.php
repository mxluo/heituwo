@extends('frontend.layout')
@section('content')
<div class="content service-page">
    <div class="page-title-8 bg-blue page-title">
        <h1>服务</h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <img src="{{asset('/frontend/img/services1.jpg')}}" />
        </div>
    </div>
    <div class="col-xs-12 no-padding bg-white service-list">
        <div class="service-li" style="padding-left: 10px;">
            <h3>LOGO & VI</h3>
            <ul>
                <li>品牌命名</li>
                <li>品牌标志策略与设计</li>
                <li>品牌视觉识别系统（VI）设计</li>
                <li>画册、宣传品、物料设计制作</li>
                <li>名片设计</li>
            </ul>
        </div>
        <div class="service-li">
            <h3>品牌 & 营销</h3>
            <ul>
                <li>品牌战略规划</li>
                <li>企业形象更新塑造</li>
                <li>公关策划及品牌发布</li>
                <li>广告创意与设计</li>
                <li>户外广告设计与安装</li>
                <li>活动推广</li>
            </ul>
        </div>
        <div class="service-li">
            <h3>产品 & 包装</h3>
            <ul>
                <li>产品概念开发</li>
                <li>产品造型设计</li>
                <li>礼品设计与定制</li>
                <li>包装设计</li>
            </ul>
        </div>
        <div class="service-li">
            <h3>网络 & 交互</h3>
            <ul>
                <li>网站设计与实施</li>
                <li>网站更新管理与维护</li>
                <li>网络营销推广</li>
                <li>UI界面与交互设计</li>
            </ul>
        </div>
        <div class="service-li">
            <h3>环境 & 展示</h3>
            <ul>
                <li>环境导示系统设计与实施</li>
                <li>室内装潢、店面设计与施工</li>
                <li>宣传展厅、展会、办公环境设计</li>
                <li>标牌设计与制作</li>
            </ul>
        </div>
    </div>
    <div class="col-xs-12 page-title-4 bg-blue">
        <div class="intro"><h2>我们与用户建立持久的关系，通过领先的创新方法论、工作实践环节，并与设计流程相辅相成，使我们迅速高效地提供咨询、设计、落地服务，不断帮助客户赢得挑战，获得成功。</h2></div>
    </div>
    <div class="col-xs-12 page-title-2 bg-white">
        <h2>做梦想的实现者</h2>
        <p>我们与国内外领导品牌携手合作，也全心助力新兴品牌的成长。</p>

        <p>我们帮助客户实现企业革新与价值突破。</p>
        <img src="{{asset('/frontend/img/clients.jpg')}}" />
    </div>
    <div class="col-xs-12 bg-white page-title-4">
        @include('frontend.includes.form')
    </div>
</div>
@endsection
@extends('frontend.layout')
@section('content')
<div class="content about-page bg-white">
    <div>
        <div class="page-title-8 bg-blue page-title">
            <h1>关于我们</h1>
        </div>
        <div class="page-title-4">
            <h2>公司简介</h2>
            <p>
                星哲品牌设计与策划以品牌战略为核心，坚持以人为本，洞察人的潜在需求，通过设计与创意帮助企业与公共单位提高创新能力。我们着重于研究商务模式的革新，专注于为客户创造和管理品牌，提供从品牌研究、市场需求洞察、品牌成长机会分析、品牌战略分析、品牌规划、企业与品牌命名、设计（包括品牌识别设计、环境与展示设计、包装设计、产品设计、网络互动设计）到品牌导入、品牌建设、落地实施的全方位无缝对接服务，以提升企业品牌的影响力，促进商业成功。
            </p>
            <p>
                公司依托环东华时尚创意产业集聚区、上海设计之都公共服务平台，以国际化视野整合设计人才和行业资源，公司团队成员有包括来自清华、同济、东华等国内知名院校的设计创意人才。放眼国际，扎根本土，公司服务的客户涵盖了国内外各个行业的领导品牌，凭借其大胆创新，追求完美的信条，不断引领未来设计体验与社会行业革新。
            </p>
        </div>
    </div>

    <div class="col-no-padding">
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about1.jpg') }}" alt=""></div>
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about2.jpg') }}" alt=""></div>
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about3.jpg') }}" alt=""></div>
        <div class="clearfix"></div>
    </div>
    <div class="padding-tb-4 padding-x-30">
        <h2>企业文化</h2>
        <h3>企业理念：星浩瀚，哲无穷。</h3>
        <p>仰望星空，浩瀚无穷，我们唯有保持永不停息的探索与创新精神，才能接近和到达真理与智慧的彼岸。</p>
        <h3>服务使命：成就星品牌。</h3>
        <p>
            让品牌星光熠熠，我们不仅仅满足于追求商业的成功，更赋予品牌持久的生命与灵魂，
            <br>为此，我们初心不改，矢志不移，筑梦前行，让创意改变世界，用思想铸就品牌，做梦想的实现者。</p>
    </div>
    <div class="col-no-padding">
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about5.jpg') }}" alt=""></div>
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about6.jpg') }}" alt=""></div>
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about7.jpg') }}" alt=""></div>
        <div class="clearfix"></div>
    </div>
    <div class="col-no-padding">
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about8.jpg') }}" alt=""></div>
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about9.jpg') }}" alt=""></div>
        <div class="col-xs-4">
            <img src="{{ asset('/frontend/img/about10.jpg') }}" alt=""></div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
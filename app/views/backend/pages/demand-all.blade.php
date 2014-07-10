@extends('backend.layout')
@section('page_title')
<h1>需求列表</h1>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 form-group">
        <table class="table table-striped">
            <thead>
                <tr>                 
                    <th>姓名</th>
                    <th>邮箱</th>
                    <th>电话</th>
                    <th>公司</th>
                    <th>产品</th>
                    <th>时间</th>
                </tr>
            </thead>
            <tbody>
                @if(!count($demands))
                <tr>
                    <td colspan="6">目前没有需求</td>
                </tr>
                @else
                @foreach($demands as $demand)
                <tr>
                    <td>
                        {{$demand->name}}
                        <div class="td-text-wrapper text-left">
                            <div class="td-text">
                                <div class="tips-text">
                                    <strong>详细描述:</strong>
                                    <textarea style="width:100%;border:none;background-color:#fff" rows="5" disabled >{{$demand->detail}}</textarea>
                                </div>
                                <div class="tips-angle diamond"></div>
                            </div>
                        </div>
                    </td>
                    <td>{{$demand->email}}</td>
                    <td>{{$demand->tel}}</td>
                    <td>{{$demand->company}}</td>
                    <td>{{$demand->product}}</td>
                    <td>{{$demand->created_at}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="col-md-12 form-group text-center">
        {{$demands->links()}}
    </div>
</div>

@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.css') }}"  id="style-resource-3">
@endsection

@section('page_js')
<script src="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.min.js') }}" id="script-resource-11"></script>
@endsection
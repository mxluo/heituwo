@extends('backend.layout')
@section('page_title')
<h1>动态 <a href="{{url('/admin/post/new')}}" class="btn btn-info">添加动态</a></h1>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 form-group">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>标题</th>
                    <th>封面</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @if(!count($posts))
                <tr>
                    <td colspan="4">目前没有动态</td>
                </tr>
                @else
                @foreach($posts as $post)
                <tr>
                    <td class="td-post-title">{{$post->post_title}}</td>
                    <td>
                        @if(!empty($post->post_image)) <i class="entypo-picture"></i> @else 无 @endif
                        <div class="td-image-wrapper text-left" @if(empty($post->post_image)) style="display:none" @endif>
                            <div class="td-image">
                                <div class="tips-text">
                                    <img width="400" height="400" src="{{$post->post_image}}">
                                <div class="tips-angle diamond"></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{url('/admin/post/edit', array('id' => $post->id))}}" class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            编辑
                        </a>
                        <a href="{{url('/admin/post/delete', array('id' => $post->id))}}" class="btn btn-danger btn-sm btn-icon icon-left" onclick="return confirm('确认删除吗？')">
                            <i class="entypo-cancel"></i>
                            删除
                        </a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="col-md-12 form-group text-center">
        {{$posts->links()}}
    </div>
</div>
@endsection

@section('page_css')
<link rel="stylesheet" href="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.css') }}"  id="style-resource-3">
@endsection

@section('page_js')
<script src="{{ asset('/backend/js/selectboxit/jquery.selectBoxIt.min.js') }}" id="script-resource-11"></script>
@endsection
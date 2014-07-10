@foreach ($news_list as $news)
<div class="media">
    @if(!empty($news->post_image))
    <a class="pull-left" href="{{url('/newsdetail', array('id' => $news->id))}}">
        <img class="media-object" src="{{$news->post_image}}" alt="{{$news->post_title}}" style="height:auto; width:{{isset($img_width) ? $img_width : 180}}px;">
    </a>
    @endif
    <div class="media-body">
        <{{isset($title_tag) ? $title_tag : 'h4'}} class="media-heading"><a href="{{url('/news/detail', array('id' => $news->id))}}">{{$news->post_title}}</a></h4>
        <p class="text-indent">{{mb_substr(strip_tags(trim($news->post_content)), 0, isset($desc_length) ? $desc_length : 150)}}... <a href="{{url('/news', array('id' => $news->id))}}">阅读全文</a></p>
    </div>
</div>
<hr>
@endforeach
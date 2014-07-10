<?php namespace Frontend;

use \DB;
use \View;
use \Category;
use \Post;

/**
* 动态控制器
*/
class NewsController extends BaseController {

    /**
     * 动态列表
     *
     * @return Response
     */
    public function all()
    {
        $lastNews = Post::with('category')->orderBy('created_at', 'desc')->take(10)->get();
        $newsList = Post::with('category')->orderBy('updated_at', 'desc')->paginate(10);
        
        return View::make('frontend.pages.news-list')
                    ->withNewsList($newsList)
                    ->withLastNews($lastNews)
                    ->withPagedesc('新闻动态');
    }

        
    /**
     * 动态详情
     *
     * @return Response
     */
    public function detail($id)
    {
        $news = Post::findOrFail($id);
        $newsList = Post::with('category')->orderBy('created_at', 'desc')->take(10)->get();
        $before = Post::where('id', '<', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $after = Post::where('id', '>', $id)->orderBy('created_at', 'asc')->take(1)->get();

        return View::make('frontend.pages.news-detail')
		     ->withNews($news)
		     ->withLastNews($newsList)
        	 ->withBefore($before)
		     ->withAfter($after)
		     ->withPagedesc($news->post_title);
    }

}

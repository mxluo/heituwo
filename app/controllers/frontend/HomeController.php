<?php namespace Frontend;

use \DB;
use \View;
use \Post;
use \Image;
use \Cases;
use \Input;
use \System;
use \Category;

class HomeController extends BaseController {

    /**
     * 首页
     *
     * @return Response
     */
    public function index()
    {
        $cases = Cases::orderBy('updated_at', 'desc')->take(9)->get();
        //$news = Post::with('category')->where('post_image', '!=', '')->orderBy('updated_at', 'desc')->take(5)->get();

        $slides = Image::getHomeSlideImages();
        if (!empty($slides)) {
            $slides = array_pluck($slides->toArray(), 'src');
        }

        return View::make('frontend.pages.home')
                    ->withCases($cases)
                    ->withSlides($slides)
                    //->withNewsList($news)
                    ->withPagedesc('首页');
    }

    /**
     * 搜索
     *
     * @return Response
     */
    public function search()
    {
        $keyword = Input::get('keyword');
        $Cases   = Cases::where('case_title', 'like', '%'.$keyword.'%')->orWhere('service_content', 'like', '%'.$keyword.'%')->get();
        $newsList    = Post::where('post_title', 'like', '%'.$keyword.'%')->get();
        if (count($newsList)) {
            foreach ($newsList as $k => $v) {
                $newsList[$k]->day = strchr($v->created_at, ' ', true);
            }
        }
        return View::make('frontend.pages.search')->withCases($Cases)->withNewsList($newsList)->withPagedesc('搜索结果');
    }
}
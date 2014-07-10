<?php namespace Backend;
use \DB;
use \System;
use \View;
use \Input;
use \Image;
use \Redirect;
use \Validator;

class SystemController extends BaseController {

    
    /**
     * 基本设置
     *
     * @return Response
     */
    public function getBasic()
    {
        return View::make('backend.pages.system-basic');
    }
    /**
     * 更新基本设置
     *
     * @return Response
     */
    public function postBasic()
    {
        System::where('option_name', 'site_name')->update(array('option_value' =>  Input::get('site_name')));
        System::where('option_name', 'site_keywords')->update(array('option_value' =>  Input::get('site_keywords')));
        System::where('option_name', 'site_description')->update(array('option_value' =>  Input::get('site_description')));

        return Redirect::back()->withMessage('更新成功！');
    }

    /**
     * 首页幻灯片
     *
     * @return Response
     */
    public function getSlide()
    {
        $slides = Image::getHomeSlideImages();
        if (!empty($slides)) {
            $slides = array_pluck($slides->toArray(), 'src');
        }

        return View::make('backend.pages.system-home-slide')->withSlides($slides);
    }

    /**
     * 更新首页幻灯片
     *
     * @return Response
     */
    public function postSlide()
    {
        $slides = Image::getHomeSlideImages();
        if (!empty($slides)) {
            $slides = array_pluck($slides->toArray(), 'src');
        }

        if (array_unique(Input::get('images')) != $slides) {
            Image::setHomeSlideImages(array_unique(Input::get('images')));
        }

        return Redirect::back()->withMessage('更新成功！');
    }
}
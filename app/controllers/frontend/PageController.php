<?php namespace Frontend;
use \DB;
use \System;
use \Job;
use \Demand;
use \View;
use \Input;
use \Redirect;
use \Validator;

class PageController extends BaseController {

    /**
     * 招聘
     *
     * @return Response
     */
    public function job()
    {
        $jobs = Job::orderBy('updated_at', 'desc')->get();

        return View::make('frontend.pages.job')->withJobs($jobs)->withPagedesc('加入');
    }

    /**
     * 服务 
     *
     * @return Response
     */
    public function service()
    {
        return View::make('frontend.pages.service')->withPagedesc('服务');
    }

    /**
     * 联系 
     *
     * @return Response
     */
    public function contact()
    {
        return View::make('frontend.pages.contact')->withPagedesc('联系');
    }

    /**
     * 用户表单
     *
     * @return Response
     */
    public function demand()
    {
        $rules = array(
                  'cname' => 'required',
                  'email' => 'required|email',
                  'tel'   => 'required',
                 );

        $validator = Validator::make(Input::all(), $rules);

        //验证失败
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        }

        $demand = new Demand;
        $demand->name    = Input::get('cname');
        $demand->email   = Input::get('email');
        $demand->tel     = Input::get('tel');
        $demand->company = Input::get('company');
        $demand->product = Input::get('product');
        $demand->detail  = Input::get('desc');

        $demand->save();

        return Redirect::back()->withMessage('需求提交成功！');
    }


    /**
     * 关于
     *
     * @return Response
     */
    public function about()
    {
        return View::make('frontend.pages.about')->withPagedesc('关于');
    }

}
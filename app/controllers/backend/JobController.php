<?php namespace Backend;

use \DB;
use \View;
use \Job;
use \Input;
use \Redirect;
use \Validator;

/**
* 招聘控制器
*/
class JobController extends BaseController {

    protected $rules = array(
                  'job' => 'required',
                  'num' => 'required|integer',
                 );

    /**
     * 所有招聘
     *
     * @return Response
     */
    public function getAll()
    {
        $jobs = Job::orderBy('updated_at', 'desc')->paginate(15);


        return View::make('backend.pages.job-all')->withJobs($jobs);
    }
        
    /**
     * 新招聘
     *
     * @return Response
     */
    public function getNew()
    {
        return View::make('backend.pages.job-new');
    }

    /**
     * 创建招聘
     *
     * @return Response
     */
    public function postCreate()
    {
        $validator = Validator::make(Input::all(), $this->rules);

        //验证失败
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        }   

        $job = new Job;
        $job->job     = Input::get('job');
        $job->en_job  = Input::get('ejob');
        $job->number  = Input::get('num');
        $job->place   = Input::get('place');
        $job->duty    = Input::get('duty');
        $job->ask_for = Input::get('ask');

        $job->save();

        return Redirect::back()->withMessage('发布成功！');

    }

    /**
     * 编辑招聘
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function getEdit($id)
    {
        $job = Job::findOrFail($id);

        return View::make('backend.pages.job-edit')->withJob($job);
    }

    /**
     * 更新招聘
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function postUpdate($id)
    {
        $job = Job::findOrFail($id);
        $validator = Validator::make(Input::all(), $this->rules);

        //验证失败
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        } 

        $job->job = Input::get('job');
        $job->en_job = Input::get('ejob');
        $job->number = Input::get('num');
        $job->place = Input::get('place');
        $job->duty = Input::get('duty');
        $job->ask_for = Input::get('ask');

        $job->save();

        return Redirect::back()->withMessage('更新成功！');
    }

    /**
     * 删除
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function anyDelete($id)
    {
        Job::findOrFail($id)->delete();
        
        return Redirect::back()->withMessage("删除成功！");
    }

}

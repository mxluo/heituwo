<?php namespace Backend;

use \DB;
use \View;
use \Category;
use \Cases;
use \Input;
use \Image;
use \Redirect;
use \Validator;

/**
* 案例控制器
*/
class CasesController extends BaseController {

    protected $rules = array(
                  'title'           => 'required',
                  'images'          => 'required|array',
                  'client_name'     => 'required',
                  'service_content' => 'required',
                  'industry'        => 'required|integer',
                  'specialty'       => 'required|integer',
                 );

    /**
     * 所有案例
     *
     * @return Response
     */
    public function getAll()
    {
        $cases = Cases::orderBy('updated_at', 'desc')->paginate(15);

        $industries = Category::industry()->get();
        $specialties = Category::specialty()->get();

        $inds = $spes = array();

        foreach ($industries as $v) {
            $inds[$v->id] = $v['name'];
        }

        foreach ($specialties as $v) {
            $spes[$v->id] = $v['name'];
        }

        foreach ($cases as $k => $v) {
            $cases[$k]->show_image = trim(strrchr($v->case_image,'/'), '/');
        }

        return View::make('backend.pages.case-all')->withCases($cases)->withInds($inds)->withSpes($spes);
    }
        
    /**
     * 新案例
     *
     * @return Response
     */
    public function getNew()
    {
        $industries  = Category::industry()->get();
        $specialties = Category::specialty()->get();

        return View::make('backend.pages.case-new')->withIndustries($industries)->withSpecialties($specialties);
    }

    /**
     * 创建案例
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

        $case = new Cases;
        $this->saveCase($case);
        Image::setCaseImages(array_unique(Input::get('images')), $case->id);

        return Redirect::to(url('/admin/case/all'))->withMessage('发布成功！');

    }

    /**
     * 编辑案例
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function getEdit($id)
    {
        $case = Cases::with('images')->findOrFail($id);
        
        $industries = Category::industry()->get();
        $specialties = Category::specialty()->get();

        return View::make('backend.pages.case-edit')->withCases($case)->withIndustries($industries)->withSpecialties($specialties);
    }

    /**
     * 更新案例
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function postUpdate($id)
    {
        $case = Cases::with('images')->findOrFail($id);
        $validator = Validator::make(Input::all(), $this->rules);

        //验证失败
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        } 

        $this->saveCase($case);
        //如果和编辑前一样，不修改图片
        if (array_unique(Input::get('images')) != array_pluck($case->images->toArray(), 'src')) {
            Image::setCaseImages(array_unique(Input::get('images')), $case->id);
        }

        return Redirect::back()->withMessage('更新成功！');
    }

    /**
     * 公用保存案例
     * 
     * @param  Cases  $case
     *      
     * @return void
     */
    protected function saveCase(Cases $case)
    {
        $case->case_title      = Input::get('title');
        $case->client_name     = Input::get('client_name');
        $case->service_content = Input::get('service_content');
        $case->case_industry   = Input::get('industry');
        $case->case_desc       = Input::get('desc');
        $case->case_specialty  = Input::get('specialty');
        $case->save();
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
        Cases::findOrFail($id)->delete();
        
        return Redirect::back()->withMessage("删除成功！");
    }

}

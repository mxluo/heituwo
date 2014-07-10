<?php namespace Backend;

use \DB;
use \Tree;
use \View;
use \Category;
use \Input;
use \Redirect;
use \Validator;

class CategoryController extends BaseController {

     protected $rules = array(
                  'name' => 'required',
                  'type' => 'required|integer'
                 );


    /**
     * 分类列表
     *
     * @return Response
     */
    public function getAll()
    {
        $categories = Category::get();
        $types = array(1 => '行业', 2 => '专业', 3 => '动态');

        return View::make('backend.pages.category-all')->withCategories($categories)->withTypes($types);
    }

    /**
     * 创建分类 
     *
     * @param string $value 
     *
     * @return Response
     */
    public function postCreate()
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        // 检测分类名
        if (Category::whereName(Input::get('name'))->count()) {
            return Redirect::back()->withMessage("分类 '" . Input::get('name')."' 已经存在！")
                                   ->withColor('danger')
                                   ->withInput(Input::all());
        }

        // 创建分类
        $category            = new Category;
        $category->name      = Input::get('name');
        $category->type      = Input::get('type');

        $category->save();

        return Redirect::back()->withMessage("分类 '$category->name' 添加成功！"); 
    }

    /**
     * 编辑分类
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function getEdit($id)
    {
        $category = Category::findOrFail($id);
        return View::make('backend.pages.category-edit')
                    ->withCategory($category);
    }

    /**
     * 更新
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function postUpdate($id)
    {
        $category = Category::findOrFail($id);
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        // 检测分类名
        if (Category::where('id', '!=', $id)->whereName(Input::get('name'))->count()) {
            return Redirect::back()->withMessage("分类 '" . Input::get('name')."' 与其它分类重复！")
                                   ->withColor('danger')
                                   ->withInput(Input::all());
        }

        // 创建分类
        $category->name = Input::get('name');
        $category->type = Input::get('type');

        $category->save();

        return Redirect::back()->withMessage("更新成功！"); 
    }

    /**
     * 删除分类
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function anyDelete($id)
    {
        if ($id == 1) {
            return Redirect::back('系统默认分类不允许删除！');
        }

        Category::findOrFail($id)->delete();
        return Redirect::back()->withMessage("删除成功！");
    }
}
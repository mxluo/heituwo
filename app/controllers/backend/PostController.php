<?php namespace Backend;

use \DB;
use \View;
use \Category;
use \Post;
use \Input;
use \Redirect;
use \Validator;

/**
* 动态控制器
*/
class PostController extends BaseController {

    protected $rules = array(
                  'title'    => 'required',
                  'content'  => 'required',
                  //'category' => 'required|integer',
                  'img'      => 'url',
                 );

    /**
     * 所有动态
     *
     * @return Response
     */
    public function getAll()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(15);

        // $categories = Category::where('type', 3)->get();
        // $cats = array();
        // foreach ($categories as $v) {
        //     $cats[$v->id] = $v->name;
        // }

        foreach ($posts as $k => $v) {
            $posts[$k]->show_image = trim(strrchr($v->post_image,'/'), '/');
        }

        return View::make('backend.pages.post-all')->withPosts($posts);//->withCats($cats);
    }
        
    /**
     * 新动态
     *
     * @return Response
     */
    public function getNew()
    {
        //$categories = Category::where('type', 3)->get();
        return View::make('backend.pages.post-new');//->withCategories($categories);
    }

    /**
     * 创建动态
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

        $post = new Post;
        $this->savePost($post);

        return Redirect::back()->withMessage('发布成功！');

    }

    /**
     * 编辑动态
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function getEdit($id)
    {
        $post = Post::findOrFail($id);
        //$categories = Category::where('type', 3)->get();

        return View::make('backend.pages.post-edit')->withPost($post);//->withCategories($categories);
    }

    /**
     * 更新动态
     *
     * @param integer $id 
     *
     * @return Response
     */
    public function postUpdate($id)
    {
        $post = Post::findOrFail($id);
        $validator = Validator::make(Input::all(), $this->rules);

        //验证失败
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        } 

        $this->savePost($post);

        return Redirect::back()->withMessage('更新成功！');
    }

    /**
     * 公用保存
     *
     * @param Post $post 
     *
     * @return void
     */
    protected function savePost($post)
    {
        $post->post_title = Input::get('title');
        $post->post_image = Input::get('img', '');
        $post->post_content = Input::get('content');
        //$post->post_category = Input::get('category');
        $post->save();
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
        Post::findOrFail($id)->delete();
        
        return Redirect::back()->withMessage("删除成功！");
    }

}

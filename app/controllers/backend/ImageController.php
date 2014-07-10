<?php namespace Backend;
use \DB;
use \Image;
use \Post;
use \View;
use \Input;
use \Cases;
use \Redirect;
use \Response;
use \Validator;

class ImageController extends BaseController {
    protected $rules = array(
                  'img'    => 'required',
                 );


    /**
     * 列表
     *
     * @return Response
     */
    public function getAll()
    {
        $Cases = Cases::orderBy('updated_at', 'desc')->paginate(15);
        foreach ($Cases as $k => $v) {
            $Cases[$k]->count = Image::where('cid', $v->id)->count();
        }
        return View::make('backend.pages.image-all')->withCases($Cases);
    }

    /**
     * 新图片
     *
     * @param integer $cid 
     *
     * @return Response
     */
    public function getNew($cid)
    {
        return View::make('backend.pages.image-new')->withCid($cid);
    }

    /**
     * 保存图片
     *
     * @return Response
     */
    public function postCreate($cid)
    {
        $validator = Validator::make(Input::all(), $this->rules);

        //验证失败
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        } 

        $images = Input::get('img');

        foreach ($images as $k => $v) {
            if (!empty($v)) {
                $imgs = Image::where('cid', $cid)->where('name', $v)->get();
                if (!count($imgs)) {
                    $image = new Image;
                    $image->cid = $cid;
                    $image->name = $v;
                    $image->save();     
                }
            }            
        }      

        return Redirect::back()->withMessage('图片发布成功！');

    }


    /**
     * 编辑图片
     *
     * @param integer $cid 
     *
     * @return Response
     */
    public function getEdit($cid)
    {
        $images = Image::where('cid', $cid)->get();
        return View::make('backend.pages.image-edit')->withImages($images)->withCid($cid);
    }

    /**
     * 图片上传
     *
     * @return string
     */
    public function postUpload()
    {
        if (Input::hasFile('image')) { 
            $image = Input::file('image');
            $ext = strtolower(pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION));
            $filename = '/attachments/images/'.date('Y/m').'/' . md5(microtime()) .".$ext";
            is_dir(dirname(public_path().$filename)) || mkdir(dirname(public_path().$filename), 0755, true);
            //TODO:检测
            $image->move(dirname(public_path() . $filename), basename($filename));

            return Response::json(array('status' => 1, 'src' => asset($filename)));
        } else {
            return Response::json(array('status' => 0));
        }
    }

    /**
     * 删除
     *
     * @param integer $id 
     * @param string $t 
     *
     * @return Response
     */
    public function anyDelete($id, $t)
    {
        switch ($t) {
            case 'c':
                $data = Cases::findOrFail($id);
                $img = strstr($data->case_image, '/attachments/images');
                $data->case_image = '';
                $data->save();
                break;
            case 'p':
                $data = Post::findOrFail($id);
                $img = strstr($data->post_image, '/attachments/images');
                $data->post_image = '';
                $data->save();
                break;
            case 'i':
                $data = Image::findOrFail($id);
                $img = strstr($data->name, '/attachments/images');
                $data->delete();;
                break;
            
        }
        
        if ($img) {
            $path = dirname(dirname(dirname(__DIR__))).'/public'.$img;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        return Response::json(array('status' => 1, 'id' => $data->id));
    }

}
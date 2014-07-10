<?php namespace Backend;

use \Auth;
use \Hash;
use \Password;
use \View;
use \Input;
use \User;
use \Redirect;
use \Validator;

class UserController extends BaseController {

    /**
     * 显示
     *
     * @return Response
     */
    public function getInfo()
    {
    	$uid = Auth::user()->id;
        $user = User::findOrFail($uid);
        return View::make('backend.pages.user')->withUser($user);
    }

    /**
     * 修改
     *
     * @return Response
     */
    public function postEdit()
    {
    	$uid = Auth::user()->id;
        $user_info = User::findOrFail($uid);
        $user_info->user_email = Input::get('email');

        $old_password = Input::get('old_password');
        
        if (!empty($old_password)) {
            $user = array(
                    'user_login' => 'admin',
                    'password'   => $old_password,
                    );
            if (Auth::attempt($user)) {
            	$password = Input::get('password');
                if ($password == Input::get('password_confirmation')) {
                    $pass = Hash::make($password);
                    $user_info->user_pass = $pass;                    
                } else {
                    return Redirect::back()->withMessage('两次输入的密码不一致');    
                }
            } else {
                return Redirect::back()->withMessage('密码错误');
            }    
        }

        $user_info->save();
        
		return Redirect::back()->withMessage('修改成功！');
    }

}
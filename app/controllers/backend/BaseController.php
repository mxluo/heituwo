<?php namespace Backend;

use \View;
use \System;

class BaseController extends \Controller {

    function __construct()
    {
        $options = System::all()->toArray();
        foreach($options as $option) {
        	View::share($option['option_name'], $option['option_value']);
        }
    }	
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/16
 * Time: 16:30
 */
header("Content-type: text/html; charset=utf-8");

class Blog extends CI_Controller{

    public function _remap($method, $params = array())
    {
        log_message('debug',$method);
        log_message('debug',$params);
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        show_404();
    }


    public function index()
    {
        log_message('debug', '哈哈哈');
        echo 'Hello World!';
    }

    public function comments()
    {
        log_message('debug', 'Look at this!');
        echo 'Look at this!';
    }

    public function shoes($sandals, $id)
    {
        echo $sandals,'<br>';
        echo $id;
    }
}
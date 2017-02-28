<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/16
 * Time: 16:30
 */
header("Content-type: text/html; charset=utf-8");

class Blog extends CI_Controller{

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
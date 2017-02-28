<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/16
 * Time: 16:30
 */
header("Content-type: text/html; charset=utf-8");

class Blog extends CI_Controller
{

    public function index()
    {
        $data['title']     = "My Real Title";
        $data['heading']   = "My Real Heading";
        $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
        $data['content']   = 'blog/index';
        $this->load->view('template', $data);
    }

    public function comments()
    {
        $this->load->model('blog/blog_model');
        $data = $this->blog_model->get_last_ten_entries();
        var_dump($data);
    }

    public function shoes($sandals, $id)
    {
        echo $sandals, '<br>';
        echo $id;
    }
}
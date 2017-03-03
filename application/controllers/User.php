<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by CI_LEARN.
 * User: Klaus
 * Date: 2017/3/3
 * Time: 9:23
 *
 */
class User extends CI_Controller
{
    /**
     * 登录页面
     */
    public function index()
    {

    }

    /**
     * 注册页面
     */
    public function regist()
    {
        $this->load->helper('captcha');
        $vals = array(
//            'word'        => 'Random word',
            'img_path'    => './captcha/',
            'img_url'     => 'http://localhost/CI_LEARN/captcha/',
            'img_width'   => '150',
            'img_height'  => 30,
            'expiration'  => 7200,
            'word_length' => 6,
            'font_size'   => 28,
            'font_path' => '/resource/msyh.ttf',
            'img_id'      => 'Imageid',
            'pool'        => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors'      => array(
                'background' => array(255, 255, 255),
                'border'     => array(255, 255, 255),
                'text'       => array(0, 0, 0),
                'grid'       => array(255, 40, 40)
            )
        );

        $cap = create_captcha($vals);
        echo $cap['image'];
    }

    /**
     * 保存
     */
    public function save()
    {

    }

    /**
     * 退出
     */
    public function loginOut()
    {

    }
}
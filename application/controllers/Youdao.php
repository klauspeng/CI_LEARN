<?php

/**
 * Created by CI_LEARN.
 * User: Klaus
 * Date: 2017/3/2
 * Time: 13:48
 */

header("Content-type: text/html; charset=utf-8");

class Youdao extends CI_Controller
{
    public function index($q = '')
    {
        $youdaoApi = 'http://fanyi.youdao.com/openapi.do?keyfrom=pthlp123&key=578031050&type=data&doctype=json&version=1.1&q=';

        $data['title']   = "有道词典查询";
        $data['content'] = 'youdao/index';

        if ($q != '') {
            $youdaoApi .= $q;
            $output       = $this->curlGet($youdaoApi);
            $data['data'] = $output;
            $data['q'] = $q;
        }

        $this->load->view('template', $data);
    }

    /**
     * Curl get方法获取数据
     * @param $youdaoApi
     * @return mixed
     */
    private function curlGet($youdaoApi)
    {
        //初始化
        $ch = curl_init();
        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $youdaoApi);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //执行并获取HTML文档内容
        $output = curl_exec($ch);
        //释放curl句柄
        curl_close($ch);
        //打印获得的数据
        $output = json_decode($output, true);
        return $output;
    }
}
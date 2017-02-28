<?php
//加载公共头部
$this->load->view('header/index');

//加载内容
$this->load->view($content);
//加载公共尾部
$this->load->view('footer/index');

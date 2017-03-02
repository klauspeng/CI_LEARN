<?php
//加载公共头部
$this->load->view('header/index');
$this->load->view('header/menu');

//加载内容
$this->load->view($content);
//加载公共尾部
$this->load->view('footer/index');
//加载js
$this->load->view("js/".$content);


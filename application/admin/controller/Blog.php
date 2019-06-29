<?php
namespace app\admin\controller;
use think\View;
use think\Controller;

class Blog extends Controller
{
    public function index(){
        $view = new View();

        return $view->fetch('index');
    }
    //添加文章
    public function add_blog(){
        $view = new View();
        return $view->fetch();
    }
}

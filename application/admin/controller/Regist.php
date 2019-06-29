<?php
namespace app\admin\controller;
use think\View;
use think\Controller;
class Regist extends Controller{
    public function index(){
        $view = new View();
        return $view->fetch('index');
    }
}
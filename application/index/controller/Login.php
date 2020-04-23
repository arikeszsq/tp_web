<?php


namespace app\index\controller;


use think\Controller;
use think\Session;

class Login extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        $params = $_REQUEST;
//        if($params['username']=='zhusq'&&$params['password']==123456){
//            Session::set('token',2345324);
//        }

        Session::set('token',2345324);

        $this->redirect('/index/index/index');
    }

}
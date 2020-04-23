<?php


namespace app\index\controller;


use think\Controller;
use think\Request;

class Base extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        if (!session('token')) {
            $this::error("您尚未登录系统！",url('/login'));
        }
    }

}
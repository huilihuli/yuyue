<?php

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    public function index(){
        $aa = 'fdfdfdffs';
        return view('admin@login/index',compact('aa'));
    }
}

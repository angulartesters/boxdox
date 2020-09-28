<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller as Controller;
class AnotherController extends Controller
{
    //

    // public function __construct(){
    //     $this->middleware('auth')->except('showUsers2');
    // }

    public function showUsers1(){
        return 'hey there brown cow1!';
    }

    public function showUsers2(){
        return 'hey there brown cow2!';
    }

    public function showUsers3(){
        return 'hey there brown cow3!';
    }

    public function showUsers4(){
        return 'hey there brown cow4!';
    }
}

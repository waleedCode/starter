<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SecondController extends Controller
{
    public function __construct(){
        $this-> middleware('auth')-> except('showSecond0');
    }
    public function showSecond0(){
        return 'Second Controoler0';
    }
    public function showSecond1(){
        return 'Second Controoler1';
    }
    public function showSecond2(){
        return 'Second Controoler2';
    }
    public function showSecond3(){
        return 'Second Controoler3';
    }
}

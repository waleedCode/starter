<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showUserName(){
        return 'waleed Eshage';
    }    
    public function getIndex(){
        $obj = new stdClass();
        $obj -> id=1;
        $obj -> name='waleed ';
        $obj -> gander=1;
    
        return view('welcome',compact('obj')); 
       }
}
 class stdClass{

}


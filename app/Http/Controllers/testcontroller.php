<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class testcontroller extends Controller
{
    //
    public  function  welcome()
    {

        return 'hello from test controller';
    }
    public  function test4($username)
    {
        return 'hello  '. $username ;

    }
    public function form()
    {
return view('form');
    }

    public function formreq()
    {
       DB::table('users')->insert(
           ["name"=>$_POST['name'] ,"phone"=>$_POST['phone'],"address"=>$_POST['address']]
       );
    }

    public  function testblade()
    {
     return view('test');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class LoginController extends BaseController
{
   public function login(){
   		return view('login');
   }
    public function dologin(){
//        $id  =$request->id;
		$re = DB::table('demo_user')->insertGetId(['username'=>'123456']);
		if($re){
		    $token  = base64_encode(base64_encode('agui'.$re));
//		    setcookie('token',$token,time()*24*3600);
		    $code =  1;
		    $message = 'Success';
		    $returnarr = [
		        'status'=>1,
                'message'=>"获取成功",
                'data'=>$token
            ];
            echo json_encode($returnarr);
            exit;

        }else{
		    return view('login');
        }
   }

   public function demo(Request $request){
       $id =  $request->id;
       echo json_encode([
           'id'=>$id,
           'message'=>'success',
       ]);
       exit;

   }
   public function index(){
       echo '欢迎来到index';
   }
}

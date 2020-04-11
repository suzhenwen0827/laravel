<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $token  = $request->token;
        $auth = $request->header('Authorization');
        $token = substr($auth, strlen('Bearer '));
        if($token == '' || $token == null){
            echo json_encode(['code'=>-2,'msg'=>'token,缺失']);exit;
        }
        if(!$this->tokenDecode($token)){
            echo json_encode(['code'=>-1,'msg'=>'token,ERROR']);exit;
        }
        $request->offsetSet('id', $this->tokenDecode($token));
        return $next($request);
    }
    private  function tokenDecode ($token){
        $tokenDecode = base64_decode(base64_decode($token));
        $id = substr($tokenDecode,'4');
        return $id;

    }
}

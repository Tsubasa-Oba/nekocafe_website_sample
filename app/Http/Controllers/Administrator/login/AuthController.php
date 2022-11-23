<?php

namespace App\Http\Controllers\Administrator\login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\login\LoginFromRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginFromRequest $request)
    {
        //$credentials = $request->only('admin_id','admin_pass');

        $credentials = [
        'admin_id' => $request->admin_id,
        'password' => $request->admin_pass
        ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->route('administrator.home')->with('login_success', 'ログインに成功しました');
                       
            
        }

        return back()->withErrors([
            'login_error' => '管理者IDまたは管理者パスワードが間違っています。',
        ]);
        
    }

}

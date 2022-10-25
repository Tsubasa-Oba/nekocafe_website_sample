<?php

namespace App\Http\Controllers\Administrator\signUp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;


class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {     
        $admin = new Admin;
        $admin->name = $request->name;     
        $admin->admin_id = $request->admin_id;
        $admin->admin_pass = $request->admin_pass;
        $admin->auth_type = $request->auth_type;
        $admin->save();

        return redirect()->route('administrator.signUp.index');
    }
}

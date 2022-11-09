<?php

namespace App\Http\Controllers\Administrator\signUp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


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
        $admin->admin_pass = Hash::make($request->admin_pass);
        $admin->type = $request->type;
        $admin->save();

        return redirect()->route('administrator.signUp.index');
    }
}

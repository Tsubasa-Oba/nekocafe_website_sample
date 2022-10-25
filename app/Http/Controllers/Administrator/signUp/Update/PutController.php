<?php

namespace App\Http\Controllers\Administrator\signUp\Update;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */    
    public function __invoke(Request $request)
    {
        $admin = Admin::where('id', $request->id())->firstOrFail();

        DB::transaction( function () use($request, $admin) {
            $admin->name = $request->input('name');
            $admin->admin_id = $request->input('admin_id');
            $admin->admin_pass = $request->input('admin_pass');
            $admin->auth_type = $request->input('auth_type');            
            $admin->save();               
        });

        return redirect()->route('administrator.signUp.update.index', ['id' => $admin->id])
        ->with('feedback.success', "管理者情報を編集しました");
    }


}

<?php

namespace App\Http\Controllers\Administrator\signUp\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $admin = Admin::where('id', $request->id)->firstOrFail();
        $adminViewData = [
            'name' => $admin->name,
            'admin_id' => $admin->admin_id,
            'admin_pass' => $admin->admin_pass,
            'type' => $admin->type,
            'indexUrl' => route('administrator.signUp.index'),
            'editUrl' => route('administrator.signUp.update.put', ['id' => $admin->id]),
        ];

        return view('administrator.signUp.update')
        ->with('updateViewData', $adminViewData);
        
    }
}

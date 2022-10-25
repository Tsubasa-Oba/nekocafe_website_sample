<?php

namespace App\Http\Controllers\Administrator\signUp;

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
        
        $admins = Admin::paginate(10);

        $adminsViewData = [];

        foreach($admins as $admin){
            $adminViewData = [
                'name' => $admin->name,
                'admin_id' => $admin->admin_id,
                'admin_pass' => $admin->admin_pass,
                'auth_type' => $admin->auth_type,
                'editUrl' => route('administrator.signUp.update.index', ['id' => $admin->id]),
                'deleteUrl' => route('administrator.signUp.delete', ['id' => $admin->id])
            ];
            $adminsViewData[] = $adminViewData;
        }

        $createUrl = route('administrator.signUp.create');

        $viewData = [
            'adminsViewData' => $adminsViewData,
            'createUrl' => $createUrl,
            'allPaginates' => $admins->links('vendor.pagination.administratorCustom') 
        ];

        return view('administrator.signUp.index')
        ->with('indexViewData', $viewData);
        
    }
}

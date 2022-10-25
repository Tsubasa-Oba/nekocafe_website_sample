<?php

namespace App\Http\Controllers\Administrator\signUp\Delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class DeleteController extends Controller
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
        $admin->delete();
        return redirect()->route('administrator.signUp.index')
        ->with('feedback.success', "プロフィールを削除しました");
    }
}

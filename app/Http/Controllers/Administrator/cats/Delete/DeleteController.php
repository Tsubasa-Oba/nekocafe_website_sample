<?php

namespace App\Http\Controllers\Administrator\cats\Delete;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;

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
        $cat = Cat::where('id', $request->id())->firstOrFail();
        $cat->delete();
        return redirect()->route('administrator.cats.index')
        ->with('feedback.success', "プロフィールを削除しました");
    }
}

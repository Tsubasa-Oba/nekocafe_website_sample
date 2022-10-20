<?php

namespace App\Http\Controllers\Administrator\cats\Delete;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Http\Requests\Administrator\cats\CatsRequest;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CatsRequest $request)
    {
        $cat = Cat::where('id', $request->id())->firstOrFail();
        $cat->delete();
        return redirect()->route('administrator.cats.index')
        ->with('feedback.success', "プロフィールを削除しました");
    }
}

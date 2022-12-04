<?php

namespace App\Http\Controllers\Administrator\cats\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cat;

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
        $cat = Cat::where('id', $request->id())->firstOrFail();
        $catViewData = [
            'name' => $cat->name,
            'birthday' => $cat->birthday,
            'photo_URL' => asset('/storage/images/' . $cat->photo_URL),
            'Instagram_URL' => $cat->Instagram_URL,
            'cats_type' => $cat->cats_type,
            'introduction' => $cat->introduction,
            'indexUrl' => route('administrator.cats.index'),
            'editUrl' => route('administrator.cats.update.put', ['id' => $cat->id]),
            // 'deleteUrl' => route('administrator.cats.delete', ['id' => $cat->id])
        ];

        return view('administrator.cats.update')
        ->with('updateViewData', $catViewData);
        
    }
}

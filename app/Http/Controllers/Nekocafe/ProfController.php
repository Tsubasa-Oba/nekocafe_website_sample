<?php

namespace App\Http\Controllers\Nekocafe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cat;
use Carbon\Carbon;

class ProfController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cats = Cat::paginate(1);

        $catsViewData = [];

        foreach($cats as $cat){
            $date = (new Carbon($cat->birthday))->format('Y年m月d日');
            $catViewData = [
                'name' => $cat->name,
                'birthday' => $date,
                'photo_URL' => asset('/storage/images/' . $cat->photo_URL),
                'Instagram_URL' => $cat->Instagram_URL,
            ];
            $catsViewData[] = $catViewData;
        }


        $viewData = [
            'catsViewData' => $catsViewData,
            'allPaginates' => $cats->links('vendor.pagination.administratorCustom') 
        ];

        return view('nekocafe.prof')
        ->with('indexViewData', $viewData);
    }
}

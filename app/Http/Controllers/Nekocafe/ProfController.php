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
        $cats = Cat::paginate(8);

        $catsViewData = [];

        foreach($cats as $cat){
            $date = (new Carbon($cat->birthday))->format('Y年m月d日');
            $catViewData = [
                'name' => $cat->name,
                'birthday' => $date,
                'photo_URL' => asset('/storage/images/' . $cat->photo_URL),
                'Instagram_URL' => $cat->Instagram_URL,
                'cats_type' => $cat->cats_type,
                'introduction' => $cat->introduction,
            ];
            $catsViewData[] = $catViewData;
        }


        $viewData = [
            'catsViewData' => $catsViewData,
            'allPaginates' => $cats->links('vendor.pagination.administratorCustom'),
            'CONCEPT' => route('nekocafe.index') . '#CONCEPT', 
            'CATS' => route('nekocafe.prof'),
            'ACCESS' => route('nekocafe.index') . '#ACCESS',
            'CONTACT' => route('nekocafe.contact.index')
        ];

        return view('nekocafe.prof')
        ->with('indexViewData', $viewData);
    }
}

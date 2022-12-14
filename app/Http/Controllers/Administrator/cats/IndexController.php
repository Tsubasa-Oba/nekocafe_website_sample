<?php

namespace App\Http\Controllers\Administrator\cats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cat;
use Carbon\Carbon;

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
        
        // $cats = Cat::all();
        $cats = Cat::paginate(4);

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
                'editUrl' => route('administrator.cats.update.index', ['id' => $cat->id]),
                'deleteUrl' => route('administrator.cats.delete', ['id' => $cat->id])
            ];
            $catsViewData[] = $catViewData;
        }

        $createUrl = route('administrator.cats.create');

        $viewData = [
            'catsViewData' => $catsViewData,
            'createUrl' => $createUrl,
            'allPaginates' => $cats->links('vendor.pagination.bootstrap-5') 
        ];

        return view('administrator.cats.index')
        ->with('indexViewData', $viewData);
        
    }
}

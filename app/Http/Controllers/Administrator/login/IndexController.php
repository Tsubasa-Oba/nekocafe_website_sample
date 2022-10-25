<?php

namespace App\Http\Controllers\Administrator\login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\cats\CatsRequest;
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
    public function __invoke(CatsRequest $request)
    {
        
        // $cats = Cat::all();
        $cats = Cat::paginate(1);

        $catsViewData = [];

        foreach($cats as $cat){
            $date = (new Carbon($cat->birthday))->format('Y年m月d日');
            $catViewData = [
                'name' => $cat->name,
                'birthday' => $date,
                'photo_URL' => asset('/storage/images/' . $cat->photo_URL),
                'Instagram_URL' => $cat->Instagram_URL,
                'editUrl' => route('administrator.cats.update.index', ['id' => $cat->id]),
                'deleteUrl' => route('administrator.cats.delete', ['id' => $cat->id])
            ];
            $catsViewData[] = $catViewData;
        }

        $createUrl = route('administrator.cats.create');

        $viewData = [
            'catsViewData' => $catsViewData,
            'createUrl' => $createUrl,
            'allPaginates' => $cats->links('vendor.pagination.administratorCustom') 
        ];

        return view('administrator.cats.index')
        ->with('indexViewData', $viewData);
        
    }
}

<?php

namespace App\Http\Controllers\Administrator\cats;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Http\Requests\Administrator\cats\CatsRequest;
use App\Services\CatService;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CatsRequest $request, CatService $catService)
    {     
        
        $catService->saveCats(
            $request->name(),
            $request->birthday(),
            $request->photo_URL(),
            $request->Instagram_URL()
        );

        return redirect()->route('administrator.cats.index');
    }
}

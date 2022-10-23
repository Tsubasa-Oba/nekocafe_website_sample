<?php

namespace App\Http\Controllers\Nekocafe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $topUrl = [
            'catsUrl' =>route('nekocafe.prof'),
            'contactUrl' =>route('nekocafe.contact.index')
        ];
        
        return view('nekocafe.index')
        ->with('top',$topUrl );
    }
}

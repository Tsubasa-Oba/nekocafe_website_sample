<?php

namespace App\Http\Controllers\Nekocafe\Contact;

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
        $viewData = [
            'confUrl' => route('nekocafe.contact.conf'),
            'TOP' => route('nekocafe.index'),
            'CONCEPT' => route('nekocafe.index') . '#CONCEPT', 
            'CATS' => route('nekocafe.prof'),
            'ACCESS' => route('nekocafe.index') . '#ACCESS',
            'CONTACT' => route('nekocafe.contact.index')
        ];
        
        
        

        return view('nekocafe.form')
        ->with('indexViewData', $viewData);
    }
}

<?php

namespace App\Http\Controllers\Nekocafe\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'last_name_kana' => 'required|string',
            'first_name_kana' => 'required|string',
            'email' => 'required|email',
            'body' => 'required|string|max:255'
        ]);

        $sendUrl = route('nekocafe.contact.send');

        $inputs = $request->all();

        $viewData = [
            'confUrl' => route('nekocafe.contact.conf'),
            'TOP' => route('nekocafe.index'),
            'CONCEPT' => route('nekocafe.index') . '#CONCEPT', 
            'CATS' => route('nekocafe.prof'),
            'ACCESS' => route('nekocafe.index') . '#ACCESS',
            'CONTACT' => route('nekocafe.contact.index')
        ];

        return view('nekocafe.conf',[
            'sendUrl' => $sendUrl,
            'inputs' => $inputs,
            'indexViewData'=> $viewData
        ]);
    }
}

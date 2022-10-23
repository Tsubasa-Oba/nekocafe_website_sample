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
            'name1' => 'required|string',
            'name2' => 'required|string',
            'kana1' => 'required|string',
            'kana2' => 'required|string',
            'email' => 'required|email',
            'body' => 'required|string|max:255'
        ]);

        $sendUrl = route('nekocafe.contact.send');

        $inputs = $request->all();

        return view('nekocafe.conf',[
            'sendUrl' => $sendUrl,
            'inputs' => $inputs
        ]);
    }
}

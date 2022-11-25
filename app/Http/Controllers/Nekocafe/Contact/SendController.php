<?php

namespace App\Http\Controllers\Nekocafe\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactSendmail;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
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

        $action = $request->input('action');

        $inputs = $request->except('action');

        $viewData = [
            'TOP' => route('nekocafe.index'),
            'CONCEPT' => route('nekocafe.index') . '#CONCEPT', 
            'CATS' => route('nekocafe.prof'),
            'ACCESS' => route('nekocafe.index') . '#ACCESS',
            'CONTACT' => route('nekocafe.contact.index')
        ];

        //actionの値で分岐
        if($action !== 'submit'){

            // 戻るボタンの場合リダイレクト処理
            return redirect()
            ->route('nekocafe.contact.index')
            ->withInput($inputs);
            
        } else {
            // 送信ボタンの場合、送信処理

            // ユーザにメールを送信
            Mail::to($inputs['email'])->send(new ContactSendmail($inputs));
            // 自分にメールを送信
            Mail::to('hello@example.com')->send(new ContactSendmail($inputs));

            // 二重送信対策のためトークンを再発行
            $request->session()->regenerateToken();

            // 送信完了ページのviewを表示
            return view('nekocafe.send') ->with('indexViewData', $viewData);
        }
    }
}

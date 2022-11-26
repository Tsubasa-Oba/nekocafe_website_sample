<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか お問い合わせ確認画面</title>
    @vite(['resources/css/destyle.css', 'resources/css/nekocafeTop.css', 'resources/css/nekocafeProf.css',  'resources/css/nekocafeForm.css', 'resources/js/nekocafeMovie.js'])
</head>
@include('nekocafe.common.head')

<body class="l_body">
    <div class="l_contents">
        <div class="l_container">

                <div class="l_title">
                    <h2>CONTACT</h2>
                    <div class="l_sav_title">
                        <div class="f_sav_title">お問い合わせフォーム</div>
                    </div>
                </div>

                <div class="f_text">
                    <p>入力内容を確認し、修正がなければ送信ボタンを押してください</p>
                    <p>修正あれば修正ボタンを押して、入力画面を変更してください</p>
                </div>
            <div>
                <form action="{{ $sendUrl }}" method="post">
                    @csrf
                <div class="l_contact">
                    <label for="name">お名前
                    <span class="required"></span>
                    </label>
                    <div>
                        <div>
                            <input type="text" name="name1" value="{{ $inputs['name1'] }}" type="hidden">
                        </div>
                        <div>
                            <input type="text" name="name2" value="{{ $inputs['name2'] }}" type="hidden">
                        </div>
                    </div>                   
                
                    <label for="kana">フリガナ</label>
                     
                    <div>
                        <div>
                            <input type="text" name="kana1" value="{{ $inputs['kana1'] }}" type="hidden">
                        </div>
                        <div>
                            <input type="text" name="kana2" value="{{ $inputs['kana2'] }}" type="hidden">
                        </div>
                    </div>
            
                    <label for="email">メールアドレス
                    <span class="required"></span>
                    </label>
                    <div>
                        <div>
                            <input type="text" name="email" value="{{ $inputs['email'] }}" type="hidden">
                            
                        </div>                    
                    </div>

                
                    <label for="body">お問い合わせ内容
                    <span class="required"></span>
                    </label>
                    <div>
                        <div>
                            {{ $inputs['body'] }}
                            <input name="body" value="{{ $inputs['body'] }}" type="hidden">
                        </div>                    
                    </div>
                </div>

                <div class="f_btn">
                    <button type="submit" name="action" value="back">入力内容修正</button>
                    <button type="submit" name="action" value="submit">送信する</button>
                </div>
                </form>
            </div>

        </div>

    </div>
</body>
@include('nekocafe.common.foot')
</html>
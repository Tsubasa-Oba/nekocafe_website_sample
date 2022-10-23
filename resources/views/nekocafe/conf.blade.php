<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか お問い合わせ確認画面</title>
    <style>
        .required::before {
    content: "必須";
    font-size: 11px;
    color: #ffffff;
    margin-right: 5px;
    margin-left: 5px;
    background: #b22222;
    padding: 1px 6px;
    border-radius: 4px;
}
    </style>
</head>
<body>
    <div id="main">
        <article>
            <header>
                <div>
                    <h2>CONTACT</h2>
                    <h4>お問い合わせフォーム</h4>
                </div>
            </header>
            <p>入力内容を確認し、修正がなければ送信ボタンを押してください</p>
            <p>修正あれば修正ボタンを押して、入力画面を変更してください</p>
            <div>
                <form action="{{ $sendUrl }}" method="post">
                    @csrf
                <div>
                    <label for="name">お名前
                    <span class="required"></span>
                    </label>
                    <div>
                        <input type="text" name="name1" value="{{ $inputs['name1'] }}" type="hidden">
                    </div>
                    <div>
                        <input type="text" name="name2" value="{{ $inputs['name2'] }}" type="hidden">
                    </div>
                    
                </div>

                <div>
                    <label for="kana">フリガナ</label>
                        
                    <div>
                        <input type="text" name="kana1" value="{{ $inputs['kana1'] }}" type="hidden">
                    </div>
                    <div>
                        <input type="text" name="kana2" value="{{ $inputs['kana2'] }}" type="hidden">
                    </div>
                </div>

                <div>
                    <label for="email">メールアドレス
                    <span class="required"></span>
                    </label>
                    <div>
                        <input type="text" name="email" value="{{ $inputs['email'] }}" type="hidden">
                        
                    </div>                    
                </div>

                <div>
                    <label for="body">お問い合わせ内容
                    <span class="required"></span>
                    </label>
                    <div>
                        {{ $inputs['body'] }}
                        <input name="body" value="{{ $inputs['body'] }}" type="hidden">
                    </div>                    
                </div>

                <div>
                    <button type="submit" name="action" value="back">入力内容修正</button>
                    <button type="submit" name="action" value="submit">送信する</button>
                </div>
                </form>
            </div>

        </article>

    </div>
</body>
</html>
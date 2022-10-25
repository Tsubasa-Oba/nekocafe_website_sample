<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか お問い合わせ画面</title>
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
            <p>「猫カフェ　にゃんこのおなか」へのお問合せは、こちらのフォームをご利用ください。
                <br>
                必要事項をご記入の上、「入力内容を確認」を押してください。
                <span class="required"></span>
                  は必須項目です。お預かりした大切なお客様情報は、
                お問い合わせへの返信などに使用する以外の目的には一切使用いたしません</p>
            <div>
                <form action="{{ $confUrl }}" method="post">
                    @csrf
                <div>
                    <label for="name">お名前
                    <span class="required"></span>
                    </label>
                    <div>
                        <input type="text" name="name1" value="{{ old('name1') }}" placeholder="姓">
                    </div>
                    <div>
                        <input type="text" name="name2" value="{{ old('name2') }}" placeholder="名">
                    </div>
                   
                </div>

                <div>
                    <label for="kana">フリガナ</label>
                        
                    <div>
                        <input type="text" name="kana1" placeholder="セイ">
                    </div>
                    <div>
                        <input type="text" name="kana2" placeholder="メイ">
                    </div>
                </div>

                <div>
                    <label for="email">メールアドレス
                    <span class="required"></span>
                    </label>
                    <div>
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力してください">
                        
                    </div>                    
                </div>

                <div>
                    <label for="body">お問い合わせ内容
                    <span class="required"></span>
                    </label>
                    <div>
                        <textarea name="body" cols="30" rows="10" value style="ima-mode: active" placeholder="ご質問、お問い合わせを入力してください＜200文字以内＞">{{ old('body') }}</textarea>
                        
                    </div>                    
                </div>

                <div>
                    <button type="submit">入力内容を確認</button>
                </div>
                </form>
            </div>

        </article>

    </div>
</body>
</html>
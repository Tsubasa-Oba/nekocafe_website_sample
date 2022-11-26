<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか お問い合わせ画面</title>
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
                    <p>「猫カフェ　にゃんこのおなか」へのお問合せは、こちらのフォームをご利用ください。
                    <br>
                    必要事項をご記入の上、「入力内容を確認」を押してください。
                    <span class="required"></span>
                    は必須項目です。お預かりした大切なお客様情報は、
                    お問い合わせへの返信などに使用する以外の目的には一切使用いたしません</p>
                </div>

                <div>
                    <form action="{{ $indexViewData['confUrl'] }}" method="post">
                        @csrf

                        <div class="l_contact">
                    
                                
                                    <label for="name">お名前
                                        <span class="required"></span>
                                    </label>
                                    <div>
                                        <div>
                                            <input type="text" name="name1" value="{{ old('name1') }}" placeholder="姓">
                                        </div>
                                        <div>
                                            <input type="text" name="name2" value="{{ old('name2') }}" placeholder="名">
                                        </div> 
                                    </div>                  
                                

                                
                                    <label for="kana">フリガナ</label>
                                    
                                    <div>
                                        <div>
                                            <input type="text" name="kana1" placeholder="セイ">
                                        </div>
                                        <div>
                                            <input type="text" name="kana2" placeholder="メイ">
                                        </div>
                                    </div>
                                

                                
                                    <label for="email">メールアドレス
                                    <span class="required"></span>
                                    </label>

                                    <div>
                                        <div>
                                            <input type="text" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力してください">
                                            
                                        </div> 
                                    </div>                   
                                

                                
                                    <label for="body">お問い合わせ内容
                                    <span class="required"></span>
                                    </label>
                                    <div>
                                        <div>
                                            <textarea name="body" cols="30" rows="10" placeholder="ご質問、お問い合わせを入力してください＜200文字以内＞">{{ old('body') }}</textarea>  
                                        </div> 
                                    </div>                   
                                
                        </div>

                        <div class="f_btn">
                            <button type="submit">入力内容を確認</button>
                        </div>
                    </form>
                </div>

        </div>

    </div>
</body>
@include('nekocafe.common.foot')
</html>
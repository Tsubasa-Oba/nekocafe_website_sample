<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか お問い合わせ確認画面</title>
    @vite(['resources/css/destyle.css', 'resources/css/nekocafeTop.css', 'resources/css/nekocafeProf.css',  'resources/css/nekocafeForm.css', 'resources/js/nekocafeMovie.js'])
</head>
<header class="header header_floating">
            <div class="l_container">
                <div class="l_logo_nav">
                    <div class="l_left_logo">
                        <a href="{{  $indexViewData['TOP'] }}"><img src="{{ asset('/storage/site/SiteLogo.png') }}" alt="にゃんこのせなかロゴ"></a>  
                    </div>      
                    <nav class="l_nav_right_container">
                        <ul class="p_nav l_nav_list">
                            <li><a href="{{  $indexViewData['CONCEPT'] }}" class="c_text_nav">CONCEPT</a></li>
                            <li><a href="{{  $indexViewData['CATS'] }}" class="c_text_nav">CATS</a></li>
                            <li><a href="{{  $indexViewData['ACCESS'] }}" class="c_text_nav">ACCESS</a></li>
                            <li><a href="{{  $indexViewData['CONTACT'] }}" class="c_text_nav">CONTACT</a></li>
                        </ul>
                        <ul class="p_nav l_nav_btn">
                            <li><a href="https://twitter.com/nyanko_no_onaka" class="c_btn_nav"><img src="{{ asset('/storage/site/TwitterIcon.png') }}" alt="にゃんこのせなかTwitter"></a></li>
                            <li><a href="https://www.instagram.com/nyanko_no_onaka" class="c_btn_nav"><img src="{{ asset('/storage/site/InstagramIcon.png') }}" alt="にゃんこのせなかInstagram"></a></li>
                            <li><a href="" class="c_btn_nav"><img src="{{ asset('/storage/site/YoutubeIcon.png') }}" alt="にゃんこのせなかYoutube"></a></li>
                        </ul>           
                    </nav>
                </div>
            </div>
</header>

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
<footer class="footer">
    <div class="l_contents">
        <div class="l_container">
            <div class="l_footer f_footer_text">
                <a href="{{  $indexViewData['TOP'] }}"><img src="{{ asset('/storage/site/SiteLogo.png') }}" alt="にゃんこのせなかロゴ"></a>
                <div>住所：埼玉県所沢市○○○○</div>
                <div>© 2022 Tsubasa_Oba</div>     
            </div>                          
        </div>
    </div>
</footer>
</html>
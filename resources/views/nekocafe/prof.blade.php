<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか　猫ちゃんプロフィール一覧</title>
    @vite(['resources/css/destyle.css', 'resources/css/nekocafeTop.css', 'resources/css/nekocafeProf.css',  'resources/js/nekocafeMovie.js'])
</head>
<header class="header header_floating">
            <div class="l_container">
                <div class="l_logo_nav">
                    <div class="l_left_logo">
                        <a href=""><img src="{{ asset('/storage/site/SiteLogo.png') }}" alt="にゃんこのせなかロゴ"></a>  
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
            <div class="l_title" id="CATS">
                <h2>CATS</h1>
                <div class="l_sav_title">
                    <div class="f_sav_title">猫ちゃんプロフィール一覧</div>
                </div>
            </div>
            <div class="l_cats_plof">
                @foreach($indexViewData['catsViewData'] as $catViewData)
                <div>
                <div class="l_cat_plof">
                    <div class="l_cat_plof_img">
                        <figure>
                            <img src="{{ $catViewData['photo_URL'] }}">
                        </figure>
                        <div>
                            <a href="{{ $catViewData['Instagram_URL'] }}"><img src="{{ asset('/storage/site/InstagramIcon.png') }}" alt="猫Instagram"></a>
                            <a>他の画像はInstagramで！</a>
                        </div>    
                    </div>
                    <div class="l_cat_plof_text f_cat_plof_text">
                        <h3>{{ $catViewData['name'] }}</h2>
                        <p>{{ $catViewData['birthday'] }} 生まれ</p>
                        <p>猫種：{{ $catViewData['cats_type'] }}</p>
                        <p>紹介文：{{ $catViewData['introduction'] }}</p>           
                    </div>
                </div>
                </div>
                @endforeach
            </div> 
            <div class="l_paginates">
            <div>
                {{ $indexViewData['allPaginates'] }}
            </div>
            </div>
        </div>
    </div>
</body>

<footer class="footer">
    <div class="l_contents">
        <div class="l_container">
            <div class="l_footer f_footer_text">
                <a href=""><img src="{{ asset('/storage/site/SiteLogo.png') }}" alt="にゃんこのせなかロゴ"></a>
                <div>住所：埼玉県所沢市○○○○</div>
                <div>© 2022 Tsubasa_Oba</div>     
            </div>                          
        </div>
    </div>
</footer>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか</title>
    @vite(['resources/css/destyle.css', 'resources/css/nekocafeTop.css',  'resources/js/nekocafeMovie.js'])

</head>
<header class="header">

    <div class="l_contents">
        <div class="l_container">
            <div class="l_logo">
                <a href=""><img src="{{ asset('/storage/site/SiteLogo.png') }}" alt="にゃんこのせなかロゴ"></a>  
            </div>      
            <nav class="l_nav_container">
                <div>
                <ul class="p_nav l_nav_list">
                    <li><a href="#CONCEPT" class="c_text_nav">CONCEPT</a></li>
                    <li><a href="#CATS" class="c_text_nav">CATS</a></li>
                    <li><a href="#ACCESS" class="c_text_nav">ACCESS</a></li>
                    <li><a href="#CONTACT" class="c_text_nav">CONTACT</a></li>
                </ul>
                <ul class="p_nav l_nav_btn">
                    <li><a href="https://twitter.com/nyanko_no_onaka" class="c_btn_nav"><img src="{{ asset('/storage/site/TwitterIcon.png') }}" alt="にゃんこのせなかTwitter"></a></li>
                    <li><a href="https://www.instagram.com/nyanko_no_onaka" class="c_btn_nav"><img src="{{ asset('/storage/site/InstagramIcon.png') }}" alt="にゃんこのせなかInstagram"></a></li>
                    <li><a href="" class="c_btn_nav"><img src="{{ asset('/storage/site/YoutubeIcon.png') }}" alt="にゃんこのせなかYoutube"></a></li>
                </ul>
                </div>
               
            </nav>
        </div>
    </div>
    <div class="l_contents">
        <div class="l_container">
        <video id="video"  muted autoplay loop>
        <source src="{{ asset('/storage/site/nyankonoonaka-Top-video.mp4') }}" type="video/mp4">
        <p>動画を再生できる環境ではありません。</p>
        </video>
        </div>
    </div>

</header>
<body>
    <div class="l_contents">
        <div class="l_container">
            <div class="l_title" id="CONCEPT"><h2>CONCEPT</h2></div>
            <div class="l_img-text  l_concept_img">
                <div class="l_img">
                    <picture>
                        <img src="{{ asset('/storage/site/IMG_2043 1.png') }}" alt="猫画像" width="927" height="653">
                    </picture>                
                </div>
                <div class="l_text">
                    <div class="f_text">
                            <p>人より先にソファにいるし、<br>
                                人間のお茶会に参加しているし、<br>
                                お布団に入ってのんびりしてるし、<br>
                                実家の猫と触れ合っているような<br>
                                居心地のいいそんなカフェです</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="l_contents">
        <div class="l_container">
            <div class="l_title" id="CATS"><h2>CATS</h2></div>
            <div class="l_img-text l_cats_img">
                <div class="l_text">
                    <div class="f_text l_text_btn">
                        <p>当店の猫ちゃんたちをご紹介いたします。</p>
                        <div class="f_btn">
                            <a href="{{ $top['catsUrl'] }}">猫ちゃんプロフィール一覧はこちら</a>
                        </div>
                    </div>
                </div>
                <div>
                    <picture>
                        <img src="{{ asset('/storage/site/IMG_2040 1.png') }}" alt="猫画像"  width="900" height="636">
                    </picture>
                </div>     
            </div>
        </div>
    </div>

    <div class="l_contents">
        <div class="l_container">
            <div class="l_title" id="ACCESS"><h2>ACCESS</h2></div>
            <div class="l_img-text l_access_img">
                <div > 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.542147532526!2d139.47103591556098!3d35.7866216317915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e7623f95c7b1%3A0xbd03e3658140ea23!2z5omA5rKi6aeF!5e0!3m2!1sja!2sjp!4v1666444694179!5m2!1sja!2sjp" width="700" height="530" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="l_text">
                    <div class="f_text">
                        <ul>
                            <li>住所：埼玉県所沢市○○○○</li>
                            <li>お車でお越しの場合：□□号線　下りて10分</li>
                            <li>電車でお越しの場合：△△線　○○駅から徒歩5分</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="l_contents">
        <div class="l_container">
            <div class="l_title" id="CONTACT"> <h2>CONTACT</h2></div>
            <div class="l_btn f_text">
                <div class="f_btn">
                    <a href="{{ $top['contactUrl'] }}">お問い合わせはこちら</a>
                </div>
            </div>
        </div>
    </div>
</body>
@include('nekocafe.common.foot')
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか</title>
    @vite(['resources/css/nekocafeTop.css',  'resources/js/nekocafeMovie.js'])
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
<style>
    #header{
    position: relative;/*h1の中央寄せ配置の起点とするためのrelative*/
    height: 100vh;/*高さを全画面にあわせる*/
    } 

    #video-area{
        z-index: -1;/*最背面に設定*/
        top: 0;
        right:0;
        left:0;
        bottom:0;
        overflow: hidden;
    }

    #video {
        /*天地中央配置*/
        position: absolute;
        z-index: -1;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /*縦横幅指定*/
        width: 177.77777778vh; /* 16:9 の幅→16 ÷ 9＝ 177.77% */
        height: 56.25vw; /* 16:9の幅 → 9 ÷ 16 = 56.25% */
        min-height: 100%;
        min-width: 100%;
    }
</style>
</head>
<header id="header">
    <div><h1>にゃんこのおなか</h1></div>
    <div id="video-area">
    <video id="video" poster="{{ asset('/storage/site/IMG_2040.JPG') }}" webkit-playsinline playsinline muted autoplay loop>
    <!--
    poster：動画ファイルが利用できない環境で代替表示される画像
    webkit-playsinline：iOS 9までのSafari用インライン再生指定
    playsinline：iOS 10以降のSafari用インライン再生指定
    muted：音声をミュートさせる
    autoplay：動画を自動再生させる
    loop：動画をループさせる
    controls：コントロールバーを表示する
    -->
    <source src="{{ asset('/storage/site/video-output-C9890960-4EC6-4C59-9FB0-A789F7BB8435.MP4') }}" type="video/mp4">
    <p>動画を再生できる環境ではありません。</p>
    </video>
    <!--/video-area--></div>
    <nav>
        <ul>
            <li><a href="">CONCEPT</a></li>
            <li><a href="">CATS</a></li>
            <li><a href="">ACCESS</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>
        <ul>
            <li><a href=""><img src="" alt="にゃんこのせなかTwitter"></a></li>
            <li><a href=""><img src="" alt="にゃんこのせなかInstagram"></a></li>
            <li><a href=""><img src="" alt="にゃんこのせなかYoutube"></a></li>
        </ul>
    </nav>
    <div id="slider">
    </div>

</header>
<body>
    <h2>CONCEPT</h2>
    <div>
        <ul>
            <li>お家で猫と触れ合うような場所</li>
            <li>あなたのとっておきの場所</li>
            <li>美味しいごはんでこころも体も充電できる場所</li>
        </ul>
    </div>
    <h2>CATS</h2>
    <div>
        <p>当店の猫ちゃんたちをご紹介いたします。</p>
        <a href="{{ $top['catsUrl'] }}">プロフィール一覧はこちら</a>
    </div>
    <h2>ACCESS</h2>
    <div id="map"> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.542147532526!2d139.47103591556098!3d35.7866216317915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e7623f95c7b1%3A0xbd03e3658140ea23!2z5omA5rKi6aeF!5e0!3m2!1sja!2sjp!4v1666444694179!5m2!1sja!2sjp" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div>
        <ul>
            <li>住所：埼玉県所沢市○○○○</li>
            <li>お車でお越しの場合：□□号線　下りて10分</li>
            <li>電車でお越しの場合：△△線　○○駅から徒歩5分</li>
        </ul>
    </div>
    <h2>CONTACT</h2>
    <div>
        <a href="{{ $top['contactUrl'] }}">お問い合わせフォームはこちら</a>
    </div>
</body>
</html>
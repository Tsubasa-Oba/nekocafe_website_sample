<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか　猫ちゃんプロフィール一覧</title>
    @vite(['resources/css/destyle.css', 'resources/css/nekocafeTop.css', 'resources/css/nekocafeProf.css',  'resources/js/nekocafeMovie.js'])
</head>
@include('nekocafe.common.head')
<body class="l_body">
    <div class="l_contents">    
        <div class="l_container">
            <div class="l_title" id="CATS">
                <h2>CATS</h2>
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
@include('nekocafe.common.foot')
</html>
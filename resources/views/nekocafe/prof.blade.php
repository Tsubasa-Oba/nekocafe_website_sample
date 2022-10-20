<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか　猫ちゃんプロフィール一覧</title>
    <style>
        #catProf .article {
	        height: 250px;
	        margin-top: 20px;
        }

        #catProf .article figure {
	        float: left; 
            height: 100px;
            width: 100px; 
            margin: 0;
        }

        #catProf .article figure img {
            border-radius: 5px;
            height: 100px;
            width: 100px;
        }

        .articleInfo {
            display: inline-block;
            float: left;
            width: 500px;
        }

        .articleInfo h2 {
            margin-top: 0px;
            margin-bottom: 1.2rem;
        }
    </style>
</head>
<body>
    <h1>猫ちゃんプロフィール一覧</h1>
    <div>
        @foreach($indexViewData['catsViewData'] as $catViewData)
        <div id="catProf">
        <article class="article">
            <figure>
                <img src="{{ $catViewData['photo_URL'] }}">
            </figure>
            <div class="articleInfo">
                <h2>{{ $catViewData['name'] }}</h2>
                <p>誕生日　{{ $catViewData['birthday'] }}</p>
                <a href="{{ $catViewData['Instagram_URL'] }}">Instagramリンク</a><br>
                </form>              
            </div>
        </article>
        @endforeach
    </div> 
    <div>
        {{ $indexViewData['allPaginates'] }}
    </div>
</body>
</html>
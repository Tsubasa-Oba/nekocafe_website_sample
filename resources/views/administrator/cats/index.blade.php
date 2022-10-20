<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか 管理者画面</title>
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
    <h1>猫ちゃんプロフィール登録</h1>
    @if (session('feedback.success'))
            <p style="color:brown">{{ session('feedback.success') }}</p>
    @endif
    <div>
        <form action="{{ $indexViewData['createUrl'] }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name">名前</label>
            <input type="text" name="name"><br>
            <label for="birthday">誕生日</label>
            <input type="date" name="birthday"><br>
            <label for="photo_URL">プロフィール画像</label>
            <input type="file" name="photo_URL"><br>
            <label for="Instagram_URL">Instagram</label>
            <input type="url" name="Instagram_URL"><br>
            <button type="submit">登録</button>
        </form>
    </div>
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
                <a href="{{ $catViewData['editUrl'] }}">編集</a>
                <form action="{{ $catViewData['deleteUrl'] }}" method="post">
                @method('DELETE')
                @csrf
                <button type="subumit">削除</button>  
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
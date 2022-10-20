<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか　管理者画面</title>
    <style>
        figure img {
            border-radius: 5px;
            height: 100px;
            width: 100px; 
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>猫ちゃんプロフィール編集</h1>
    <div>
        <a href="{{ $updateViewData['indexUrl'] }}">戻る＞</a><br>
        @if (session('feedback.success'))
            <p style="color:green">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{ $updateViewData['editUrl'] }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <label for="name">名前</label>
            <input type="text" name="name" value="{{ $updateViewData['name'] }}"><br>
            <label for="birthday">誕生日</label>
            <input type="date" name="birthday" value="{{ $updateViewData['birthday'] }}"><br>
            <label for="photo_URL">プロフィール画像</label>
            <figure>
                <img src="{{ $updateViewData['photo_URL'] }}">
            </figure>
            <input type="file" name="photo_URL" value="{{ $updateViewData['photo_URL'] }}"><br>
            <label for="Instagram_URL">Instagram</label>
            <input type="url" name="Instagram_URL" value="{{ $updateViewData['Instagram_URL' ] }}"><br>
            <button type="submit">編集</button>
        </form>
    </div>
    
</body>
</html>
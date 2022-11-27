<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか　管理者画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<main class="form-signin">
    <div>
        <div>
            <h1 class="mb-3 fw-normal text-center">猫プロフィール編集</h1>
            <div>
                <a href="{{ $updateViewData['indexUrl'] }}">戻る＞</a><br>
                @if (session('feedback.success'))
                    <p style="color:green">{{ session('feedback.success') }}</p>
                @endif
                <form action="{{ $updateViewData['editUrl'] }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <label for="name">名前</label>
                    <input type="text" name="name" class="form-control" id="floatingInput" value="{{ $updateViewData['name'] }}"><br>
                    <label for="birthday">誕生日</label>
                    <input type="date" name="birthday" class="form-control" value="{{ $updateViewData['birthday'] }}"><br>
                    <label for="cats_type">猫種</label>
                    <input type="text" name="cats_type" class="form-control" id="floatingInput" value="{{ $updateViewData['cats_type'] }}"><br>
                    <label for="introduction">紹介文</label>
                    <input type="text" name="introduction" class="form-control" id="floatingInput" value="{{ $updateViewData['introduction'] }}"><br>
                    <label for="photo_URL">プロフィール画像</label>
                    <figure>
                        <img src="{{ $updateViewData['photo_URL'] }}" class="img-fluid mx-auto d-block" alt="Responsive image">
                    </figure>
                    <input type="file" name="photo_URL" class="form-control" id="customFile" value="{{ $updateViewData['photo_URL'] }}"><br>
                    <label for="Instagram_URL">Instagram</label>
                    <input type="url" name="Instagram_URL" class="form-control" value="{{ $updateViewData['Instagram_URL' ] }}"><br>
                    <button type="submit" class="mt-2 w-100 btn btn-primary">編集</button>
                </form>
            </div>
        </div>
    </div>
</main>    
</body>
</html>
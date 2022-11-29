<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('/favicon.ico') }}">
    <title>猫カフェ にゃんこのおなか 管理者画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>
    <main class="form-signin">
        <div>
            <div>
                <h1 class="mb-3 fw-normal text-center">猫プロフィール登録</h1>
                @if (session('feedback.success'))
                        <p style="color:brown">{{ session('feedback.success') }}</p>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mt-2">
                    <form action="{{ $indexViewData['createUrl'] }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="name" class="mt-1">名前</label>
                        <input type="text" name="name" class="form-control" id="floatingInput">
                        <label for="birthday" class="mt-1">誕生日</label>
                        <input type="date" name="birthday" class="form-control">
                        <label for="cats_type" class="mt-1">猫種</label>
                        <input type="text" name="cats_type"  placeholder="20文字まで" class="form-control" id="floatingInput">
                        <label for="introduction" class="mt-1">紹介文</label>
                        <input type="text" name="introduction"  placeholder="20文字まで" class="form-control" id="floatingInput">
                        <label for="photo_URL" class="mt-1">プロフィール画像(正円画像のみ)</label>
                        <input type="file" name="photo_URL" class="form-control" id="customFile">
                        <label for="Instagram_URL" class="mt-1">InstagramURL</label>
                        <input type="url" name="Instagram_URL" class="form-control">
                        <button type="submit" class="mt-2 w-100 btn btn-primary">登録</button>
                    </form>
            </div>
        </div>
    </main>    

    <div class="container col-lg-6 mt-5">
        <div class="row">
            @foreach($indexViewData['catsViewData'] as $catViewData)
            
                <div class="col-3 border-start border-end">
                    <figure>
                        <img src="{{ $catViewData['photo_URL'] }}" class="img-fluid mx-auto d-block" alt="Responsive image">
                    </figure>
                    <div>
                        <h2 class="h4">{{ $catViewData['name'] }}</h2>
                        <p>{{ $catViewData['birthday'] }} 生まれ</p>
                        <p>猫種：{{ $catViewData['cats_type'] }}</p>
                        <p>紹介文：{{ $catViewData['introduction'] }}</p>
                        <div class="mb-4">
                            <a href="{{ $catViewData['Instagram_URL'] }}" >Instagramリンク</a>
                        </div>
                        <a href="{{ $catViewData['editUrl'] }}" class="btn btn-primary">編集</a>
                        <div id="btn-layout">
                            <form action="{{ $catViewData['deleteUrl'] }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="subumit" class="btn btn-danger">削除</button>  
                            </form>  
                        </div>            
                    </div>
                </div>
            
            @endforeach
        </div>

        <div class="mt-5 center-block">
                {{ $indexViewData['allPaginates'] }}
        </div>
    </div> 
            

</body>
</html>
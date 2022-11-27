<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫カフェ にゃんこのおなか　送信完了</title>
    <link href="{{ asset('/css/destyle.css' )}}" rel="stylesheet">
    <link href="{{ asset('/css/nekocafeTop.css' )}}" rel="stylesheet">
    <link href="{{ asset('/css/nekocafeProf.css' )}}" rel="stylesheet">
    <link href="{{ asset('/css/nekocafeForm.css' )}}" rel="stylesheet">
</head>
@include('nekocafe.common.head')
<body class="l_body">
    <div class="l_contents">
            <div class="l_container">
                <div class="f_text">
                    <p>{{ __('送信完了しました。<br>
                        入力いただいたメールアドレスに<br>
                        確認メールを送信しておりますので、ご確認お願いします。<br>
                        <br>
                        随時、担当スタッフがメールにて<br>
                        お問い合わせ内容にお返事いたします。') }}</p>
                </div>
            </div>
    </div>
    @include('nekocafe.common.foot')
</html>
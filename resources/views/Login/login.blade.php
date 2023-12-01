<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポータルサイト：ログイン</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.0/destyle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <img src="{{asset('images/logo.svg')}}">
    </header>

    <div id="login">
        <div class="card login">
            <p class="title bold">ログイン</p>
            <form class="regular" action="/menu" method="post">
                @csrf
                <div class="input-container">
                    <p class="label">ユーザーID</p>
                    <input type="text" name="user">
                </div>
                <div class="input-container">
                    <p class="label">パスワード</p>
                    <input type="password" name="password">
                </div>
                <a href="{{ route('menu.index', ['id' => 1]) }}" class="button bold">ログイン</a>
            </form>
            
        </div>
    </div>
</body>

</html>
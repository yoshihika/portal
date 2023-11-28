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
        <img src="{{asset('storage/logo.svg')}}">
    </header>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">名前</label>
        <input type="text" name="name" id="name">
        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email">
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password">
        <button type="submit">送信</button>
    </form>
</body>

</html>
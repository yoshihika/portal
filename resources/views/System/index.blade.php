<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポータルサイト：メインメニュー</title>
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

    <div id="sys-main">
        <a href="{{ route('system.risyu') }}" class="card bold num1">
            <img src="" alt="">
            <p>履修登録</p>
            <p>履修希望申請</p>
            <div class="line"></div>
        </a>
        <div class="card bold num2">
            <img src="" alt="">
            <p>成績・履修状況一覧表</p>
            <p>履修登録確認表</p>
            <div class="line"></div>
        </div>
        <div class="card bold num3">
            <img src="" alt="">
            <p>非表示テキスト</p>
            <p>本人情報管理</p>
            <div class="line"></div>
        </div>
        <div class="card bold num4">
            <img src="" alt="">
            <p>シラバス照会</p>
            <div class="line"></div>
        </div>
        <div class="container-1 bold">
            <div class="card box">
                <img src="" alt="">
                <p>授業・時間割照会</p>
                <div class="line"></div>
            </div>
            <div class="card box">
                <img src="" alt="">
                <p>授業・時間割照会</p>
                <div class="line"></div>
            </div>
        </div>
        <div class="container-2 bold">
            <div class="card box">
                <img src="" alt="">
                <p>授業・時間割照会</p>
                <div class="line"></div>
            </div>
            <div class="card box">
                <img src="" alt="">
                <p>授業・時間割照会</p>
                <div class="line"></div>
            </div>
        </div>
    </div>
</body>

</html>
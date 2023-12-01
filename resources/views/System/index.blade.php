<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポータルサイト：システム</title>
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

    <div id="sys-main">
        <a href="{{ route('system.risyu') }}" class="card bold num1">
            <img src="{{ asset('images/logo-07.svg') }}" alt="履修登録">
            <p>履修登録</p>
            <p>履修希望申請</p>
            <div class="line"></div>
        </a>
        <div class="card bold num2">
            <div class="num2-container medium">
                <button class="dl-button">成績・履修状況一覧表</button>
                <button class="dl-button">履修登録確認表</button>
            </div>
            <p>非表示テキスト</p>
            <p>ダウンロード</p>
            <div class="line"></div>
        </div>
        <div class="card bold num3">
            <img src="{{ asset('images/logo-08.svg') }}" alt="本人情報管理">
            <p>非表示テキスト</p>
            <p>本人情報管理</p>
            <div class="line"></div>
        </div>
        <a href="{{ route('system.courses') }}" class="card bold num4">
            <img src="{{ asset('images/logo-10.svg') }}" alt="シラバス照会">
            <p>シラバス照会</p>
            <div class="line"></div>
        </a>
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
        <a href="{{ route('menu.index', ['id' => 1]) }}" class="container-2 card bold">
            <img src="{{ asset('images/logo-09.svg') }}" alt="トップ画面に戻る">
            <p>トップ画面に戻る</p>
            <div class="line"></div>
        </a>
    </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポータルサイト：お知らせ詳細</title>
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

    <div id="news">
        <div class="card medium news">
            <div class="container">
                <p class="title bold">{{ $contents->title }}</p>
                <p class="sender">差出人：{{ $contents->sender_id_name }}</p>
                <p class="date">受取日：{{ \Carbon\Carbon::parse($contents->created_at)->format("Y/m/d") }}</p>
                <p class="content">{!! nl2br($contents->content) !!}</p>
            </div>
            <button class="bold">ピンを留める</button>
        </div>
    </div>
</body>

</html>
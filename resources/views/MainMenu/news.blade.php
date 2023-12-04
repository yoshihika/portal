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
        <img src="{{asset('images/logo.svg')}}">
        <a href="{{ route('login') }}" class="logout">×<span>ログアウト</span></a>
    </header>

    <div id="news">
        <div class="card medium news">
            <div class="container">
                <p class="title bold">{{ $contents->title }}</p>
                <p class="sender">差出人：{{ $contents->sender_id_name }}</p>
                <p class="date">受取日：{{ \Carbon\Carbon::parse($contents->created_at)->format("Y/m/d") }}</p>
                <p class="content">{!! nl2br($contents->content) !!}</p>
            </div>
            @if($contents->is_pinned != 0)
            <form action="{{ route('news.update') }}" method="post">
                @csrf
                <input type="hidden" name="mail_id" value="{{ $contents->id }}">
                <input type="submit" class="button pinned" value="ピン留め中">
            </form>
            @else
            <form action="{{ route('news.update') }}" method="post">
                @csrf
                <input type="hidden" name="mail_id" value="{{ $contents->id }}">
                <input type="submit" class="button" value="ピンを留める">
            </form>
            @endif
            <a href="{{ route('news-list') }}" class="back">お知らせ一覧に戻る</a>
            <a href="{{ route('menu.index', ['id' => 1]) }}" class="back litte-margin">トップに戻る</a>
        </div>
    </div>
</body>

</html>
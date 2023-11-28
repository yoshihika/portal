<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポータルサイト：お知らせ一覧</title>
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

    <div id="news-list">
        <div class="card medium news-list">
            <div class="title-container">
                <p class="title bold">お知らせ一覧</p>
                <p class="caption"><span>●</span>未読のお知らせが3件あります</p>
            </div>
            <ul>
                @foreach($mails as $mail)
                <li>
                    <a href="{{ route('news.check', ['id' => $mail->id]) }}">
                        <span class="read">{{ $mail->is_read_label }}</span>
                        <span class="date">{{ \Carbon\Carbon::parse($mail->created_at)->format("Y/m/d") }}</span>
                        <span class="content">{{ $mail->title }}</span>
                        <span class="sender">{{ $mail->sender_id_name}}</span>
                    </a>
                    <div class="button">ピンを留める</div>
                </li>
                @endforeach
            </ul>
            <div class="page-container">
                <a href="#" class="button-prev">◀</a>
                <div class="page">
                    <p>01/10<span>ページ</span></p>
                </div>
                <a href="#" class="button-next">▶</a>
            </div>
        </div>
    </div>
</body>

</html>
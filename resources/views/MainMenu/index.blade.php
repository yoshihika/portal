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

    <div id="main-index">
        <a href="{{ route('system.index') }}" class="card system">
            <img src="" alt="">
            <p class="title bold">教務システム</p>
            <p class="caption">履修登録はこちらから！</p>
        </a>

        <div class="card news">
            <div class="title-container">
                <p class="title bold">最新のお知らせ</p>
                <p class="caption"><span>●</span>未読のお知らせが3件あります。</p>
            </div>
            <a href="{{ route('news-list', ['id' => $user_id]) }}" class="button">お知らせ一覧へ</a>
            <ul>
                @foreach($mails as $mail)
                <li>
                    <a href="{{ route('news.check', ['id' => $mail->id]) }}">
                        <span class="{{ $mail->is_read_class }}">{{ $mail->is_read_label }}</span>
                        <span class="date">{{ \Carbon\Carbon::parse($mail->created_at)->format("m/d") }}</span>
                        <span class="title">{{ $mail->title }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
            <a href="{{ route('news-list', ['id' => $user_id]) }}" class="button-mobile">お知らせ一覧へ</a>
        </div>

        <div class="card d-act">
            <img src="" alt="">
            <p class="title bold">D-act （就職活動支援サイト）</p>
            <p class="caption">面談予約・求人情報等はこちらから！</p>
        </div>

        <div class="schedule-container">

            <div class="card schedule">
                <p class="title bold">07/11の時間割</p>
                <ul>
                    @foreach($courses as $course)
                    <li>
                        <p>{{ $course->time }}限</p>
                        <p class="course-name">{{ $course->title }}</p>
                        <p><span>開催場所：</span>{{ $course->place }}AAAA</p>
                        <p><span>担当講師：</span>{{ $course->teacher }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
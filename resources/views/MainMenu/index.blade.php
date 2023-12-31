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
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/day.js'])
</head>

<body>
    <header>
        <img src="{{asset('images/logo.svg')}}">
        <a href="{{ route('login') }}" class="logout">×<span>ログアウト</span></a>
    </header>

    <div id="main-index">
        <a href="{{ route('system.index') }}" class="card system">
            <img src="{{asset('images/logo-04.svg')}}" alt="教務システム">
            <p class="title bold">教務システム</p>
            <p class="caption">履修登録はこちらから！</p>
        </a>

        <div class="card news">
            <div class="title-container">
                <p class="title bold">最新のお知らせ</p>
                <p class="caption">
                    <span>●</span>
                    @if($counter === 0)
                    未読のお知らせはありません。
                    @else
                    未読のお知らせが{{ $counter }}件あります。
                    @endif
                </p>
            </div>
            <a href="{{ route('news-list') }}" class="button">お知らせ一覧へ</a>
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
            <a href="{{ route('news-list') }}" class="button-mobile">お知らせ一覧へ</a>
        </div>

        <div class="card d-act">
            <img src="{{ asset('images/logo-06.svg') }}" alt="">
            <p class="title bold">D-act （就職活動支援サイト）</p>
            <p class="caption">面談予約・求人情報等はこちらから！</p>
        </div>

        <div class="schedule-container">

            <div class="card schedule">
                <div id="days-container">
                    <button id="prev" class="mobile">◀</button>
                    <p class="title bold"><span id="month"></span>/<span id="date"></span>　<span id="day">月曜日</span>の時間割</p>
                    <button id="next" class="mobile">▶</button>
                </div>
                <ul>
                    @foreach($mon_courses as $course)
                    <li class="mon hide">
                        <p>{{ $course->time }}限</p>
                        <p class="course-name">{{ $course->title }}</p>
                        <p><span>開催場所：</span>{{ $course->place }}</p>
                        <p><span>担当講師：</span>{{ $course->teacher }}</p>
                    </li>
                    @endforeach
                    @foreach($tue_courses as $course)
                    <li class="tue hide">
                        <p>{{ $course->time }}限</p>
                        <p class="course-name">{{ $course->title }}</p>
                        <p><span>開催場所：</span>{{ $course->place }}</p>
                        <p><span>担当講師：</span>{{ $course->teacher }}</p>
                    </li>
                    @endforeach
                    @foreach($wed_courses as $course)
                    <li class="wed hide">
                        <p>{{ $course->time }}限</p>
                        <p class="course-name">{{ $course->title }}</p>
                        <p><span>開催場所：</span>{{ $course->place }}</p>
                        <p><span>担当講師：</span>{{ $course->teacher }}</p>
                    </li>
                    @endforeach
                    @foreach($thu_courses as $course)
                    <li class="thu hide">
                        <p>{{ $course->time }}限</p>
                        <p class="course-name">{{ $course->title }}</p>
                        <p><span>開催場所：</span>{{ $course->place }}</p>
                        <p><span>担当講師：</span>{{ $course->teacher }}</p>
                    </li>
                    @endforeach
                    @foreach($fri_courses as $course)
                    <li class="fri hide">
                        <p>{{ $course->time }}限</p>
                        <p class="course-name">{{ $course->title }}</p>
                        <p><span>開催場所：</span>{{ $course->place }}</p>
                        <p><span>担当講師：</span>{{ $course->teacher }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
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
        <img src="{{asset('images/logo.svg')}}">
        <a href="{{ route('login') }}" class="logout">×<span>ログアウト</span></a>
    </header>

    <div id="news-list">
        <div class="card medium news-list">
            <div class="title-container">
                <p class="title bold">お知らせ一覧</p>
                <div class="mark-container">
                    <p class="caption"><span>●</span>
                        @if($counter != 0)
                        <a href="{{ route('read.index') }}">未読のお知らせが{{ $counter }}件あります</a>
                        @else
                        未読のお知らせはありません。
                        @endif
                    </p>
                    <p class="caption"><span>●</span>
                        @if($pin_counter != 0)
                        <a href="{{ route('pinned.index') }}">ピンのついたお知らせが{{ $pin_counter }}件あります。</a>
                        @else
                        ピンのついたお知らせはありません。
                        @endif
                    </p>
                </div>
            </div>
            <ul>
                @foreach($mails as $mail)
                <li>
                    <a href="{{ route('news.check', ['id' => $mail->id]) }}">
                        <div class="mark-container">
                            <span class="{{ $mail->is_read_class }}">{{ $mail->is_read_label }}</span>
                            <span class="{{ $mail->is_pinned_class }}">{{ $mail->is_pinned_label }}</span>
                        </div>
                        <span class="date">{{ \Carbon\Carbon::parse($mail->created_at)->format("Y/m/d") }}</span>
                        <span class="content">{{ $mail->title }}</span>
                        <span class="sender">{{ $mail->sender_id_name}}</span>
                    </a>
                </li>
                @endforeach

                {{ $mails->links() }}

            </ul>
            <a class="back" href="{{ route('menu.index', ['id' => 1]) }}">メインメニューに戻る</a>
        </div>
    </div>
</body>

</html>
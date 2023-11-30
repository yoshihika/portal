<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポータルサイト：登録完了</title>
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

    <div id="course-list">
        <div class="unit card">
            <p class="title bold">シラバス照会</p>
            <form action="" method="post">
                @csrf
                <p class="bold">条件で絞る</p>
                <select name="week">
                    <option value="月">月曜日</option>
                    <option value="火">火曜日</option>
                    <option value="水">水曜日</option>
                    <option value="木">木曜日</option>
                    <option value="金">金曜日</option>
                    <option value="none">指定なし</option>
                </select>
                <select name="time">
                    <option value="1">1限</option>
                    <option value="2">2限</option>
                    <option value="3">3限</option>
                    <option value="4">4限</option>
                    <option value="5">5限</option>
                    <option value="none">指定なし</option>
                </select>
                <input type="submit" value="検索">
            </form>
            <ul class="unit-container">
                @foreach($datas as $data)
                <li>
                    <p>{{ $data->title }}</p>
                    <p>開催時期：　{{ $data->week }}曜　{{ $data->time }}限</p>
                    <p>担当講師：　{{ $data->teacher }}</p>
                    <p>開催場所：　{{ $data->place }}</p>
                </li>
                @endforeach
                {{ $datas->links() }}
            </ul>
            <a href="{{ route('system.index') }}" class="button bold">メニューに戻る</a>
        </div>
    </div>
</body>

</html>
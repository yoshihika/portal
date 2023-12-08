<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>履修登録画面</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.0/destyle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="risyu">
        <div class="unit card">
            <p class="title bold">2023年度　後期　履修日程</p>
            <p class="caption">それぞれをクリックして編集できます</p>
            <div class="unit-container">
                <a href="{{ route('system.edit', ['id' => 1]) }}">
                    <ul>
                        <p class="week-name bold">月曜日</p>
                        @foreach ($mon_datas as $mon)
                        <li>
                            <p class="class-time">{{ $mon->time }}限</p>
                            <p class="class-name">{{ $mon->title }}</p>
                            <p>単位数：{{$mon->unit}}</p>
                            <p>担当講師：{{ $mon->teacher }}</p>
                            <p>開催場所：{{ $mon->place }}</p>
                        </li>
                        @endforeach
                    </ul>
                </a>
                <a href="{{ route('system.edit', ['id' => 2]) }}">
                    <ul>
                        <p class="week-name bold">火曜日</p>
                        @foreach ($tue_datas as $tue)
                        <li>
                            <p class="class-time">{{ $tue->time }}限</p>
                            <p class="class-name">{{ $tue->title }}</p>
                            <p>単位数：{{$tue->unit}}</p>
                            <p>担当講師：{{ $tue->teacher }}</p>
                            <p>開催場所：{{ $tue->place }}</p>
                        </li>
                        @endforeach
                    </ul>
                </a>
                <a href="{{ route('system.edit', ['id' => 3]) }}">
                    <ul>
                        <p class="week-name bold">水曜日</p>
                        @foreach ($wed_datas as $wed)
                        <li>
                            <p class="class-time">{{ $wed->time }}限</p>
                            <p class="class-name">{{ $wed->title }}</p>
                            <p>単位数：{{$wed->unit}}</p>
                            <p>担当講師：{{ $wed->teacher }}</p>
                            <p>開催場所：{{ $wed->place }}</p>
                        </li>
                        @endforeach
                    </ul>
                </a>
                <a href="{{ route('system.edit', ['id' => 4]) }}">
                    <ul>
                        <p class="week-name bold">木曜日</p>
                        @foreach ($thu_datas as $thu)
                        <li>
                            <p class="class-time">{{ $thu->time }}限</p>
                            <p class="class-name">{{ $thu->title }}</p>
                            <p>単位数：{{$thu->unit}}</p>
                            <p>担当講師：{{ $thu->teacher }}</p>
                            <p>開催場所：{{ $thu->place }}</p>
                        </li>
                        @endforeach
                    </ul>
                </a>
                <a href="{{ route('system.edit', ['id' => 5]) }}">
                    <ul>
                        <p class="week-name bold">金曜日</p>
                        @foreach ($fri_datas as $fri)
                        <li>
                            <p class="class-time">{{ $fri->time }}限</p>
                            <p class="class-name">{{ $fri->title }}</p>
                            <p>単位数：{{$fri->unit}}</p>
                            <p>担当講師：{{ $fri->teacher }}</p>
                            <p>開催場所：{{ $fri->place }}</p>
                        </li>
                        @endforeach
                    </ul>
                </a>
            </div>
            <p class="unit-counter bold">今期の総単位数：{{$sum}}</p>
            <form action="{{ route('risyu.confirm') }}" method="post">
                @csrf
                <input type="hidden" name="hoge" value="hoge">
                <input type="submit" class="button bold" value="上記の日程で登録する">
            </form>
            <a href="{{ route('system.index') }}" class="back bold">メニューに戻る</a>
        </div>
    </div>
</body>

</html>
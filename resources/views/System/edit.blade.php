<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポータルサイト：編集</title>
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

    <div id="edit">
        <form action="{{ route('system.confirm') }}" method="post" class="container card">
            @csrf
            <input type="hidden" name="week" value="{{ $index }}">
            <input type="hidden" name="user_id" value="1">
            <p class="title bold">{{ $week }}曜日の時間割</p>
            <div class="schedule-container">
                <div class="class-container">
                    @php
                    $counter = 1;
                    @endphp
                    @php
                    $i = 0;
                    $num = 0;
                    @endphp
                    @foreach ($datas as $data)
                    <div class="current-course caption">
                        <input type="hidden" name="course[]" value="{{ $data->id }}">
                        <p>{{ $counter }}限</p>
                        <p>{{ $data->title }}</p>
                        <p><span>担当講師：</span>{{ $data->teacher }}</p>
                        <p><span>開催場所：</span>{{ $data->place }}</p>
                    </div>
                    <ul>
                        @foreach ($lists[$i] as $list)
                        <li value="{{ $list->id }}">
                            <p>{{ $list->title }}</p>
                            <p><span>担当講師：</span>{{ $list->teacher }}</p>
                            <p><span>開催場所：</span>{{ $list->place }}</p>
                        </li>
                        @endforeach
                        @php
                        if ($i < 4) { $i +=1; } else { $i=4; } @endphp </ul>
                            @php
                            $counter += 1;
                            $num++;
                            @endphp
                            <input type="hidden" name="num[]">
                            @endforeach
                </div>
            </div>

            <input type="submit" class="submit bold" value="上記の時間割で登録する">
        </form>
    </div>
</body>

</html>
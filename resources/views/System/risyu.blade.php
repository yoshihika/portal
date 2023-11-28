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

    <div id="risyu">
        <div class="unit card">
            <p class="title bold">2023年度　後期　履修日程</p>
            <div class="unit-container">
                @for($i = 0; $i < 5; $i++) @switch($i) @case(0)
            <ul>
                <p class="week-name bold">月曜日</p>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="first[]" value="class_id">
                            <p class="class-time">1限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">2限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">3限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">4限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">5限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
            </ul>
            @break
            @case(1)
            <ul>
                <p class="week-name bold">火曜日</p>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="first[]" value="class_id">
                            <p class="class-time">1限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">2限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">3限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">4限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">5限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
            </ul>
            @break
            @case(2)
            <ul>
                <p class="week-name bold">水曜日</p>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="first[]" value="class_id">
                            <p class="class-time">1限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">2限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">3限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">4限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">5限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
            </ul>
            @break
            @case(3)
            <ul>
                <p class="week-name bold">木曜日</p>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="first[]" value="class_id">
                            <p class="class-time">1限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">2限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">3限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">4限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">5限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
            </ul>
            @break
            @case(4)
            <ul>
                <p class="week-name bold">金曜日</p>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="first[]" value="class_id">
                            <p class="class-time">1限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">2限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">3限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">4限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="border">
                        <div class="class-container">
                            <input type="hidden" name="second[]" value="class_id">
                            <p class="class-time">5限</p>
                            <p class="class-name">情報デザイン研究2</p>
                            <p>担当講師：桐山岳寛</p>
                            <p>開催場所：A1011</p>
                        </div>
                    </div>
                </li>
            </ul>
            @break
            @endswitch
            @endfor
        </div>
        <div class="status">
            <p class="title bold">履修単位情報</p>
            <div class="status-container">
                <div class="content">
                    <p class="unit-got">前期履修単位数：<span>10</span></p>
                    <p class="unit-stock">前期履修上限単位数：<span>22</span></p>
                </div>
                <div class="content">
                    <p class="unit-got">後期履修単位数：<span>10</span></p>
                    <p class="unit-stock">後期履修上限単位数：<span>22</span></p>
                </div>
                <div class="content">
                    <p class="unit-got">年間履修単位数：<span>20</span></p>
                    <p class="unit-stock">これまでの履修単位数：<span>100</span></p>
                </div>
            </div>
        </div>
        <button class="bold">履修登録</button>
        
    </div>
</body>

</html>
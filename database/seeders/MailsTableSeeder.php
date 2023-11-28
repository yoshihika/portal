<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mails')->insert(
            [
                'user_id' => 1,
                'title' => 'ドミノピザの販売について',
                'content' => '以下の通りドミノピザの出張販売を実施します。
                              皆様ぜひご利用ください。
                
                              日時：毎週火曜日　１１：４５～１２：４５
                              メニュー：マイドミノＢＯＸ　６９９円
                              食数：５０食
                ',
                'sender_id' => 4,
                'is_read' => 1,
                'is_pinned' => 0,
                'created_at' => Carbon::now()->format("Y/m/d"),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('mails')->insert(
            [
                'user_id' => 1,
                'title' => 'だいゾウおすすめ宿泊ガイド、スタート！',
                'content' => '木曽駒ゼミナーハウス閉鎖に伴い、新たな宿泊施設斡旋サービスがスタート。
                ゼミ旅行やクラブ合宿、卒業旅行に利用できるJTB契約の宿泊施設を紹介する
                パンフレット「だいゾウおすすめ宿泊ガイド」を5/8に発行しました。
                1人1回、旅行で使用できる「だいゾウ宿泊割引券3,000分」を学生室前にある
                証明書自動発行機で発行できます。先着1,000人まで。発行後は学生室で承認印
                をもらって、JTB店舗へGo！詳細はパンフレットでご確認くださいませ！
                パンフレットデータは添付しています。
                紙パンフレットは指導教員から受け取ってください。
                ',
                'sender_id' => 4,
                'is_read' => 1,
                'is_pinned' => 0,
                'created_at' => Carbon::now()->format("Y/m/d"),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('mails')->insert(
            [
                'user_id' => 1,
                'title' => 'SNS で見つけた「二重瞼手術お試しクーポン」を使うつもりが、高額契約をしてしまった',
                'content' => '［発行：名古屋市消費生活センター］
                注意喚起情報第14号を作成しました。詳細は添付ファイルをご確認ください。
                
                今回の内容は、SNSで見つけたお試しクーポンを使うつもりが高額契約をしてしまっ
                た事例とともに二重瞼手術がクーリング・オフの対象ではないことを紹介し、SNSや
                無料動画サイトなどに現れる「お得感」のある広告について注意喚起をするもので
                す。
                ',
                'sender_id' => 4,
                'is_read' => 1,
                'is_pinned' => 0,
                'created_at' => Carbon::now()->format("Y/m/d"),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}

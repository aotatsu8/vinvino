<?php

use Illuminate\Database\Seeder;
use App\Wine;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $wine_list = [
                'ラ・シャペル・ド・ポタンサック' => 'https://www.enoteca.co.jp/item/detail/010055641',
                'クロ・ド・ヴージョ グラン・クリュ' => 'https://www.enoteca.co.jp/item/detail/020940701',
                'ミュスカデ・セーブル・エ・メーヌ・クリッソン' => 'https://www.enoteca.co.jp/item/detail/034650020',
                'シャトー・ラフィット・ロスチャイルド'=>'https://www.enoteca.co.jp/item/detail/010020161',
                'シャトー・マルゴー'=>'https://www.enoteca.co.jp/item/detail/010040551',
                'シャトー・ラトゥール'=>'https://www.enoteca.co.jp/item/detail/010020141',
                'シャトー・ムートン・ロスチャイルド'=>'enoteca.co.jp/item/detail/010020181',
                'シャトー・オー・ブリオン'=>'https://www.enoteca.co.jp/item/detail/010061021',
                'シャトー・ローザン・セグラ'=>'https://www.enoteca.co.jp/item/detail/010040651',
                'シャトー・ローザン・ガシー'=>'https://www.enoteca.co.jp/item/detail/010040571',
                'シャトー・レオヴィル・ラスカーズ'=>'https://www.enoteca.co.jp/item/detail/010030401',
                'シャトー・レオヴィル・ポワフェレ'=>'https://www.enoteca.co.jp/item/detail/010030421',
                'シャトー・レオヴィル・バルトン'=>'https://www.enoteca.co.jp/item/detail/010030431',
                'シャトー・デュルフォール・ヴィヴァン'=>'https://www.enoteca.co.jp/item/detail/010042681',
                'シャトー・グリュオ・ラローズ'=>'https://www.enoteca.co.jp/item/detail/010030441',
                'シャトー・ラスコンブ'=>'https://www.enoteca.co.jp/item/detail/010042541',
                'シャトー・ブラーヌ・カントナック'=>'https://www.enoteca.co.jp/item/detail/010040641',
                'シャトー・ピション・ロングヴィル・バロン'=>'https://www.enoteca.co.jp/item/detail/010020241',
                'シャトー・ピション・ロングヴィル・コンテス・ド・ラランド'=>'https://www.enoteca.co.jp/item/detail/010020251',
                'シャトー・デュクリュ・ボーカイユ'=>'https://www.enoteca.co.jp/item/detail/010030391',
                'シャトー・コス・デス・トゥルネル'=>'https://www.enoteca.co.jp/item/detail/010010011',
                'シャトー・モンローズ'=>'https://www.enoteca.co.jp/item/detail/010010051',
                'シャトー・キルヴァン'=>'https://www.enoteca.co.jp/item/detail/010044111',
                'シャトー・ディッサン'=>'https://www.enoteca.co.jp/item/detail/010040681',
                'シャトー・ラグランジュ'=>'https://www.enoteca.co.jp/item/detail/010030451',
                'シャトー・ランゴア・バルトン'=>'https://www.enoteca.co.jp/item/detail/010033001',
                'シャトー・ジスクール'=>'https://www.enoteca.co.jp/item/detail/010040611',
                'シャトー・マレスコ・サン・テグジュペリ'=>'https://www.enoteca.co.jp/item/detail/010044671',
                'シャトー・ボイド・カントナック'=>'https://www.enoteca.co.jp/item/detail/010040631',
                'シャトー・カントナック・ブラウン'=>'https://www.enoteca.co.jp/item/detail/010040691',
                'シャトー・パルメ'=>'https://www.enoteca.co.jp/item/detail/010040581',
                'シャトー・ラ・ラギューヌ'=>'https://www.enoteca.co.jp/item/detail/010050781',
                'シャトー・デスミライユ'=>'https://www.dragee.co.jp/fs/dragee/gr135/W-BD17060802',
                'シャトー・カロン・セギュール'=>'https://www.enoteca.co.jp/item/detail/010010101',
                'シャトー・フェリエール'=>'https://www.dragee.co.jp/fs/dragee/gr725/W-BD19010810',
                'シャトー・マルキ・ダレム・ベッカー'=>'https://www.enoteca.co.jp/item/detail/010045781',
                'シャトー・サン・ピエール'=>'https://www.enoteca.co.jp/item/detail/010030541',
                'シャトー・タルボ'=>'https://www.enoteca.co.jp/item/detail/010030471',
                'シャトー・ブラネール・デュクリュ'=>'https://www.enoteca.co.jp/item/detail/010030491',
                'シャトー・デュアール・ミロン'=>'https://www.enoteca.co.jp/item/detail/010020281',
                'シャトー・プージェ'=>'https://www.enoteca.co.jp/item/detail/010040601',
                'シャトー・ラ・トゥール・カルネ'=>'https://www.enoteca.co.jp/item/detail/010052521',
                'シャトー・ラフォン・ロシェ'=>'https://www.enoteca.co.jp/item/detail/010010061',
                'シャトー・ベイシュヴェル'=>'https://www.enoteca.co.jp/item/detail/010030511',
                'シャトー・プリュレ・リシーヌ'=>'https://www.enoteca.co.jp/item/detail/010040621',
                'シャトー・マルキ・ド・テルム'=>'https://www.enoteca.co.jp/item/detail/010043381',
                'シャトー・ポンテ・カネ'=>'https://www.enoteca.co.jp/item/detail/010020341',
                'シャトー・バタイィ'=>'https://www.dragee.co.jp/fs/dragee/gr782/W-BD16110105',
                'シャトー・オー・バタイィ'=>'https://www.enoteca.co.jp/item/detail/010020361',
                'シャトー・グラン・ピュイ・ラコスト'=>'https://www.enoteca.co.jp/item/detail/010020311',
                'シャトー・グラン・ピュイ・デュカス'=>'https://www.enoteca.co.jp/item/detail/010020321',
                'シャトー・ランシュ・バージュ'=>'https://www.enoteca.co.jp/item/detail/010020291',
                'シャトー・ランシュ・ムーサ'=>'https://www.enoteca.co.jp/item/detail/010022941',
                'シャトー・ドーザック'=>'https://www.enoteca.co.jp/item/detail/010045761',
                'シャトー・ダルマイヤック'=>'https://www.enoteca.co.jp/item/detail/010020201',
                'シャトー・デュ・テルトル'=>'https://www.enoteca.co.jp/item/detail/010043391',
                'シャトー・オー・バージュ・リベラル'=>'https://www.enoteca.co.jp/item/detail/010020331',
                'シャトー・ペデスクロー'=>'https://www.enoteca.co.jp/item/detail/010023311',
                'シャトー・ベルグラーヴ'=>'https://www.dragee.co.jp/fs/dragee/gr353/W-BD17062708',
                'シャトー・カマンサック'=>'https://item.rakuten.co.jp/ledled/1-ch-camansac-2/?gclid=CjwKCAiAv4n9BRA9EiwA30WND5iMpEkrpmWyl8c2xbOpRCMChrDiUZtBrToKdGtzVWHJ5zGxm7GOoxoCq6QQAvD_BwE&scid=af_pc_etc&sc2id=af_113_0_10001868&gclid=CjwKCAiAv4n9BRA9EiwA30WND5iMpEkrpmWyl8c2xbOpRCMChrDiUZtBrToKdGtzVWHJ5zGxm7GOoxoCq6QQAvD_BwE&icm_acid=641-897-3033&icm_cid=1102570932&icm_agid=58457837248',
                'シャトー・コス・ラボリ'=>'https://www.enoteca.co.jp/item/detail/010013331',
                'シャトー・クレール・ミロン'=>'https://www.enoteca.co.jp/item/detail/010020221',
                'シャトー・クロワゼ・バージュ'=>'https://www.enoteca.co.jp/item/detail/010023851',
                'シャトー・カントメルル'=>'https://www.enoteca.co.jp/item/detail/010050721',
                'シャトー・オーゾンヌ'=>'https://www.enoteca.co.jp/item/detail/010081241',
                'シャトー・シュヴァル・ブラン'=>'https://www.enoteca.co.jp/item/detail/010081251',
                'シャトー・パヴィ'=>'https://www.enoteca.co.jp/item/detail/010081321',
                'シャトー・カノン'=>'https://www.enoteca.co.jp/item/detail/010081271',
                'シャペル・ド・オーゾンヌ'=>'https://www.enoteca.co.jp/item/detail/010560030',
                'シャトー・フィジャック'=>'https://www.enoteca.co.jp/item/detail/010081281',
                'シャトー・ヴァランドロー'=>'https://www.enoteca.co.jp/item/detail/010082821',
                'シャトー・トロロン・モンド'=>'https://www.enoteca.co.jp/item/detail/010081351',
            ];

        foreach ($wine_list as $name => $url) {
            Wine::create([
                'name' => $name,
                'url' => $url
            ]);
        }
    }
}

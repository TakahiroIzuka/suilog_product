# スイログ　 suilog_product

-   喫煙マナーを促進するための、喫煙可能な飲食店が検索できる飲食店検索マップアプリ
-   アプリ開発の経緯：2020 年 4 月からの健康増進法の改正で、店内での喫煙ができない飲食店が多くなり、それに伴って、店の前の路上で喫煙する人が多くなりました。もっと手軽に喫煙可能な飲食店を検索できるサービスがあれば、この問題を解決できると思い、作成しました。
-   開発内容：Python にて食べログサイトのスクレイピング、GooglemapAPI 連携、UI デザイン(Bootstrap)、会員機能、いいね機能、クチコミ投稿機能

## デモ

![System Diagram-Page-3 (6)](https://user-images.githubusercontent.com/67720987/111577516-c7937880-87f5-11eb-9077-62495dacd6fd.png)

## DB 設計

![System Diagram-Page-2 (2)](https://user-images.githubusercontent.com/67720987/110644110-1dfe2700-81f8-11eb-9719-bd97ca325a32.png)

## インフラ構造図

![System Diagram-Page-1](https://user-images.githubusercontent.com/67720987/112420385-75f86a00-8d70-11eb-90f6-595ad00671a9.png)

## 使い方

1. スイログサイトにアクセス ~~https://suilog.work~~
2. トップページでは喫煙可能な飲食店が現在地から近い順で表示されます。
3. 気になったお店をクリックすると詳細ページへ遷移します。
4. 詳細ページでは、他の人のイイネの数や、クチコミも見れ、食べログページにも遷移できます。
5. ヘッダーメニューからログインすると、お店にイイネや、クチコミを投稿できます。
6. ヘッダーメニューからマップ画面に遷移し、ピンをクリックするとお店の詳細ページに遷移します。

## 注意事項

※ 位置情報の許可をして頂かないと現在地から近い順のお店の表示や、マップ機能が使えなくなりますので、注意してください。

ログイン用ユーザー

-   email : user@sample.com
-   password : user

## 使用技術

-   HTML/CSS
-   MDBootstrap
-   PHP(laravel 6.2)
-   PHPUnit 8.5.14
-   MySQL 5.7
-   JavaScript
-   Vue.js 2.6
-   Python 3.6.5
-   Docker
-   docker-compose 3.8
-   CircleCi 2.0
-   Aws
-   nginx 1.18

## 文責

作成情報

-   伊塚　隆弘 (非喫煙者)
-   E-mail : takahiroi.311@gmail.com

## 参考文献

書籍

-   気づけばプロ並み PHP 　ゼロから作れる人になる！(改訂版)
-   PHP フレームワーク　 Laravel 入門(第 2 版)
-   さわって学ぶクラウドインフラ Amazon Web Services 基礎からのネットワーク&サーバー構築(改訂 3 版)
-   達人に学ぶ DB 設計徹底指南書 初級で終わりたくないあなたへ

オンライン教材

-   Git:もう怖くない Git!チーム開発で必要な Git を完全マスター(Udemy)
-   米国 AI 開発者がゼロから教える Docker 講座(Udemy)
-   Laravel6 と AWS で作るブックレビューサイト(Techpit)
-   Laravel × 　 CircleCI × AWS で学ぶ CI/CD(Techpit)
-   Laravel(+Vue.js)で SNS 風 Web サービスを作ろう！(Techpit)

参考サイト

-   【Python】BeautifulSoup の使い方・基本メソッド一覧｜スクレイピング https://lets-hack.tech/programming/languages/python/beautifulsoup/
-   Google Maps API の使い方・利用方法 https://www.webdesignleaves.com/pr/plugins/googlemap_01.html
-   Google Developers Distance Matrix API の使い方 https://developers-jp.googleblog.com/2020/02/how-use-distance-matrix-api.html

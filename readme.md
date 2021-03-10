# スイログ　suilog_product

* 喫煙マナーを促進するための、喫煙可能な飲食店が検索できる飲食店検索マップアプリ
* 開発内容：Pythonにて食べログサイトのスクレイピング、GooglemapAPI連携、UIデザイン(Bootstrap)、会員機能、スイログ評価機能、クチコミ投稿機能

## デモ
![System Diagram-Page-3](https://user-images.githubusercontent.com/67720987/110643482-7bde3f00-81f7-11eb-9a66-1adbbe4b4ff3.png)

## インフラ構造図
![System Diagram (3)](https://user-images.githubusercontent.com/67720987/110645657-839ee300-81f9-11eb-8d03-066f8d0bbd21.png)

## DB設計
![System Diagram-Page-2 (2)](https://user-images.githubusercontent.com/67720987/110644110-1dfe2700-81f8-11eb-9719-bd97ca325a32.png)


## 使い方

1. スイログサイトにアクセス https://suilog.work
2. トップページでは喫煙可能な飲食店が現在地から近い順で表示されます。
3. 気になったお店をクリックすると詳細ページへ遷移します。
4. 詳細ページでは、他の人のイイネの数や、クチコミも見れ、食べログページにも遷移できます。
5. ヘッダーメニューからログインすると、お店にイイネや、クチコミを投稿できます。
6. ヘッダーメニューからマップ画面に遷移し、ピンをクリックするとお店の詳細ページに遷移します。


## 注意事項

ログイン用ユーザー
* email : user@sample.com
* password : user


## 使用技術

* HTML/CSS
* Bootstrap
* PHP(laravel)
* MySQL
* JavaScript
* Vue.js
* Python
* Docker
* CircleCi
* Aws
* nginx


## 文責

作成情報

* 伊塚　隆弘
* E-mail : takahiroi.311@gmail.com


## 参考文献

書籍
* 気づけばプロ並みPHP　ゼロから作れる人になる！(改訂版)
* PHPフレームワーク　Laravel 入門(第2版)
* さわって学ぶクラウドインフラ Amazon Web Services 基礎からのネットワーク&サーバー構築(改訂3版)
* 達人に学ぶDB設計徹底指南書 初級で終わりたくないあなたへ

オンライン教材
* Git:もう怖くないGit!チーム開発で必要なGitを完全マスター(Udemy)
* 米国 AI開発者がゼロから教えるDocker講座(Udemy)
* Laravel6とAWSで作るブックレビューサイト(Techpit)
* Laravel ×　CircleCI × AWSで学ぶCI/CD(Techpit)
* Laravel(+Vue.js)でSNS風Webサービスを作ろう！(Techpit)

参考サイト
* 【Python】BeautifulSoupの使い方・基本メソッド一覧｜スクレイピング https://lets-hack.tech/programming/languages/python/beautifulsoup/
* Google Maps API の使い方・利用方法 https://www.webdesignleaves.com/pr/plugins/googlemap_01.html
* Google Developers Distance Matrix APIの使い方 https://developers-jp.googleblog.com/2020/02/how-use-distance-matrix-api.html

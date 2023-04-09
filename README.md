# leanlife
下記、4つのディレクトリ（サービス）で構成されています。
- PortfolioSite：ポートフォリオサイト
- CharacterConversion：YahooAPIを利用した言語カタカナ変換ツール
- CopyFoderTool：フォルダ複製ツール
- FavoriteMap：GoogleMapAPIを利用した、情報管理ツール　※開発途中

上記のサービスを作成しようと思い立った理由については、  
「PortfolioSite」内に記載しておりますので、下記URLの「my-children」からご覧ください。  
<https://leanlife.sakura.ne.jp/PortfolioSite>  
※BASIC認証に必要なID・PWはご連絡いただければお伝えします  
※本来、サービスごとにプロジェクトを分けて管理するべきですが、小規模なシステムであることと、共有のしやすさから1つにまとめております
  
  
### リポジトリ名について（余談）
「lean」には"無駄をなくす"という意味があります。  

現在、ITの進歩は著しく、大変便利なツールやサイトが様々用意されており、  
例えば、「お店一つ選ぶ」という行為にせよ、お店選びの手段という段階から選択肢は膨大です。  
お店選びに問わず、どのツールを使いどの選択をすれば正しいのだろうか常に私たちは考えています。  
選択肢が無数にあることで、却って考える余分な労力が必要になっているのではないでしょうか。  

私たちが暮らしていく中での無駄を取り除いていきたい。  
そんな想いからこのリポジトリ名としました。

# Features
- 業務上でメインに利用していた言語（PHP、Jquery、JavaScript、HTML、CSS）を扱った
- 業務外の知識の習得（Docker、GoogleMapAPI、YahooAPI）
- 単に開発するのではなく、課題に大してIT技術での解決を目的とした

# Requirement
PHP：7.2  
mysql：5.7  
jquery：3.6.1  
Chart.bundle.js：2.7.2

# Installation
### PHP：7.2、mysql：5.7  

PHP、Apache、MySQL、phpMyAdminをdocker環境で構築しています。  

#### 環境構築手順
1. ディレクトリ構成を作る
1. ターミナルでdocker-compose.ymlのある場所まで移動する
1. 下記、docker-composeコマンドを実行する

##### terminal（docker-composeコマンド）
```
docker-compose up -d
```

##### ディレクトリ構成
```
Desktop/docker  
           ├leanlife  
           │  └index.php  
           ├php  
           │  ├Dockerfile  
           │  └php.ini  
           ├docker-compose.yml  
           ├my.conf  
```

###### docker-compose.yml
```
version: '3'

services:
  php:
    build: ./php
    volumes:
      - ./php/php.ini:/usr/local/etc/php/php.ini
      - ./leanlife:/var/www/html
    ports:
      - 8080:80
    container_name: php8.1

  mysql:
    image: mysql:5.7
    command: mysqld --character-set-server=utf8 --collation-server=utf8_unicode_ci
    volumes:
      - ./mysql:/var/lib/mysql
      - ./my.cnf:/etc/mysql/conf.d/my.cnf
    environment:
      - MYSQL_ROOT_PASSWORD={自由に設定ください}
      - MYSQL_DATABASE={自由に設定ください}
      - MYSQL_USER={自由に設定ください}
      - MYSQL_PASSWORD={自由に設定ください}
      - "TZ=Asia/Tokyo"
    container_name: mysql5.7
    ports:
      - "4306:3306"
  
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    environment:
      - PMA_ARBITRARY=1
      - PMA_HOST=mysql
      - PMA_USER={自由に設定ください}
      - PMA_PASSWORD={自由に設定ください}
    links:
      - mysql
    ports:
      - 4040:80
    volumes:
      - ./phpmyadmin/sessions:/sessions
    container_name: phpmyadmin
```

###### my.conf
```
[mysqld]
character-set-server=utf8
collation-server=utf8_general_ci

[client]
default-character-set=utf8
```

###### Dockerfile
```
FROM php:7.2-apache
# PDOを使用できるようにする
RUN docker-php-ext-install pdo_mysql
```

###### php/php.ini
```
FROM php:7.2-apache
# PDOを使用できるようにする
RUN docker-php-ext-install pdo_mysql
```

### jquery：3.6.1（CDN）  
```
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
```

### Chart.bundle.js：2.7.2（CDN）
```
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
```

※CDNに関しては、既にソースコード内に記述されているので、追記の必要はなし

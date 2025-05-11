# Heroku のデプロイ時に使用する Dockerfile

FROM php:7.4-apache

WORKDIR /var/www/html

# PHP で必要なライブラリをインストール
RUN apt-get update \
    && apt-get install -y libonig-dev libzip-dev unzip mariadb-client \
    && docker-php-ext-install pdo_mysql mysqli mbstring zip

# composer のインストール
COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# ファイルのコピー
# ※src/ディレクトリ以下にファイルを作成し、phpコマンドで（パスを指定せず）実行できるのは下記のため
# →src/ディレクトリ以下がDocker内の/var/www/htmlに同期されるようになっている（docker-compose.ymlで設定）
# Dockerのコマンドは、/var/www/htmlをカレントディレクトリとして実行される（docker/app/Dockerfileで設定）
COPY ./src /var/www/html
COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

# Heroku で Apache2 が設定エラーになることへの対応
# https://github.com/docker-library/wordpress/issues/293
COPY ./docker/app/run-apache2.sh /usr/local/bin/
CMD [ "run-apache2.sh" ]

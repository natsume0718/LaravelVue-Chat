# Laravel Sandbox

## What

Laravel 6.x LTS のデバッグやコード解析を導入した Sandbox  
快適に開発をスタートできるようにするために作成

## Install & How to use

-   リポジトリをクローンしてください

-   `composer install`

-   `php artisan key:generate`

-   `chomod -R 777 storage && chomod -R 777 bootstrap/cache`

-   `.env`を設定してください

-   `php artisan migrate`

-   開発を始めましょう

-   `composer stan` または `./vendor/bin/phpstan analyse`で Larastan を用いた静的解析を実行できます。

-   `composer sniff` または `./vendor/bin/phpcs .`で codesniffer を用いたコーディング規約のチェックを行います。

-   `git checkout features/admin` から 管理者画面を簡単に導入ができるので必要な場合はマージします。

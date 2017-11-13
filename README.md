# docker-wordpress

## これは何?

WordPressのテーマ, プラグインを開発するために使えるDockerコンテナ.

## 使い方

docker-compose.ymlのあるディレクトリに移動して以下を実行.

動かす時: `docker-compose up -d`

止める時: `docker-compose down`

消す時: `docker-compose rm`

## メモ

WordPressのコンテナ:

[library/wordpress - Docker Hub](https://hub.docker.com/_/wordpress/)

参考にしたymlファイル:

[Quickstart: Compose and WordPress | Docker Documentation](https://docs.docker.com/compose/wordpress/)

Composeファイルの書き方:

[Compose ファイル・リファレンス — Docker-docs-ja 17.06.Beta ドキュメント](http://docs.docker.jp/compose/compose-file.html)

docker-composeのvolume設定:

[Docker Composeでボリューム作成 - Qiita](https://qiita.com/reflet/items/5c0a488494c7d6904084)

# オレオレWordPressテーマ開発用ボイラープレート powered by Bathe

## 使い方

```bash
$ git clone https://github.com/klim0824/wordpress-theme-dev.git

$ cd wordpress-theme-dev

$ docker-compose up -d

$ cd themes/original

$ yarn   # or $ npm install

$ yarn dev   # or $ npm run dev
```

- `localhost:3001` でWordPress本体の設定が行える
    - docker-composeによるもの
    - `localhost:3001/wp-admin` から投稿・管理画面に遷移

- `localhost:3002` でテーマ開発用画面
    - yarn(npm)によるもの
    - こちらでは管理画面は表示できない
    - エディタでphp, sassファイルを編集するとBrouserSyncで自動リロードされる
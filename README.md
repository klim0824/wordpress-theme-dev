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

## FAQ
### ポート番号変更したい！
- `docker-compose.yml` と `package.json` の2ファイルを編集する必要あり
    - `docker-compose.yml` の12行目付近の左側を3001から8888等に変える
    - 次に、 `package.json` の12行目付近の `proxy` の値を `localhost:8888` に変える
    - そして、 `package.json` の13行目付近の `port` の値を8889等に変える

### CSSとJavaScriptファイルを直に書きたい！
− tmpファイル置いておきますね
    - `themes/original/assets/css/tmp.css`
    - `themes/original/assets/js/tmp.js`

## Links
- https://ixkaito.github.io/bathe/
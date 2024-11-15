# マイページ領収書・請求書プラグイン(4.0系)

このプラグインを使用することで、Amazonのようにマイページから領収書と請求書の作成が可能になります。

また、領収書と請求書の宛名はユーザーが変更可能で、請求書の再発行を行なった際は（再発行）と表示されるようになります。
領収書と請求書が発行できるタイミングは注文した商品が発送された後ですが、Twigファイルをカスタマイズすることでタイミングの追加や変更が可能です。
詳しいカスタマイズ方法はお問い合わせください。

## 導入方法

- 当プラグインをインストール＆有効化してくだい。
- `管理画面` ＞ `コンテンツ管理` ＞ `キャッシュ管理` より、`キャッシュ削除` を行なってください。

*カスタマイズを行なっている際は正常に動作しない可能性がございます。

<a href="https://raw.githubusercontent.com/itaboo1014/ECCUBE-PluginReadmeAsset/main/InvoiceReceipt/1.png"><img src="https://raw.githubusercontent.com/itaboo1014/ECCUBE-PluginReadmeAsset/main/InvoiceReceipt/1.png"></a>
<a href="https://raw.githubusercontent.com/itaboo1014/ECCUBE-PluginReadmeAsset/main/InvoiceReceipt/2.png"><img src="https://raw.githubusercontent.com/itaboo1014/ECCUBE-PluginReadmeAsset/main/InvoiceReceipt/2.png"></a>
<a href="https://raw.githubusercontent.com/itaboo1014/ECCUBE-PluginReadmeAsset/main/InvoiceReceipt/3.png"><img src="https://raw.githubusercontent.com/itaboo1014/ECCUBE-PluginReadmeAsset/main/InvoiceReceipt/3.png"></a>
<a href="https://raw.githubusercontent.com/itaboo1014/ECCUBE-PluginReadmeAsset/main/InvoiceReceipt/4.png"><img src="https://raw.githubusercontent.com/itaboo1014/ECCUBE-PluginReadmeAsset/main/InvoiceReceipt/4.png"></a>

## ステータス変更時の処理

### インストール時
- DB テーブル `dtb_order` に `print_invoice` `print_receipt` カラムを作成
### アップデート時
- なし
### 有効化時
- なし
### 無効化時
- なし
### アンインストール時
- DB テーブル `dtb_order` の `print_invoice` `print_receipt` カラムを削除

# comicalテーマ
技術系のことを記録するサイトのテーマ

## ショートコード
### コードをハイライトする
`[highlight]ここにコードを入力する[/highlight]`  
  
### 見出し
`[heading hnum="NUMBER" num="NUMBER" mt="NUMBER"]`
- hnum
見出しの大きさを表します。  
`<h1>`にしたければ1を、`<h2>`にしたければ2を入れてください。  
- num
見出しのスタイルを変更します。
- mt
見出しの上に余白（マージン)をつけます。マージンの大きさは1〜100pxまで
  
### 用語集
```
[desc2Cell]
[desc2CellBox term="String:用語名" define="String:用語の説明"]
[desc2CellDetail]
主に用語の説明を入れます。  
他のショートコードや、HTMLタグ、文字など割となんでも入れられます。
不要であれば、この「desc2CellDetail」を入れる必要はありません。
[/desc2CellDetail]
[/desc2CellBox]
[/desc2Cell]
```

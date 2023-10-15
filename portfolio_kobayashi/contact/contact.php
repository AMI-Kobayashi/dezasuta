<?php
// 上のはPHPファイルの中で、PHPスクリプトを実行開始します、という意味です。　https://note.com/kohki/n/n0d519592c448
if($_POST) {
  echo "HTMLからPOST送信を受け取りました";
} else {
  echo "HTMLからのPOST送信受信に失敗しました";
}
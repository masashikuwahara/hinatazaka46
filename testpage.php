<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>テストページ</title>
</head>
<body>
  <h1>index</h1>
  <?php
  // OAuthライブラリの読み込み
  require_once('vendor/autoload.php'); //TwitterOAuthライブラリ
  use Abraham\TwitterOAuth\TwitterOAuth;
  
  //認証情報４つ
  $consumerKey         = '1pbp3Vm0OiM5wp3SdUvCvAxDJ';
  $consumerSecret     = '3FxG75JOPC0CT9XF6eHlpPJ1KUL7kywiSrRxNfW4SsC6H4G0Rb';
  $accessToken           = '1333330371497263106-51a2Xmsztk1JEF4XnFc2IkfgImghqI';
  $accessTokenSecret  = 'sh9yCSrSmsfWbCrHFcESpA1eHHK5FEQRzuGxv4oLRe38u';
  
  //接続
  $connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
  // $result = $connection->post("tweets", ["text" => "これはテスト投稿です3"], true); 

  $statuses = $connection->get(
    'statuses/user_timeline',
      // 取得するツイートの条件を配列で指定
      array(
        // ユーザー名（@は不要）
          'screen_name'       => 'hinatazaka46',
          // ツイート件数
          'count'             => '5',
          // リプライを除外するかを、true（除外する）、false（除外しない）で指定
          'exclude_replies'   => 'true',
          // リツイートを含めるかを、true（含める）、false（含めない）で指定
          'include_rts'       => 'false'
      )
  );
  
  // ツイート本文を格納する変数
  $text_list = [];
  // 取得したツイート情報のオブジェクトから、ツイート本文を取得し配列$id_listに格納
  foreach( $statuses as $tweet ){
      $text = $tweet->text;
      array_push( $text_list, $text );
  }

    // HTTPステータスコードを取得
$httpCode = $connection->getLastHttpCode();

// HTTPステータスコードを出力する（デバッグ用）
echo "HTTPステータスコード: " . $httpCode . "</br>";

if ($connection->getLastHttpCode() !== 200){
  echo "アカウントに接続できません！";
}else{
  echo "アカウント接続成功しました！";
}



// Simple HTML DOM Parser ライブラリをロード
require 'simple_html_dom.php';

// スクレイピングしたいページのURL
$url = 'https://www.hinatazaka46.com/s/official/?ima=0000';

// ページの内容を取得
$html = file_get_html($url);

$classToFind = 'p-news__item'; // ここに探しているクラス名を指定
$hnt = 'https://www.hinatazaka46.com'; // URLドメイン部分

// 指定された親クラスを持つ要素を取得し、その中の <a> タグを取得しリンクを出力
foreach($html->find(".$classToFind") as $parentElement) {
    foreach ($parentElement->find('a') as $link) {
        $linkUrl = $link->href;
        echo '<a href="' . $hnt . '' . $linkUrl . '">' . $link->plaintext . '</a><br>';
    }
}
  
  ?>
<a class="twitter-timeline" data-width="500" data-height="650" href="https://twitter.com/hinatazaka46?ref_src=twsrc%5Etfw">Tweets by hinatazaka46</a> 
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
</html>
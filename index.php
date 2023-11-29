<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>日向坂46応援サイト(仮)</title>
</head>
<body>
<?php require('header.php'); ?>
<div class="wrapper">
<h1 class="title">BLOG</h1>
  <?php
  require 'simple_html_dom.php';
  $url = 'https://www.hinatazaka46.com/s/official/diary/member?ima=0000';
  $html = file_get_html($url);
  $classToFind = 'p-blog-top__list'; //タグ部分
  $hnt = 'https://www.hinatazaka46.com'; // URLドメイン部分
  foreach($html->find(".$classToFind") as $parentElement) {
    foreach ($parentElement->find('a') as $link) {
      $linkUrl = $link->href;
      echo '<a href="' . $hnt . '' . $linkUrl . '">' . $link->plaintext . '</a><br>';
    }
  }
  ?>
  <h1>NEWS</h1>
  <div class="box">
    <?php
    $url = 'https://www.hinatazaka46.com/s/official/?ima=0000';
    $html = file_get_html($url);
    $classToFind = 'p-news__item'; //タグ部分
    $hnt = 'https://www.hinatazaka46.com'; // URLドメイン部分
    foreach($html->find(".$classToFind") as $parentElement) {
      foreach ($parentElement->find('a') as $link) {
        $linkUrl = $link->href;
        echo '<a href="' . $hnt . '' . $linkUrl . '">' . $link->plaintext . '</a><hr><br>';
      }
    }
    ?>
  </div>
  <h1>X</h1>
  <a class="twitter-timeline" data-width="500" data-height="650" href="https://twitter.com/hinatazaka46?ref_src=twsrc%5Etfw">Tweets by hinatazaka46</a> 
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class="example2">
    <div class="example3" style="margin-bottom: 30px;"></div>
    <div class="example3" style="margin-top: 30px;"></div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="hamburger.js"></script>
<?php require('footer.php'); ?>
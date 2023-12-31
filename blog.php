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
  <h1 class="blog">BLOG</h1>
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
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="hamburger.js"></script>
<?php require('footer.php'); ?>
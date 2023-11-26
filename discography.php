<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>日向坂46応援サイト(仮)</title>
  <style>
    .pagetop {
      cursor: pointer;
      position: fixed;
      right: 60px;
      bottom: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 10%;
      transition: .3s;
      color: #00A6C4;
      background: #87ceeb;
      opacity: 0;
    }
    .pagetop:hover {
      box-shadow: 0 0 10px #00A6C4;
    }
  </style>
</head>
<body>
<?php require('header.php'); ?>
<div class="wrapper">
  <h1 class="title">DISCOGRAPHY</h1>
  <h2>SINGLE</h2>
  <div class="pagetop">TOP</div>
  <table border="1" style="border-collapse: collapse" class="disco-list">
    <tr class="disco-list">
      <th>枚</th>
      <th>アートワーク</th>
      <th>リリース日</th>
      <th>タイトル</th>
    </tr>
    <tr class="disco-list">
      <td>1</td>
      <td><img src="img/kyun.jpg" alt=""></td>
      <td>2019年3月27日</td>
      <td>キュン</td>
    </tr>
    <tr class="disco-list">
      <td>2</td>
      <td><img src="img/doremi.jpg" alt=""></td>
      <td>2019年7月17日</td>
      <td>ドレミソラシド</td>
    </tr>
    <tr class="disco-list">
      <td>3</td>
      <td><img src="img/konsuki.jpg" alt=""></td>
      <td>2019年10月2日</td>
      <td>こんなに好きになっちゃっていいの?</td>
    </tr>
    <tr class="disco-list">
      <td>4</td>
      <td><img src="img/sonnakotonaiyo.jpg" alt=""></td>
      <td>2020年2月19日</td>
      <td>ソンナコトナイヨ</td>
    </tr>
    <tr class="disco-list">
      <td>5</td>
      <td><img src="img/kimishika.jpg" alt=""></td>
      <td>2021年5月26日</td>
      <td>君しか勝たん</td>
    </tr>
    <tr class="disco-list">
      <td>6</td>
      <td><img src="img/tteka.jpg" alt=""></td>
      <td>2021年10月27日</td>
      <td>ってか</td>
    </tr>
    <tr class="disco-list">
      <td>7</td>
      <td><img src="img/bokunannka.jpg" alt=""></td>
      <td>2022年6月1日</td>
      <td>僕なんか</td>
    </tr>
    <tr class="disco-list">
      <td>8</td>
      <td><img src="img/tsukihoshi.jpg" alt=""></td>
      <td>2022年10月26日</td>
      <td>月と星が踊るMidnight</td>
    </tr>
    <tr class="disco-list">
      <td>9</td>
      <td><img src="img/onechoice.jpg" alt=""></td>
      <td>2023年4月19日</td>
      <td>One choice</td>
    </tr>
    <tr class="disco-list">
      <td>10</td>
      <td><img src="img/amiready.jpg" alt=""></td>
      <td>2023年7月26日</td>
      <td>Am I ready?</td>
    </tr>
  </table>

  <h2>ALBUM</h2>
  <table border="1" style="border-collapse: collapse">
    <tr class="disco-list">
      <th>枚</th>
      <th>アートワーク</th>
      <th>リリース日</th>
      <th>タイトル</th>
    </tr>
    <tr class="disco-list">
      <td>1</td>
      <td><img src="img/hashiridasu.jpg" alt=""></td>
      <td>2018年6月20日</td>
      <td>走り出す瞬間</td>
    </tr>
    <tr class="disco-list">
      <td>2</td>
      <td><img src="img/hinatazaka.jpg" alt=""></td>
      <td>2020年9月23日</td>
      <td>ひなたざか</td>
    </tr>
    <tr class="disco-list">
      <td>3</td>
      <td><img src="img/myakuutsu.jpg" alt=""></td>
      <td>2023年11月8日</td>
      <td>脈打つ感情</td>
    </tr>
  </table>

</div>
<script>
  const pagetop_btn = document.querySelector('.pagetop');

  pagetop_btn.addEventListener("click",scroll_top);
  function scroll_top(){
    window.scroll({ top:0, behavior: "smooth"});
  }

  window.addEventListener("scroll",scroll_event);
  function scroll_event(){
    if(window.pageYOffset > 100){
      pagetop_btn.style.opacity = "1";
    }else if(window.pageYOffset < 100){
      pagetop_btn.style.opacity = "0"
    }
  }
</script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
ScrollReveal().reveal('.disco-list');
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="hamburger.js"></script>
<?php require('footer.php'); ?>
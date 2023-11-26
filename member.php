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
  <h1 class="title">MEMBER</h1>
  <div class="pagetop">TOP</div>
  <table border="1" style="border-collapse: collapse" class="member-list">
    <tr class="member-list">
      <th></th>
      <th>名前</th>
      <th>生年月日</th>
      <th>期</th>
    </tr>
    <tr class="member-list">
      <td class="member-list"><img src="img/ushio.jpg" alt=""></td>
      <td>潮紗理菜</td>
      <td>1997年12月26日</td>
      <td>一期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/shiho.jpg" alt=""></td>
      <td>加藤史帆</td>
      <td>1998年2月2日</td>
      <td>一期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/kyoko.jpg" alt=""></td>
      <td>齊藤京子</td>
      <td>1997年9月5日</td>
      <td>一期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/captain.jpg" alt=""></td>
      <td>佐々木久美</td>
      <td>1996年1月22日</td>
      <td>一期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/mirei.jpg" alt=""></td>
      <td>佐々木美玲</td>
      <td>1999年12月17日</td>
      <td>一期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/mana.jpg" alt=""></td>
      <td>高瀬愛奈</td>
      <td>1998年9月20日</td>
      <td>一期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/ayaka.jpg" alt=""></td>
      <td>高本彩花</td>
      <td>1998年11月2日</td>
      <td>一期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/mei.jpg" alt=""></td>
      <td>東村芽依</td>
      <td>1998年8月23日</td>
      <td>一期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/miku.jpg" alt=""></td>
      <td>金村美玖</td>
      <td>2002年9月10日</td>
      <td>二期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/hina.jpg" alt=""></td>
      <td>河田陽菜</td>
      <td>2001年7月23日</td>
      <td>二期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/nao.jpg" alt=""></td>
      <td>小坂菜緒</td>
      <td>2002年9月7日</td>
      <td>二期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/suzuka.jpg" alt=""></td>
      <td>富田鈴花</td>
      <td>2001年1月18日</td>
      <td>二期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/akari.jpg" alt=""></td>
      <td>丹生明里</td>
      <td>2001年2月15日</td>
      <td>二期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/hiyori.jpg" alt=""></td>
      <td>濱岸ひより</td>
      <td>2002年9月28日</td>
      <td>二期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/konoka.jpg" alt=""></td>
      <td>松田好花</td>
      <td>1999年4月27日</td>
      <td>二期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/hinano.jpg" alt=""></td>
      <td>上村ひなの</td>
      <td>2004年4月12日</td>
      <td>三期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/mikuni.jpg" alt=""></td>
      <td>髙橋未来虹</td>
      <td>2003年9月27日</td>
      <td>三期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/marie.jpg" alt=""></td>
      <td>森本茉莉</td>
      <td>2004年2月23日</td>
      <td>三期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/haruyo.jpg" alt=""></td>
      <td>山口陽世</td>
      <td>2004年2月23</td>
      <td>三期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/tamaki.jpg" alt=""></td>
      <td>石塚瑶季</td>
      <td>2004年8月6日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/honoka.jpg" alt=""></td>
      <td>岸帆夏</td>
      <td>2004年8月15日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/nanami.jpg" alt=""></td>
      <td>小西夏菜実</td>
      <td>2004年10月3日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/rio.jpg" alt=""></td>
      <td>清水理央</td>
      <td>2005年1月15日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/yoko.jpg" alt=""></td>
      <td>正源司陽子</td>
      <td>2007年2月14日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/kirari.jpg" alt=""></td>
      <td>竹内希来里</td>
      <td>2006年2月20日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/hiraho.jpg" alt=""></td>
      <td>平尾帆夏</td>
      <td>2003年7月31日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/mitsuki.jpg" alt=""></td>
      <td>平岡海月</td>
      <td>2002年4月9日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/kaho.jpg" alt=""></td>
      <td>藤嶌果歩</td>
      <td>2006年8月7日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/sumire.jpg" alt=""></td>
      <td>宮地すみれ</td>
      <td>2005年12月31日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/haruka.jpg" alt=""></td>
      <td>山下葉留花</td>
      <td>2003年5月20日</td>
      <td>四期</td>
    </tr>
    <tr class="member-list">
      <td><img src="img/rina.jpg" alt=""></td>
      <td>渡辺莉奈</td>
      <td>2009年2月7日</td>
      <td>四期</td>
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
ScrollReveal().reveal('.member-list');
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="hamburger.js"></script>
<?php require('footer.php'); ?>
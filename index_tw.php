<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="vendor/swiper-bundle.min.css">
</head>
<style>
  html,body{
    font-family: "微軟正黑體";
    margin: 0;
    padding: 0;
    box-sizing: 0;
  }
  body {
    font-size: 14px;
    margin: 0;
    padding: 0;
  }
</style>
<body>
  <section class="First_header">
    <a href="index.php"><img src="img/index_first/logo.png" style="width: 40px; margin-right: 1vw;">華園茶莊 | HuaYuan TeaHouse</a>
    <ul class="First_links">
      <li><a href="">首頁</a></li>
      <li><a href="">品牌</a></li>
      <li><a href="">據點</a></li>
      <li><a href="">購物</a></li>
      <li><a href="">聯絡</a></li>
      <li>
        <img src="img/index_first/lang.gif" alt="">
        <ul>
          <li><a href="index_tw.php">繁體中文</a></li>
          <li><a href="index_ch.php">簡體中文</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <section class="First_content">
    <div class="First_Obagtea">
      <div class="First_OBagtea_Title">《原葉袋茶》</div>
      <div class="First_OBagtea_Group">
        <img src="img/index_first/demo.jpg" alt="">
        <span>阿里山烏龍茶</span>
        <span>50g</span>
        <span>NTD $300</span>
      </div>
      <div class="First_OBagtea_Group">
        <img src="img/index_first/demo.jpg" alt="">
        <span>阿里山烏龍茶</span>
        <span>50g</span>
        <span>NTD $300</span>
      </div>
      <div class="First_OBagtea_Group">
        <img src="img/index_first/demo.jpg" alt="">
        <span>阿里山烏龍茶</span>
        <span>50g</span>
        <span>NTD $300</span>
      </div>
      <div class="First_OBagtea_Group">
        <img src="img/index_first/demo.jpg" alt="">
        <span>阿里山烏龍茶</span>
        <span>50g</span>
        <span>NTD $300</span>
      </div>
    </div>
    <div class="First_Obagtea">
      <div class="First_OBagtea_Title">《茶葉》</div>
      <div class="First_OBagtea_Group">
        <img src="img/index_first/demo.jpg" alt="">
        <span>阿里山烏龍茶</span>
        <span>50g</span>
        <span>NTD $300</span>
      </div>
      <div class="First_OBagtea_Group">
        <img src="img/index_first/demo.jpg" alt="">
        <span>阿里山烏龍茶</span>
        <span>50g</span>
        <span>NTD $300</span>
      </div>
      <div class="First_OBagtea_Group">
        <img src="img/index_first/demo.jpg" alt="">
        <span>阿里山烏龍茶</span>
        <span>50g</span>
        <span>NTD $300</span>
      </div>
      <div class="First_OBagtea_Group">
        <img src="img/index_first/demo.jpg" alt="">
        <span>阿里山烏龍茶</span>
        <span>50g</span>
        <span>NTD $300</span>
      </div>
    </div>
    <div class="First_Brand">
      <div class="First_Brand_Title">《品牌 | About Us》</div>
      <div class="First_Brand_content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem dolores ab iusto at, odit repudiandae veritatis quo. Ullam facilis, magnam placeat quo quasi fuga molestias, quas laudantium qui rem ratione?
      Dicta optio magnam, autem illo aperiam veniam perferendis voluptatum repudiandae doloremque architecto, reiciendis, nulla voluptas ducimus fugiat eum eos rem. Quos temporibus atque mollitia beatae quibusdam! Porro dolores totam quibusdam.
      Nesciunt velit perspiciatis laudantium eum officiis? Repellendus quisquam adipisci assumenda! Tempora blanditiis ipsam a tenetur! Explicabo, quaerat! Reprehenderit maxime nesciunt tenetur expedita, commodi nostrum suscipit tempora repudiandae. Veniam, eos aperiam.
      Eveniet, ex vitae debitis ab quam quibusdam reprehenderit nam ducimus, beatae ipsum laborum expedita quisquam temporibus, tenetur aliquid voluptas explicabo quas aut aperiam non! Quos esse ad iusto iure! Ab?</div>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="img/index_first/demo.jpg" alt=""></div>
        <div class="swiper-slide"><img src="img/index/BG.jpg" alt=""></div>
        <div class="swiper-slide"><img src="img/index/BG_dark.jpg" alt=""></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
</body>
<script src="vendor/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
</html>
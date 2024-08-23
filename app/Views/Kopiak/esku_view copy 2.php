<?= $this->extend("templates/base"); ?>

<?= $this->section("content"); ?>

<html>
<head>

<meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
 
    
* {
  font-family: Nunito, sans-serif;
}


    body {
      background: white;
      font-family: Nunito, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      height: calc((80% - 40px) / 2) !important;

      /* Center slide text vertically */
      display: flex;
      justify-content: center;
      align-items: center;
    }

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
}


.team-head-text {
  font-size: 48px;
  font-weight: 900;
  text-align: center;
}

.team-head-text {
  line-height: 50px;
  width: 100%;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
}

.card {
  text-align: center;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 30px;
  padding-right: 25px;
  padding-bottom: 30px;
  padding-left: 25px;
  width: 300px;
  height: 350px;
}

.card-container {
  width: 280px;
  margin-top: 0px;
  margin-right: 10px;
  margin-bottom: 25px;
  margin-left: 10px;
}

.name {
  margin-top: 20px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
  font-size: 18px;
  font-weight: 800;
}

.position {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
}

.feature-text {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
  color: rgb(122, 122, 122);
  line-height: 30px;
}

.team-image-wrapper {
  clip-path: circle(50% at 50% 50%);
  width: 130px;
  height: 130px;
}

.team-member-image {
  max-width: 100%;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

</style>

      <title> <?= $title; ?> </title>
</head>


<section>
  <div class="responsive-container-block">
  <p class="text-blk team-head-text">
  <?= $header; ?>
  </p>
    <?php if ($eskuizkribu !== []): ?>
      <div class="swiper mySwiper">
    <div class="swiper-wrapper">
         <?php foreach ($eskuizkribu as $esk): ?>
          <div class="swiper-slide">
            <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/esk$esk->zk.png")?>">
                </div>
                <p class="text-blk name">
                  <?=$esk->izenburua?>
                </p>
                  <p class="text-blk position">
                  <?=$esk->urtea?>
                </p>
                <p class="text-blk feature-text">
                  <?=$esk->editatua?>
                <form method="GET" action="/eskuizkribuxehetasunak"><input type= "hidden" name="zka" value="<?= $esk->zk;?>"><button class="button" type="submit">Xehetasunak</button></form>
                 </p>

              </div>
         </div>
            
                
    <?php endforeach ?>
    </div>
          </div>
          <div class="swiper-pagination"></div>
  </div>
 

    <?php else: ?>

    <h3>Ez dago deus ere.</h3>
    <p>Ez dago bat datorren elementurik</p>

    <?php endif ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    grid: {
      rows: 2,
    },
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>
</section>

</body>
</html>
<?= $this->endSection(); ?> 



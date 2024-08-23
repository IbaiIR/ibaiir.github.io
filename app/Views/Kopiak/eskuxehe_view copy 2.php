<?= $this->extend("templates/base"); ?>

<?= $this->section("content"); ?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    * {
  font-family: Nunito, sans-serif;
}
.responsive {
  width: 40%;
  max-width: 600px;
  height: 800px;
}
.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: space-evenly;
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
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');
.button:hover {
  background-color: #555;
}

.text-blk {
  line-height: 25px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
}

.inner-container {
  max-width: 1320px;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 100px;
  margin-left: auto;
}

.section-head-text {
  font-size: 50px;
  line-height: 60px;
  font-weight: 700;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 18px;
  margin-left: 0px;
}

.section-subhead-text {
  color: rgb(72, 72, 72);
  font-size: 20px;
  line-height: 27px;
  max-width: 670px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 80px;
  margin-left: 0px;
}

.card {
  width: 340px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 30px;
  padding-right: 25px;
  padding-bottom: 40px;
  padding-left: 25px;
  box-shadow: rgba(134, 134, 134, 0.16) 0px 6px 24px;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
  border-bottom-left-radius: 6px;
  background-color: rgb(255, 255, 255);
}

.img-wrapper {
  clip-path: circle(50% at 50% 50%);
  max-width: 130px;
  height: 130px;
}
.team-member-image {
  max-width: 100%;
}

.name {
  font-size: 20px;
  font-weight: 700;
  margin-top: 28px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
  line-height: 27px;
}

.position {
  line-height: 26px;
  color: rgb(0, 166, 127);
  font-weight: 700;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
}

.position2 {
  line-height: 26px;
  color: rgb(0, 0, 0);
  font-weight: 250;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
}

.testimonial {
  color: rgb(122, 122, 122);
  font-size: 18px;
  line-height: 27px;
}

.outer-container {
  background-color: rgb(250, 250, 250);
  padding-top: 0px;
  padding-right: 50px;
  padding-bottom: 0px;
  padding-left: 50px;
}

.container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: block;
}

.swiper.team-swiper {
  max-width: 100%;
  width: 100%;
  height: fit-content;
}

.swiper-slide {
  display: flex;
  justify-content: flex-start;
  height: auto;
}

.swiper-pagination.container-block {
  position: relative;
  top: 0px;
  margin-top: 36px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.swiper-container-horizontal &gt;

.swiper-pagination-bullets .swiper-pagination-bullet {
  margin-top: 0px;
  margin-right: 4px;
  margin-bottom: 0px;
  margin-left: 4px;
  height: 12px;
  width: 12px;
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: initial;
  background-repeat-y: initial;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: rgb(0, 166, 127);
}

.swiper-wrapper {
  position: relative;
  top: 0px;
}

@media (max-width: 1024px) {
  .swiper-slide {
    justify-content: center;
  }
}

@media (max-width: 500px) {
  .outer-container {
    padding-top: 0px;
    padding-right: 20px;
    padding-bottom: 0px;
    padding-left: 20px;
  }
}
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');


body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
.btn {
  background-color: Black;
  border: none;
  color: white;
  padding: 7px;
  cursor: pointer;
  font-size: 1rem;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: Grey;
}

</style>
    <title><?= $title; ?> </title>

</head>
<section>

    
    <?php if ($eskuizkribu !== []): ?>
            <?php foreach ($eskuizkribu as $esk): ?>
                
                <section>
                 <div class="u-clearfix u-sheet u-valign-middle u-block-ac9a-2" style="min-height: 799px">
                    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-expanded-width u-product u-white u-block-control u-block-ac9a-3" style="min-height: 679px; background-image: none; margin-top: 60px; margin-bottom: 0px; height: auto;" data-block="13">
                    <div style="padding-top: 1px; padding-left: 30px; padding-right: 30px; padding-bottom: auto" data-container-layout-dom="1"><img src="<?= base_url("assets/img/esk$esk->zk.png")?>" class="responsive">
                    <div style="width: 485px; min-height: 507px; height: auto; background-image: none; margin-top: -798px; margin-right: 60px; margin-bottom: 3px; margin-left: auto" data-block="15">
                        <div class="u-container-layout u-block-ac9a-8" style="padding-top: 1px; padding-left: 30px; padding-right: 30px; padding-bottom: 0" data-container-layout-dom="2">
                            <div class="u-product-control u-product-price u-block-control u-block-ac9a-10" style="margin-top: 0px; margin-left: auto; margin-right: auto; margin-bottom: 0" data-block="16">
                                <div class="u-price-wrapper u-spacing-10">
                    <div class="u-price" style="font-size: 3rem; font-weight: 700;"><?= $esk->izenburua;?></div>
                                </div>
                            </div>
                <h2 class="u-product-control u-text u-block-control u-block-ac9a-9" style="text-transform: uppercase; font-size: 1.25rem; letter-spacing: 4px; width: 228px; margin-top: 30px; margin-left: auto; margin-right: auto; margin-bottom: 0" data-block="17"><a><?=$esk->urtea?></a></h2>
                <div class="u-product-control u-product-desc u-text u-block-control u-block-ac9a-11" style="margin-top: 15px; margin-left: 0; margin-right: 0; margin-bottom: 0" data-block="18">
                    <p><b>Neurria: </b> <?= $esk->neurria;?></p>
                    <p><b>Orrialde kopurua:</b> <?= $esk->orrialdeak;?></p>
                    <p><b>Jatorrizkoa non:</b> <?= $esk->non;?></p>
                    <p><b>Signatura:</b> <?= $esk->signatura;?></p>
                    <p><b>Edizio egoera:</b> <?= $esk->editatua;?></p> 
                    <p><b>Izenburu osoa:</b> <?= $esk->izenburu_osoa;?></p>
                    <p><b>Oharrak:</b> <?= $esk->oharrak;?></p></div>
                    <button class="btn" type="submit" onclick="window.open('<?= base_url("assets/esku/$esk->zk.pdf")?>', '<?= base_url("assets/esku/$esk->zk.zip")?>')"><i class="fa fa-download"></i>  Jaitsi</button>
                </section>
            <?php endforeach ?>
    &nbsp; &nbsp; &nbsp; 

    
    <?php if ($edizio == []): ?>
      <div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
      <p class="text-blk section-head-text">
      Eskuizkribuaren edizioak
    </p>
    <p class="text-blk section-subhead-text">
      Eskuizkribu hau ez dago editaturik.
    </p>
    <?php else: ?>
      <div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <p class="text-blk section-head-text">
      Eskuizkribuaren edizioak
    </p>
    <p class="text-blk section-subhead-text">
      Eskuizkribu honen edukia edo edukiaren zati bat honako lanetan aurki daiteke:
    </p>
    <?php foreach ($edizio as $edi): ?>
    
     <div class="responsive-container-block">
      <div class="swiper team-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card">
              <div class="img-wrapper">
                <img class= "team-member-image" src="<?= base_url("assets/img/edi$edi->Zenbakia.png")?>">
              </div>
              <div class="card-content">
                <p class="text-blk name">
                <td><?= $edi-> Izenburua;?></td>
                </p>
                <p class="text-blk position">
                <td><?= $edi-> Autorea;?></td>
                </p>
                <p class="text-blk position2">
                <td><?= $edi-> Mota;?></td>
                </p>
                <p><form method="GET" action="/edizioxehetasunak"><input type= "hidden" name="zka" value="<?= $edi->Zenbakia;?>"><button class="button" type="submit">Xehetasunak</button></form>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination container-block">
        </div>
      </div>
    </div>

        <?php endforeach ?>
        

    
    <?php endif ?>
        </div>

    <?php else: ?>

    <h3>Ez dago deus ere.</h3>
    <p>Ez dago bat datorren elementurik</p>

    <?php endif ?>
    </div>
      
</section>
<script>
    var swiper = new Swiper(".team-swiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
      breakpoints: {

        200: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        750: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        1024: {
          slidesPerView: 2.5,
          spaceBetween: 30
        },
        1100: {
          slidesPerView: 3,
          spaceBetween: 30
        },
      }
    });
</script>

<?= $this->endSection(); ?> 



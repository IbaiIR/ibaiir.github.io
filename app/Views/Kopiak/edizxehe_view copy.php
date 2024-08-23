<?= $this->extend("templates/base"); ?>
<?= $this->section("content"); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
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
  display: block;
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

    swiper-container {
      width: 80%;
      height: 80%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: auto;
      align-items: center;
    }

    swiper-slide img {
      display: flex;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

</style>

      <title> <?= $title; ?> </title>
</head>
<section>


<?php if ($edizio !== []): ?>
            <?php foreach ($edizio as $edi): ?>
                
                <section>
                 <div class="u-clearfix u-sheet u-valign-middle u-block-ac9a-2" style="min-height: 799px">
                    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-expanded-width u-product u-white u-block-control u-block-ac9a-3" style="min-height: 679px; background-image: none; margin-top: 60px; margin-bottom: 0px; height: auto;" data-block="13">
                    <div style="padding-top: 1px; padding-left: 30px; padding-right: 30px; padding-bottom: auto" data-container-layout-dom="1"><img src="<?= base_url("assets/img/edi$edi->Zenbakia.png")?>" class="responsive">
                    <div style="width: 485px; min-height: 507px; height: auto; background-image: none; margin-top: -798px; margin-right: 60px; margin-bottom: 3px; margin-left: auto" data-block="15">
                        <div class="u-container-layout u-block-ac9a-8" style="padding-top: 1px; padding-left: 30px; padding-right: 30px; padding-bottom: 0" data-container-layout-dom="2">
                            <div class="u-product-control u-product-price u-block-control u-block-ac9a-10" style="margin-top: 0px; margin-left: auto; margin-right: auto; margin-bottom: 0" data-block="16">
                                <div class="u-price-wrapper u-spacing-10">
                    <div class="u-price" style="font-size: 3rem; font-weight: 700;"><?= $edi->Izenburua;?></div>
                                </div>
                            </div>
                <h2 class="u-product-control u-text u-block-control u-block-ac9a-9" style="text-transform: uppercase; font-size: 1.25rem; letter-spacing: 4px; width: 228px; margin-top: 30px; margin-left: auto; margin-right: auto; margin-bottom: 0" data-block="17"><a><?=$edi->Urtea?></a></h2>
                <div class="u-product-control u-product-desc u-text u-block-control u-block-ac9a-11" style="margin-top: 15px; margin-left: 0; margin-right: 0; margin-bottom: 0" data-block="18">
                    <p><b>Autorea:</b> <br/> &ensp; <?= $edi->Autorea;?></p>
                    <p><b>Edizio mota:</b> <br/> &emsp; <?= $edi->Mota;?></p>
                    <p><b>Formatu eskuragarriak:</b> <br/> &emsp; <?= $edi->Formatua;?></p>
                    <p><b>Erreferentzia:</b> <br/> &emsp; <?= $edi->Erreferentzia;?></p> 
                    <p><b>Oharrak:</b> <br/> &emsp; <?= $edi->Oharrak;?></p></div>
                    <button class="btn" type="submit" onclick="window.open('<?= base_url("assets/ediz/$edi->Zenbakia.pdf")?>')"><i class="fa fa-download"></i>  Jaitsi</button></p>
                </section>
            <?php endforeach ?>
    &nbsp; &nbsp; &nbsp; 
    
    <div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <p class="text-blk section-head-text">
      Jatorrizko eskuizkribua
    </p>
    <p class="text-blk section-subhead-text">
      Edizio honek honako lane(t)an du jatorria:
    </p>
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
    slides-per-view="3">
  
    <?php foreach ($esku as $esk): ?>
      <swiper-slide>
            <div class="card">
              <div class="img-wrapper">
                <img class= "team-member-image" src="<?= base_url("assets/img/esk$esk->zk.png")?>">
              </div>
              <div class="card-content">
                <p class="text-blk name">
                <td><?= $esk-> izenburua;?></td>
                </p>
                <p class="text-blk position">
                <td><?= $esk-> urtea;?></td>
                </p>
                <p><form method="GET" action="/eskuizkribuxehetasunak"><input type= "hidden" name="zka" value="<?= $esk->zk;?>"><button class="button" type="submit">Xehetasunak</button></form>
                </p>
              </div>
            </div>
    </swiper-slide>
        <?php endforeach ?>
    </swiper-container>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
      </div>

    </div>
  </div>


    <?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

    <?php endif ?>
    
      
    </ul>
</section>
   
</body>
</html>
<?= $this->endSection(); ?> 

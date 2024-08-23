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
html, 
body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}
 
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
.left-column {
  width: 65%;
  position: relative;
}
.team-membi {
  max-width: 700px;
  min-width: 600px;
}
.right-column {
  width: 35%;
  margin-top: 60px;
}


.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;

}
.product-description h2 {
  font-weight: 300;
  font-size: 33px;
  color: #43484D;
  letter-spacing: -2px;
  text-align: center;
}
.product-description p {
  font-size: 17px;
  font-weight: 325;
  color: #43484D;
  line-height: 24px;
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
.outer-container {
  background-color: rgb(250, 250, 250);
  padding-top: 10px;
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
.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: auto;
  display: block;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex;
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
  font-weight: 400;
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
  clip-path: circle(40% at 50% 50%);
  max-width: 130px;
  height: 130px;
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
  width: 200px;
}

.text-blk {
  line-height: 25px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  text-align: center;
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
.text-blk {
  line-height: 25px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
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
  margin-right: auto;
  margin-bottom: 80px;
  margin-left: auto;
}
    swiper-container {
      width: 80%;
      height: 80%;
      max-height: 330px;
      
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      
    }

    swiper-slide img {
      display: center;
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
              <main class="container">
 
 <!-- Left Column / Headphones Image -->
                <div class="left-column">
                  <img class="team-membi" src="<?= base_url("assets/img/edi$edi->Zenbakia.png")?>">
                </div>

 <!-- Right Column -->
 <div class="right-column">

   <!-- Product Description -->
   <div class="product-description">

     <h1><?= $edi->Izenburua;?></h1>
     <h2><?= $edi->Urtea;?></h2>
     <p><b>Autorea:</b> <br/> &ensp; <?= $edi->Autorea;?></p>
                    <p><b>Edizio mota:</b> <br/> &emsp; <?= $edi->Mota;?></p>
                    <p><b>Formatu eskuragarriak:</b> <br/> &emsp; <?= $edi->Formatua;?></p>
                    <p><b>Erreferentzia:</b> <br/> &emsp; <?= $edi->Erreferentzia;?></p> 
                    <p><b>Oharrak:</b> <br/> &emsp; <?= $edi->Oharrak;?></p></div>
                    <button class="btn" type="submit" onclick="window.open('<?= base_url("assets/ediz/$edi->Zenbakia.pdf")?>')"><i class="fa fa-download"></i>  Jaitsi</button></p></p>
   </div>

  </main>
              
            <?php endforeach ?>
    &nbsp; &nbsp; &nbsp; 
    
    <div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <p class="text-blk section-head-text">
&nbsp;      Jatorrizko eskuizkribua
    </p>
    <p class="section-subhead-text" text-align="center">
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
    &nbsp;
    </div>

</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    


    <?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

    <?php endif ?>
    
      
    </ul>
</section>
   
</body>
</html>
<?= $this->endSection(); ?> 

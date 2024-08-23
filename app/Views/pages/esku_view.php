<?= $this->extend("templates/base"); ?>

<?= $this->section("content"); ?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 
    
* {
  font-family: Nunito, sans-serif;
}
.grid-container {
  display: grid;
  grid-template-columns: 33% 33% 33%;
  gap: 30px;
  background-color: #fff;
  padding: 60px;
}

.responsive-cell-block {
  min-height: 75px;
}

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
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

.container {
  max-width: 100%;
  margin-top: 60px;
  margin-right: auto;
  margin-bottom: 60px;
  margin-left: auto;
  padding-top: 0px;
  padding-right: 30px;
  padding-bottom: 0px;
  padding-left: 30px;
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
      <div class="grid-container">
        <?php foreach ($eskuizkribu as $esk): ?>
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
            
                
    <?php endforeach ?>
    </div>

    <?php else: ?>

    <h3>Ez dago deus ere.</h3>
    <p>Ez dago bat datorren elementurik</p>

    <?php endif ?>
    </div>

</section>

</body>
</html>
<?= $this->endSection(); ?> 



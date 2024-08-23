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
 
.right-column {
  width: 35%;
  margin-top: 60px;
}

.team-membi {
  max-width: 700px;
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
  text-align: center;
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


.responsive-container-block1 {
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

.inner-container1 {
  max-width: 1320px;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 100px;
  margin-left: auto;
}

.outer-container1 {
  background-color: rgb(250, 250, 250);
  padding-top: 10px;
  padding-right: 50px;
  padding-bottom: 0px;
  padding-left: 50px;
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
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 200px;
  max-height: 80px;
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
    table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
.collapsible {
  background-color: #188;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}
.active, .collapsible:hover {
  background-color: #888;
}
.collapsible:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #888;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}
.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #200200200;
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
     <p><b>Autorea:</b> <?= $edi->Autorea;?></p>
                    <p><b>Edizio mota:</b> <?= $edi->Mota;?></p>
                    <p><b>Formatu eskuragarriak:</b> <?= $edi->Formatua;?></p>
                    <p><b>Erreferentzia:</b> <?= $edi->Erreferentzia;?></p> 
                    <p><b>Oharrak:</b> <?= $edi->Oharrak;?></p></div>
                    <button class="btn" type="submit" onclick="window.open('<?= base_url("assets/ediz/$edi->Zenbakia.pdf")?>')"><i class="fa fa-download"></i>  Jaitsi</button></p></p>
   </div>

  </main>
              
            <?php endforeach ?>

  <div class="responsive-container-block1 outer-container1">
  <div class="responsive-container-block1 inner-container1">
   
    <?php if ($edat == []): ?>
      <p class="text-blk section-head-text">
      Edizio hau ez dago atalkaturik
    </p>
      <?php else: ?>
    
        <p class="text-blk section-head-text">
      Edizioaren atalak
    </p>
      <div>
    <button type="button" class="collapsible">ikusi</button>
      <div class="content">
            <table class="sortable">

            <tr>
                <th>Atalaren zenbakia</th>
                <th>Atalaren izenburua</th>
                <th>Orrialdeak</th>
                <th>Oharrak</th>
              </tr>


        <?php foreach ($edat as $eat): ?>
            <tr>
                <td><?= $eat->Zenbakia;?></td>
                <td><?= $eat->Atal_izenburua;?></td>
                <td><?= $eat->Orrialdeak;?></td>
                <td><?= $eat->Oharrak;?></td>
                <td><form method="GET" action="/ediatal"><input type= "hidden" name="zka" value="<?= $eat->Ed_Zk_Globala;?>"><button class="button" type="submit">Edizioak</button></form></td>
            </tr>
        <?php endforeach ?>
        </table>
      </div>
        </div>
        </div>




<?php endif ?>
  </div>
  </div>                 
</div>
    <div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <p class="text-blk section-head-text">
&nbsp;      Jatorrizko eskuizkribua
    </p>
    <p class="section-subhead-text" text-align="center">
      Edizio honek honako eskuizkribu(et)an du jatorria:
    </p>
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
    slides-per-view="3">
    <?php $Zk=array();?>
    <?php foreach ($esku as $esk): ?>
    <?php if (!in_array($esk->zk, $Zk)):?>
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
    <?php $Zk[] = $esk->zk;?>
                <?php endif?>

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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="http://code.jquery.com/jquery-1.7.2.min.js"><\/script>')</script>
<script>
(function ($) {
$(function () {
var linkTemplate = "<a href='#{href}'>{html}</a>",
findHref = /\{href\}/g,
findHtml = /\{html\}/g;
$("table.sortable").each(function () {
var $table = $(this),
$rowBody = $table.find(">tbody"),
// only get rows in tbody element (skip table headers)
$dataRows = $rowBody.find(">tr"),
sortColumn = 0,
uniqueTableId = "table-" + (new Date()).valueOf();
// sort array based on sortColumn (set to 0 above)
$dataRows.sort(function (a, b) {
var $a = $(a),
$b = $(b),
aVal = $a.find(">td:eq(" + sortColumn + ")").text().toLowerCase(),
bVal = $b.find(">td:eq(" + sortColumn + ")").text().toLowerCase();
$a.attr("data-sort-text", aVal);
$b.attr("data-sort-text", bVal);
if (aVal < bVal) return -1;
else if (aVal > bVal) return 1;
else return 0;
});
$rowBody.empty().append($dataRows);
// loop through and build alphabet nav
var nav = "";
for (var i = "A".charCodeAt(0); i <= "Z".charCodeAt(0); i++) {
var letter = String.fromCharCode(i),
// look for first row that starts with the letter
$tr = $dataRows.filter("[data-sort-text^='" + letter.toLowerCase() + "']:eq(0)"),
rowId = letter + "-" + uniqueTableId;
nav += " ";
if ($tr.length > 0) {
$tr.attr("id", rowId);
nav += linkTemplate.replace(findHref, rowId).replace(findHtml, letter);
} else {
nav += letter;
}
}

});
});
})(window.jQuery);
</script>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>
</body>
</html>
<?= $this->endSection(); ?> 
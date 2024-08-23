<?= $this->extend("templates/base"); ?>
<?= $this->section("content"); ?>
<style>
    * {
  font-family: Nunito, sans-serif;
}
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 75%;
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
.irudia {
  clip-path: box(40% at 50% 50%);
  max-width: 130px;
  height: 130px;
  margin-left: auto;
  margin-right: auto;
  position: "center";
  display: block
}
.gorputza{
  text-indent:27px;
  text-align:justify;
  font-size: 17px;
  margin-left: 2rem;
  margin-right: 1.5rem;
  line-height: 1.5;
}
</style>
      <title> <?= $title; ?> </title>


<!--<img class= "irudia" src="<?= base_url('favicone.ico'); ?>"/>-->

&nbsp;
 <!-- Product Description -->
 <div class="product-description">

<h1>Joakin Lizarragaren obra eta bizitza ezagutzeko web orrialdea</h1>

<div class= gorputza>
    <p>Web orrialde hau Joakin Lizarragaren obra eta bizitza ezagutzera emateko sortua da. Hala, toki bakarrean, haren eskuizkribuak, horien edizioak eta autoreari buruzko lan guztiak jasotzen saiatu gara. Horiekin batera, Lizarragaren bizitzari eta Elkano inguruko euskarari buruzko informazioa ere jaso dugu.</p>

    <p>Orrialdearen egitura ahalik eta sinpleen mantentzen saiatu gara, "hasiera" atalaz gain, informazioa bost atal nagusitan bilduta.</p>

    <p> <b>Bizitza</b> atalean, autoreari eta haren garaiari buruzko informazioa jaso dugu, hainbat iturritatik ikasitakoa elkartuta. Informazioa modu antolatuagoan emateko, atalaren barnean lau multzo sortu ditugu (gizarte eta kultura egoera, autoreari buruz dakiguna, oharrak eta autoreari buruzko lanak). Multzo bakoitzari dagokion informazioa eskuratzeko, gainean klik egin behar da.</p>

    <p> <b>Euskalkia</b> atalean, hego-nafarrerari buruzko zenbait datu bildu ditugu, Lizarragaren lanekin alderatuta, autorea eta Iruñe inguruko euskara bera hobeki ezagutzeko asmoz.</p>

    <p> <b>Eskuizkribuak</b> atalean, ezagutzen ditugun eskuizkribu guztiak bildu ditugu. Bakoitzaren "xehetasunak" botoian sakatuta, eskuizkribu horren inguruko informazioa eskuratzen ahal da, hala nola, non dagoen, signatura, urtea, atalak... Era berean, eskuizkribua editatuta dagoen ala ez jakiten ahal da, eta hala izatekotan, zein edizio lan edo lanetan ageri den ikasten ahalko dugu eta baita edizioaren nondik norakoak ezagutu ere, bakoitzaren "xehetasunak" botoian sakatuta. Digitalizaturik dauden eskuizkribuen kasuan, digitalizazioa jaisteko aukera ere eskaintzen da.</p>
    <p>Eskuizkribu batzuk atalka zatitu ditugu, esaterako, atalka editaturik daudenak. Halakoetan, atalak menu zabalgarri baten barnean sartu ditugu eta horiek ikusteko haren gainean sakatu beharra dago. Editaturik dauden atalen kasuan atala zein edizio lanetan jaso den zehaztu da.</p>

    <p> <b>Edizioak</b> atalean, aurkitu ditugun edizio lan guztiak bildu ditugu. Atal honen funtzionamendua "Eskuizkribuak" delakoaren antzekoa da, lehengaia edizioak badira ere. Hauetatik abiatuta, jatorrizko ekuizkriburua jo dezakegu modu errazean. Eskuizkribuekin egin bezalaxe, zenbait edizio ere atalka banatu ditugu, zenbait kasutan, edizio baten barnean hainbat eskuizkributako pasarteak jaso baitira. Menu zabalgarri bat izanen da eskura halakoetan, eta atal bakoitza zein eskuizkriburi dagokion jakin daiteke.</p>    
    <p> <b>Konkordantzia</b> atalean, testu formatuan ditugun Lizarragaren lan guztietan hitzak bilatzeko aukera dago. Hitzaren esanahia eta erabilera hobeki ulertu dadin, agertzen den esaldia osorik ematea erabaki dugu</p>    

    <p>Ongi etorriak!</p>
    &nbsp;

    <img src="<?= base_url('assets/img/sinadura.png'); ?>" alt="Sinadura" class="center" />
    </div>
</div>


</section>
<?= $this->endSection(); ?> 
</body>
</html>

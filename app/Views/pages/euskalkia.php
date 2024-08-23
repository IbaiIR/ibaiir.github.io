<?= $this->extend("templates/base"); ?>

<?= $this->section("content"); ?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    * {
  font-family: Nunito, sans-serif;
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
.collapsible1 {
  background-color: #168;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.collapsible2 {
  background-color: #178;
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
.active, .collapsible1:hover {
  background-color: #888;
}
.active, .collapsible2:hover {
  background-color: #888;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #200200200;
}
.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;

  text-align: left;
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
.team-image-wrapper {
  clip-path: circle(50% at 50% 50%);
  width: 130px;
  height: 130px;
}
.team-image-wrapper2 {
  /*clip-path: box(50% at 50% 50%);
  align: center;
  min-width: 20rem;
  max-width: 90rem;
  height: 75rem;*/
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.team-image-wrapper3 {
  /*clip-path: box(50% at 50% 50%);
  align: center;
  min-width: 20rem;
  max-width: 90rem;
  height: 75rem;*/
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 15%;
}


.team-member-image {
  max-width: 70%;
  display:block;
  margin-left: auto;
  margin-right: auto;
  position: center;
}
.team-member-image1 {
  max-width: 100%;
  border: white;
  margin-left: auto;
  margin-right: auto;
  display: block;
}
.collapsible2:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #888;
  float: right;
  margin-left: 5px;
}

.collapsible1:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #888;
  float: right;
  margin-left: 5px;
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
.gorputza{
  text-indent:27px;
  text-align:justify;
  font-size: 17px;
  margin-right: 1rem;
  line-height: 1.5;
}
.gorputza1{
  text-indent:0px;
  text-align:justify;
  font-size: 17px;
  margin-right: 1rem;
  line-height: 1.5;
}
.gorputza2{
  text-indent:-40px;
  text-align:justify;
  font-size: 17px;
  margin-right: 1rem;
  line-height: 1.5;
}

.aipua{
  text-indent:20px;
  text-align: justify;
  font-size: 14px;
  margin-left: 3rem;
  line-height; 1.2;
}
.sarrerakoa{
  text-indent:20px;
  text-align: justify;
  font-size: 27px;
  margin-left: 1rem;
  
}
.sarrera-gorputza{
  text-indent:27px;
  text-align:justify;
  font-size: 17px;
  margin-left: 1rem;
  margin-right: 1rem;
}
.container {
  max-width: 1380px;
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
.btn {
  background-color: Black;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: Grey;
}
swiper-container {
      width: 100%;
      height: 100%;
      max-height: 600px;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 250px;
      max-width:350px;
      max-height: 600px;
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
  border: 1px solid black;
  border-radius: 10px;
  table-layout: auto;
  border-collapse: collapse;
}
th, td {
  text-align: left;
  padding: 16px;
  border-collapse: collapse;
}
.th1 {
  text-align: left;
  padding: 16px;
  border-collapse: collapse;
  border-right: solid 3px black; 
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
.verticalSplit {
	border-top:none;
	border-bottom:none;
}
.verticalSplit:first-of-type {
	border-left:none;
}
.verticalSplit:last-of-type {
	border-right:none;
}

</style>
      <title> <?= $title; ?> </title>

</head>
<div class="team-image-wrapper3">
    <img class="team-member-image1" src="<?= base_url("assets/img/Nafarroa.png")?>">
  </div>
<section>
  &nbsp;
 <div class="responsive-container-block">
  <p class="text-blk team-head-text">
  <?=$header;?><sup>0</sup></p>
</div>

  &nbsp;
<body>


  

<button type="button" class="collapsible">I. Hego-nafarreraren eremua</button>
<div class="content">
<div class="gorputza">
  <p class=“gorputza”>Bonapartek 1869an bi goi-nafarrera bereizi zituen: iparraldekoa eta hegoaldekoa, bakoitza euskalki beregaintzat hartuz. Hegoaldekoa “ultrapamplones” (mendebaldekoa), “cispamplones” (ekialdekoa) eta “Izarbeibarko” azpihizkeretan banatu eta Aezkoako hizkera mendebaldeko behe-nafarrerara bildu zuen.</p>
  <p class=“gorputza”>XX. mendearen hondarrean eta XXI.aren hasieran argitaraturiko zenbait ikerketak, ordea, bi azpihizkera dituen euskalki bakarra dela proposatzen dute, besteak beste Zuazok (1998), Ibarrak (2000) eta Caminok (2003 & 2004a). Nafarroako gobernuak azkenaren <i>Hego-nafarrera</i> liburua eman zuen argitara (2004a) eta bertan egiten da egun ezagutzen den hizkera honi buruzko azterketarik xehe eta zehatzena. Aurreko proposamenak gainditu eta beste era batera sailkatu zituen hego-nafarreraren baitako hizkerak, lau hizkera bereiziz: mendebaldekoa (MHN), hegoaldekoa (HHN), erdialdekoa (ErdHN) eta ekialdekoa (EkiHN). Hego-nafarrera erdiguneko euskalkia da, eta halako eremuak ez dira dialektologikoki sailkatzeko errazak izaten; are zailago, euskalki honek azken mende eta erdian jasandako atzerakada (§ "Bizitza/Gizarte eta kultura egoera") eta lekukotasunen urria (§ II) kontuan hartzen badira.</p>
  <p class=“gorputza”>Hizkera hau osatzen duten azpihizkeren erdian, Etxeberri Sarakoak “euskaldunen hiri buruzagia” deitu zuena dago: Iruñea, Nafarroa Garaiko hiriburua. Iruñerria (gaztelaniaz <i>Comarca </i>edo <i>Cuenca de Pamplona</i>) esaten zaion eremu hori ere bertan dago. Bere baitan biltzen diren herriek ez dute entitate ofizial bat osatzen, ez eta administratiboki ere, eta hori dela-eta ez dago argi zehazki zein herrik osatzen duten delako eremua. Definizio asko eman zaizkio historian zehar eta askotan ibar edo herri batzuk barnekotzat hartu izan dira eta beste batzuetan ez. Caminok jasotakoaren arabera (2004a: 15), Foru nagusiak Ezkabarte Iruñerrikotzat hartzen zuen, baina Perez Ollok (2002: 15) ez zuen horrela ikusten. Harentzat, Iruñerria Oltza, Antsoain, Itza, Zizur eta Galar zendeek eta Eguesibarrek eta Etxauribarrek osatzen dute. Aldiz, Mendiolarendako (2002: 391) aurrekoez gain, Txulapain, Olloibar, Olaibar, Ezkabarte, Aranguren eta Elortzibar ere Iruñerrikoak dira.</p>
  <p class=“gorputza”>Geografikoki definitzeko hain zaila ematen duen eremu hori isoglosa bertikal ugariren elkargune ere bada, eta inguru horretan, hego-nafarreraren baitako bi joera bereizten dira (Camino, 2004a: 30-31 & 2003: 461). Ematen du Iruñetik ezker, Gesalatz, Izarbeibar, Goñerri, Olloibar eta Oltzan, Euskal Herriko erdiguneko hizkeren zenbait ezaugarri antzematen direla eta Eguesibar, Erroibar, Artzibar eta Aezkoan, aldiz, ekialdeko hizkeren eragina nabarmenagoa dela. Guztiarekin ere, hego-nafarrerako hizkera guztietan iparralde eta ekialdeko hizkerekiko halako lotura bat sumatzen da, Nafarroa iparraldeko hizkeretan ez dagoena eta bi nafarrerak justifikatzeko balio duena. Zehaztasun gehiagorekin ikusiko ditugu banatzaileak diren ezaugarriak (Iriarte, 2022:109), baina zertaz ari garen apur bat uler dadin, isoglosa lexiko horren erakusgarri txiki bat ekarri dugu Gares (HHN), Goñi (MHN), Oltza (MHN) eta Eguesibar (ErdHN), hurrenkeran (Camino, 1999: 18):</p>
</div>
<div class="aipua">
  <p class=“aipua”>25 - au, ori, ura / au, ori, oré / au, ori, oré /gau, gori, gura</p>
  <p class=“aipua”>26 - atzeratu / atzeratu<sup>1</sup> / atzeratu/ gibelatu, atzeratu.</p>
  <p class=“aipua”>27 - altu / altu / altu / gora, altu.</p>
  <p class=“aipua”>28 - esplego 'lavanda' / ixkiripuru / ixkiripuru / ispiku.</p>
<p class=“aipua”>29 - istarzain 'iztazaina' / zangazpi / zangazpi / istarzain.</p>
</div>
<div class="gorputza">
<p class=“gorputza”>Ikusten denez, isoglosa ez da muga gotorra, ezaugarriak batera eta bestera ageri baitira. Hurrengo taulak Goñerri eta Eguesibar banatzen dituen lexikoa (Camino 2004a: 95) jasotzen du eta hori JSMBn jasotakoarekin alderatu dugu. Lizarragak bi aldaerak erabiltzen dituenean, bakoitzaren agerpen kopurua eman dugu parentesien artean:</p>
</div>
<table>
    <tr>
      <th>Goñerri</th>
      <th>Eguesibar</th>
      <th class= "th1">JMSB</th>
      <th>Goñerri</th>
      <th>Eguesibar</th>
      <th>JMSB</th>
    </tr>
    <tr>
      <td>altu</td>
      <td>gora / altu</td>
      <td class= "th1">gora</td>
      <td>izen</td>
      <td>nombre/izen</td>
      <td>izen</td>
    </tr>
    <tr>
      <td>apar</td>
      <td>abuña</td>
      <td class= "th1">abuña</td>
      <td>kabi</td>
      <td>kafi</td>
      <td>kafi</td>
    </tr>
    <tr>
      <td>azpi</td>
      <td>pe / azpi</td>
      <td class= "th1">pe (51) / azpi (3) </td>
      <td>kabi</td>
      <td>kafi</td>
      <td>kafi</td>
    </tr>    <tr>
      <td>barga</td>
      <td>peña</td>
      <td class= "th1">peña</td>
      <td>maiz</td>
      <td>usu/maiz</td>
      <td>maiz (41 / usu (9)</td>
    </tr>    <tr>
      <td>beatz</td>
      <td>eri</td>
      <td class= "th1">eri</td>
      <td>mozkor</td>
      <td>ordi / mozkor</td>
      <td>ordi</td>
    </tr>    <tr>
      <td>beatz 'erpuru'</td>
      <td>beatz aundi</td>
      <td class= "th1">eri-beatz</td>
      <td>ondoan</td>
      <td>altakan / ondoan</td>
      <td>aldakan (41) / ondoan (11)</td>
    </tr>    <tr>
      <td>berandu</td>
      <td>berant</td>
      <td class= "th1">berant (29) / berandu (1)</td>
      <td>partz</td>
      <td>bartz</td>
      <td>bartz</td>
    </tr>    <tr>
      <td>berdin</td>
      <td>bardin</td>
      <td class= "th1">bardin (15) / berdin (1)</td>
      <td>tanta</td>
      <td>txorta</td>
      <td>tanta</td>
    </tr>    <tr>
      <td>bi</td>
      <td>bida / bi</td>
      <td class= "th1">bi (505) / bida (15)</td>
      <td>txikitu</td>
      <td>xeatu</td>
      <td>zeatu</td>
    </tr>    <tr>
      <td>ille 'artile'</td>
      <td>elle</td>
      <td class= "th1">elle</td>
      <td>txintxurri / estarri</td>
      <td>txintxurri</td>
      <td>txintxurri</td>
    </tr>    <tr>
      <td>iltze</td>
      <td>itze</td>
      <td class= "th1">itze</td>
      <td>txispe</td>
      <td>txindi</td>
      <td>txindi</td>
    </tr>
</table>
<div class="gorputza">
  <p class=“gorputza”>Ikusten denez, Lizarraga isoglosaren ekialdera jasotako lexikoarekin bat dator gehienetan, baina ez beti (cf. tanta). Heldu diren ataletan adibide gehiago aztertuko ditugu.</p>
</div>
</div>
&nbsp;
&nbsp;
&nbsp;
&nbsp;


<button type="button" class="collapsible">II. Hego-nafarreraren hizkerak eta corpusa</button>
<div class="content">
<div class="gorputza">
  <p class=“gorputza”>Lizarragaren mintzoa dialektologikoki aztertzeko, lehenik eta behin hego-nafarrera osatzen duten hizkerak zein diren aipatuko dugu labur. Hizkera bakoitzarekin azpiatal bat osatu dugu (§2.1-2.4) eta azpiatal horietariko bakoitzaren barnean, hizkerak hartzen duen eremua zehaztu eta bakoitza ordezkatzeko erabili dugun corpusa zein izan den adierazi dugu. Corpusa osatu ahal izateko, ezinbestekoa izan da Iñaki Caminoren laguntza, hark jarri baitizkigu eskura erabilitako testuen edizioak. HNren ezaugarrietariko bat lekukotasunen urria da, eta erabili ditugunak baino lekukotasun gutxi batzuk gehiago izan badiren arren, fidagarritasun mailarik handiena dutenak soilik erabiltzea erabaki dugu. Era berean, atalaren sarreran esan dugun bezala, ahozko eta idatzizko corpusak uztartu ditugu eta baita garai ezberdinetako lekukotasunak ere.</p>
  <p class=“gorputza”>Kontuan izan IbarraH, ArtolaAr eta CaminoAeren eta JMSBren artean mende eta erdi inguruko aldea dagoela. Alegia, XVIII. mendearen erdian ikasi zuen Lizarragak euskaraz Elkanon eta XX.aren bukaeran bildu dira datuak Erroibar, Esteribar eta Aezkoan, XX. mendearen hasieran jaio ziren jendeengandik. Hizkuntza bizirik dago eta denborak aurrera egin ahala aldatuz doa. Lizarragaren lekukotasuna estatikoa da eta ez da aldatzen, eta, hortaz, distortsioa sortzen da bi elementu horiek alderatzean. Alderaketa egitean distortsio hori leuntzen saiatu gara, eta ez dugu bistatik galdu denborak izan duen (eta duen) eragina eta horren ondorioz heldu diren berrikuntzak gertatu direla Erroibar, Esteribar eta Aezkoan. Joakin Lizarragaren lana, aldiz, hizkuntza horren aspaldiko egoeraren lekukotasuna da, akaso, Erroibar-Esteribar, Aezkoa eta Eguesibarko euskaran batasun handiagoa zegoenekoa, gerora izan den baino. Lizarraga lotuago ageri da forma zaharragoei, hiru ibarretako ahozko datuetan hizkuntza berrikuntzak gertatu dira eta zertxobait urrundu dira mintzo horiek Lizarragarenetik, baina Lizarragarena aldatu ez denez, zinezko urrunketa lexikoaren zenbatekoaz jabetzea lan erlatiboa eta zaila da, Lizarraga geldirik baitago eta beste bi eskualdeak mugitzen, garatzen.</p>
  <p class=“gorputza”>Hizkera bakoitzari eskaini diogun azpiatalean, bakoitzaren eremua zehaztasun handiagoz erakusten duten mapak eman ditugun arren, ikuspegi zabalago bat eskaini eta hego-nafarreraren azpihizkerak geografikoki kokatzen laguntzeko, hizkera guztiak biltzen dituen Nafarroako mapa eman dugu jarraian.</p>
</div>
<div class="team-image-wrapper2">
    <img class="team-member-image" src="<?= base_url("assets/img/Nafarroa.png")?>">
  </div>
  &nbsp;
<h3>2.1 Mendebaldeko hego-nafarrera (MHN)</h3>
&nbsp;
  <div class="team-image-wrapper2">
    <img class="team-member-image" src="<?= base_url("assets/img/mhn.png")?>">
  </div>
  &nbsp;
  <div class="gorputza">
    <p class=“gorputza”>Mendebaldeko hego-nafarrera (MHN) Gesalatz, Goñerria, Ollaran eta Oltza zendea hartzen dituen eremuan hitz egiten zen aldakia da. Horietatik, Gesalazko hizkera da hobekien ezagutzen dena, batez ere Elizalde muzkiarraren testuetatik heldu informazioari esker. Horren atzetik Goñerrikoa dago, testu labur gutxi batzuk eta Bonaparteren inkestak ezagutzen baitira. Ollarango hizkera dago ondoren eta bertan <i>Erizkizundi Irukoitz</i>erako egindako inkestak dira informazio iturri bakar eta ez oso fidagarria (Camino, 2004a: 124). Oltza zendean ere egoera antzekoa da, Bonaparteren inkestez gain ezer gutxi baitago bertako hizkera ezagutzeko. Aipatu beharra dago Caminok (2004a) arazo ugari izan zuela Arakilgo hizkera sailkatzerakoan, batez ere MHNren mugakide den Urritzola herriari dagokionez. Ez dago argi MHNren barruan sartu beharra dagoen ala ez, eta datu faltak ez du auzia argitzen laguntzen. Horren aurrean, gordetzaile jokatu eta aurreko sailkapenei jarraituz MHNtik kanpo uztea erabaki zuen Caminok. </p>
    <p class=“gorputza”>Gure lanerako hizkera honetako bi testu erabili ditugu. Francisco Elizalderen 1735eko <i>Apezendaco Doctrina Christiana Uscaras</i> eta 1743ko Goñerriko testu bat.</p>
    <p class=“gorputza”>Ursuak (1994) dioenaren arabera, Francisco Elizalde Muzkin (Gesalatz) jaio zen 1646 eta 1654 urteen artean<sup>2</sup> eta bere doktrina, XVIII. mendean nafarreraz argitaraturiko liburu bakarra dela dio Reguerok (2019: 490). Iruñean argitaratu zen Alfonso Burgueteren alargunaren etxean 1735ean.</p>
    <p class=“gorputza”>Bigarren testua FLV aldizkariaren 53. zenbakian argitaratu zuen Ondarrak (1989), 1921ean Goñerriko Munarritz herrian aurkitutako beste zenbait testurekin batera. Egileari buruz ez du daturik ematen, baina testuaren gaia ikusirik, elizgizona izan behar zela proposatzen du.</p>
  </div>
  &nbsp;  
<h3>2.2 Hegoaldeko hego-nafarrera (HHN)</h3>
&nbsp;
  <div class="team-image-wrapper2">
    <img class="team-member-image" src="<?= base_url("assets/img/hhn.png")?>">
  </div>
  &nbsp;
  <div class="gorputza">
    <p class=“gorputza”>Hegoaldeko aldakiak Izarbeibar du bere eremua. Zenbait herri biltzen dira Iruñetik gertu, Erreniega mendia igarota, hegoaldera dagoen ibar honetan: Adios, Añorbe, Biurrun, Eneritz, Gares, Legarda, Muruzabal, Obanos, Olkotz, Tirapu Ukar eta Uterga. </p>
    <p class=“gorputza”>Hegoaldeko hego-nafarrera (HHN) da EZKn hego-nafarrerazko corpusik handiena duen hizkera. Honako hauek dira hizkera honetako corpusa osatzen duten bost testuak: Juan de Beriainen <i>Tratacen da nola ençun vear den meza</i> (1621) eta <i>Doctrina Christioarena Euscaras</i> (1626), <i>Missiora deeya</i> (1744) izenburua duten bertsoak eta Muruzabalgo bi sermoi (1743ko bat eta XVIII. mendeko beste bat).</p>
    <p class=“gorputza”>Juan de Beriain Utergan jaio zen 1566 urte inguruan (Jimeno Jurio, 1988) eta bertan aritu zen apaiz 1602az geroztik, 1633an hil zen arte. Bi liburu argitaratu zituen ele bitan (euskaraz eta gaztelaniaz). Lehena 1621ean Iruñean, Carlos Labaienen inprimategian eta bigarrena 1626an, ezagutzen ez den tokian (Reguero, 2019: 430).</p>
    <p class=“gorputza”> <i>Missiora deeya</i> izenburua daramaten bertsoak nork, non eta noiz idatzi ziren zehazki ezagutzen ez den arren, Ondarrak proposatzen du Juan de Undianok Obanosen eta 1744 inguruan idatziak izan zirela (1994: 535).</p>
    <p class=“gorputza”>Muruzabalgo sermoiez den bezainbatean, bietariko batean ere ez dakigu idazlea zein izan zen. Hala ere, horietariko batean 1743 urtea adierazten da hasieran<sup>3</sup> eta bestea XVIII. mende hasierakoa izan daitekeela proposatzen du Satrustegik (1987: 63), baina egun ezagutzen den kopia geroago berridatzitakoa omen da (ibid.).</p>
  </div>
  &nbsp;
    <h3>2.3 Erdialdeko hego-nafarrera (ErdHN)</h3>
    &nbsp;
  <div class="team-image-wrapper2">
    <img class="team-member-image" src="<?= base_url("assets/img/erdhn.png")?>">
  </div>
  &nbsp;
  <div class="gorputza">
    <p class=“gorputza”>Erdialdeko hego-nafarreran (ErdHN) Euskara Zahar eta Klasikotik (EZK) hasi eta Bigarren Euskara Modernora (BEM) arteko lekukotasunak jaso dira. Garai guztiak kontuan harturik, erdialdekoa da informazio iturririk oparoena eskaintzen duen hizkera, bai lekukotasunei eta baita azterketei dagokienez ere.</p>
    <p class=“gorputza”>Iruñe ondoan dagoen Eguesibar, hego-Esteribar,<sup>4</sup> Erroibar eta Artzibar biltzen ditu hizkera honek eta, gorago aipatu dugunez (§ 2.2), aztergai dugun lanaren autorea Eguesibarko Elkano herrian jaio zen.</p>
    <p class=“gorputza”>Lau iturri erabili ditugu hizkera honen ordezkari: <i>Larrasoañako sermoia, 1729ko sermoia</i> eta berriagoak diren <i>ArtolaAr</i> eta </i>IbarraH</i>.</p>
    <p class=“gorputza”> <i>Larrasoañako sermoia</i> herri horretan irakurtzeko sortu zen testu bat da. “Dichososco Erria, dichosoa diot dela Larrasuaña” esaldiarekin hasten da eta egilea eta data agertzen ez diren arren, Satrustegik (1987b: 57) XVIII. mendekoa izan daitekeela adierazten du.</p>
    <p class=“gorputza”>1729ko sermoiak ez du idatzia izan zen lekuaren edo autorearen inguruko informaziorik ematen eta Otsagabian agertu zen arren, testuak ezagun du hego-nafarreraz idatzirik dagoela, dagoeneko Ondarrak adierazi zuen bezala (1981a: 147). Gure ikerketan erabiltzeko, ErdHNren barruan sailkatzea erabaki dugu, testuan aurkituriko zenbait ezaugarrik sailkapen horren alde egiten baitu. Esaterako, <i>elle</i> ‘artile’ ageri da ErdHNan bezala, MHNko eta HHNko <i>ille</i> eta EkiHNko <i>eile</i> beharrean. MHNtik eta HHNtik aldentzen da, ez baita <i>aungi</i> ‘ongi’ edo <i>beaurzu</i> ‘behar duzu’ bezalako formarik ageri eta iraganeko hirugarren pertsonako adizkietan ez duelako bukaerako -en galtzen (cf. <i>zu</i> ‘zuen’ edo <i>zitu</i> ‘zituen’). EkiHNtik urruntzen duten zenbait hitz ere aurkitu ditugu, hala nola, <i>amabirjin</i> (EkiHN <i>amaberkin</i>) eta <i>estrabi</i> ‘ukuilu’ (EkiHN <i>artegi</i>).</p>
    <p class=“gorputza”>Corpus berriagoei dagokienez, Artolak 1980ko hamarkadan Artzibarren jasotako ahozko lekukotasunekin osatu zuen <i>Artzibarko aldaera deitu izanaren inguruan</i> (<i>ArtolaAr</i>) artikulu sorta eta Orreaga Ibarrak ondu <i>Erroibarko eta Esteribarko Hiztegia</i> (<i>IbarraH</i>) baliatu ditugu. Biak ala biak Euskara Garaikidean (EG) jasoak izan arren, BEMan jaiotako lekukoak dituzte informazio iturri.</p>
  </div>
  &nbsp;
    <h3>2.4 Ekialdeko hego-nafarrera (EkiHN)</h3>
    &nbsp;
  <div class="team-image-wrapper2">
    <img class="team-member-image" src="<?= base_url("assets/img/ekihn.png")?>">
  </div>
  &nbsp;
  <div class="gorputza">
    <p class=“gorputza”>Aezkoa ibarra hartzen duen hizkera da EkiHNa. Historikoki Baxenabarrekoaren barruan sailkatu izan da. 1955. urtean Lafonek (1955: 121) hegoaldeko goi-nafarrerarekin zenbait ezaugarri partekatzen dituela adierazi zuen, baina ez zuen hego-nafarrerara bildu. Camino izan da (1997) hizkera hau gehien aztertu duen ikertzailea eta berak hego-nafarreraren hizkeratzat hartzea proposatzen du (Baxenabarreko euskararen eragina ukatu gabe). Ekialdeko aldakia aztertzeko, lau iturri erabili ditugu: Nafarroako Gordailu Nagusiko (NGN) Bonaparte ondarean jasotako lekukotasunak, Caminok Aezkoan jasotako eleen bilduma, eta OEHko “Ae” etiketa.</p>
    <p class=“gorputza”>Bonaparte ondareko katiximak NGNko gordailu irekian eskuragarri daude<sup>5</sup> eta sei dokumentu dira:<sup>6</sup> Abaurrepeko eta Ariako bana eta Garraldako<sup>7</sup> eta Orbarako bina.</p>
    <p class=“gorputza”>Abaurrepekoak 41 zenbakia du, 1794. urtean idatzia da eta Miguel Antonio Sarioren sinadura du; gorago jartzen duenaren arabera bertako bikarioa omen zen. Horrekin batera, arkatzez “Abaurrea baja (de Abaurrea alta)” jartzen du lehendabiziko orrialdean.</p>
    <p class=“gorputza”>Ariakoak 39 zenbakia du eta 1851. urtea du idatzirik azken hirugarren orrialdearen bukaeran. “Por Don Miguel Olave” jartzen du azken bigarren orrialdean eta “Por Don Miguel Olave en Aria” azken aurrekoan, “José Loigorri" izenarekin batera. Caminok (1991a) “Sor Don Miguel Olave” irakurri zuen. Horrez gain, bi izenen atzean dauden pertsonen arrastoaren bila aritu zen, eta egindako ikerketetatik ondorioztatu zuen oso zaila dela doktrina bietariko batek idatzia izatea (ibid.: 429-433).</p>
    <p class=“gorputza”>Garraldan bi lekukotasun jaso dira (Camino 1989), NGNn lau dokumentutan banaturik dauden arren (36 zenbakia duena eta 38.a loturik daude eta baita 37. eta 42.a ere). 36. dokumentua Etxenikek, Bonaparteren laguntzaileak, egindako 38.aren kopia da, grafia egokiturik eta beste zuzenketa batzuekin. 38. zenbakia duena Javier Loperena Garraldako abadeak idatziriko doktrina da, Bonapartek 1863an Etxenikeri eskatu eta 1865eko otsailean jaso zuena. 37 eta 42 zenbakidun dokumentuek dokumentu bakarra osatzen dute: Asteteren doktrinaren itzulpena. José Minondo Garraldako irakasleak Aribeko Martin Elizondorekin idatzi zuen eta Bonapartek 1869an argitaratu zuen, <i>Le petit catechisme espagnol du P. Astete, traduit en trois dialectes basques</i> lanean, zaraitzuerazko eta erronkarierazko aldaerekin batera. 37.ak lehen zatia jasotzen du eta 42.a horren jarraipena da.</p>
    <p class=“gorputza”>Orbarako doktrinez den bezainbatean, bi dokumentu erabili ditugu, NGNan 35eta 40 zenbakia dutenak. <i>Orbarako doktrinak</i> bezala ezagutu arren, ez dirudi bertakoak direnik, baina bertan jaso zirenez, izen horrekin ezagutzen dira. Bi dokumentuen egileak eta urteak ere ez dira ezagutzen (Camino, 1991b). Nolanahi ere den, badakigu 35.a noizbait Juan Miguel Garciacelay orbaratarrarena izan zela eta 1862an Angel Pedroarena aribetarrarena. 40. zenbakia duenak, aldiz, Santiago Labayen izena du idatzirik bigarren orrialdean eta, letrakera txikiagoan, baita “joan maartin (sic)” ere.</p>
    <p class=“gorputza”>Bukatzeko, <i>CaminoAe</i> deitu dugun corpusa ere erabili dugu, Iñaki Caminok eskuzabalki utzi digun <i>Aezkoako hitzen bilduma (1982-1997) </i> lan argitaragabea.</p>
</div>  
</div>
&nbsp;
<button type="button" class="collapsible2">Lizarragak erabilitako lexikoaren banaketa hego-nafarreraren baitan</button>
<div class="content">
<div class="gorputza">
    <p class=“gorputza”>Apur bat kokatzen laguntzeko, Caminok (2004a) hego-nafarreraren berezkotzat aurkeztu zituen bost ezaugarri nagusien eta ia esklusiboak diren beste seiren aurrean Lizarraga nola ageri den erakutsiko dugu. Lexikoa albo batera utzi eta hizkuntzaren beste alderdi batzuetan murgiltzea eskatuko du horrek batzuetan, dela fonologian, aditzean edo sintaxian.</p>
    <p class=“gorputza”>Ezaugarri esklusibo eta ia esklusiboak izanik, oso eremu geografiko murritzean lekukoturiko ezaugarriez ari gara, eta pentsatzekoa da Lizarragarentzat hori ezaguna zela, hots, bazekiela bere inguruan soilik erabiliak zirela. Gauzak horrela, alderaketa honek Lizarragak bere hizkerarekiko izan zuen jarrera ezagutzen lagunduko digulakoan gaude, eta hori ere mesedegarria da lexikoa aztertzeko.</p>
</div>
  <div class="gorputza1">
    <p class=“gorputza1”><b>Hego-nafarreraren berezko ezaugarriak</b></p>
</div>

<ol>
  <div class="gorputza1">
    <li class="gorputza1">Lehen graduko erakusle plurala <i>(g)ebek</i> izatea, hauek edota alboko hizkeretako <i>ok, koek</i> eta <i>kuek/kek</i> formetatik bereiziz. Lizarraga hego-nafarrerarekin doa, <i>(g)ebek</i> bakarrik erabiltzen baitu.</li>
    <li class="gorputza1"><i>Gauren</i> lehen graduko izenordain plural indartu analogikoa. Oinarrian <i>geure</i> duen aldaera horrek bi bilakabideren ondorioz erdietsi zuen forma hori. Lehendabizi <i>-n</i> hartu zuela dirudi, <i>geuren</i> baitago dagoeneko XVII. mendean. Hala eta guztiz ere, 1729ko predikuak <i>neure, zeure</i> eta <i>gure</i> dakartza. <i>Gauren</i> aldaera erdiesteko, <i>eu > au</i> bilakabidea ere gertatu bide zen. Horren lehen adibidea Orontzen lekukotu da XVIII. Mendean, bertako doktrinan dagoeneko <i>gauren</i> ageri baita. Aitzitik, Lizarragaren garaiko Eguesibarren lehen bilakabidea gauzaturik zegoela ematen du, baina ez hala bigarrena, <i>geuren</i> erabiltzen baitu beti (<i>geure</i> ere ez da behin ere lekukotzen).</li>
    <li class="gorputza1">Iraganeko adizkietan <i>-n</i> gabeko formak erabiltzea.<sup>8</sup> Indikatiboko lehen aldiko hirugarren pertsonako aditz laguntzailea <i>-n</i> gabe darabil Lizarragak. Beriainek batez ere, baina ez beti, <i>-n</i>dun adizkiak erabiltzen ditu, forma horiek nagusi zireneko eta hego-nafarreraren berrikuntza hastapenetan zegoeneko egoera erakutsiz. Lizarragak idatzi zuenerako berrikuntza aitzinatuago zegoela ikus daiteke, forma berria nagusi da eta.</li>
    <li class="gorputza1">Alokutiboko maskulinoko <i>-t-</i> morfema erabiltzea <i>-k-</i> ordez. JMSBn ez dugu <i>xeota</i> ‘zegoan’ eta <i>xitxeidata</i> ‘zitzaidaan’ modukorik aurkitu.</li>
    <li class="gorputza1">Iraganeko ahaleko adizkietan <i>-eza-</i> gabeko adizkiak (cf. <i>zuke(a)</i> ‘zezakeen’) erabiltzea. JMSBn adibide ugari aurkitu dugu: “Konfesátzera eldu zékion jendetzearén amargárren zátia ére etzúke aditu, naiz órtan egoník gau ta egún al guzían” (1994: 86); “Aurkitu zúte án sanda ilík guruze gárren ondoán eta orzi zúte Kristioék al zukéten gisan” (1994: 97).</li>
  </div>
  <div class="gorputza2">
    <p class=“gorputza2”><b>Hego nafarreraren ezaugarri ia esklusiboak:</b></p>
  </div>
  <div class="gorputza1">
    <li class=“gorputza1”>Gorago aipatu dugun <i>eu > au</i> bilakabidea (cf. <i>auri</i> ‘euri’, ikus goiko 2. puntua), Lizarragaren lanean gauzatzen ez dena. Dirudienez, ezaugarri hori ez dago Elkanon Lizarragak idatzi zuen garaian eta ezta Bonapartek datuak jaso zituenean ere, printzeak <i>euri</i> jaso baitzuen, eta ez <i>auri</i>.</li>
    <li class=“gorputza1”>Beste hizkera batzuetan <i>-oi</i> eta <i>-oe</i> (<i>arratoi / arratoe</i> ‘arratoi') gauzatzen diren atzizkietan metatesia gertatzen da HNz. Lizarragak kasu bakarra du: <i>arrazio</i>.</li>
    <li class=“gorputza1”>Hitz hasierako <i>*j-</i> zaharraren ahoskeraz den bezainbatean, hego-nafarreraz badirudi frikari sabaiaurrekoa nagusi zela, belarraren lekukotasunak ere badiren arren (<i>jakin</i> eta <i>xakin</i>, esaterako). Grafiak argi erakusten duenez, Lizarragak [∫], [t∫] eta [x] erabiltzen ditu,<sup>9</sup> sabaikaria adierazteko <y> erabiltzen baitu (cf. yago, ayen, oyu, oyal…).</li>
    <li class=“gorputza1”>‘Aroa, aldia’ adierazten duen <i>-zutu</i> atzizkia Nafarroako erdialdetik ekialdera lekukotzen da. JMSBn zenbait adibide aurkitu ahal izan ditugu. Dena den, behinola Erronkariraino iristen zen atzizki hori ipar-Esteribarren galdua dela dirudi XX. menderako. Halaxe ikusi ahal izan dugu mendearen lehen erdian jaiotako lekukoekin, Eugin eta Iragin egin galdeketetatik heldu emaitzetan, esan baitigute ez dutela ezagutzen. Dena dela, Damaso Intzak 1974ko <i>Naparroa-ko Euskal-esaera zarrak</i> lanean jaso zuen<sup>10</sup> eta handik hartu zuen Orreaga Ibarrak 2007ko <i>IbarraHn</i> jasotzeko (s.v. <i>zarzutu</i> eta <i>-zutu</i>)<sup>11</sup>.</li>
    <li class=“gorputza1”>Pluralgile berria <i>*ezan</i> erroa duten aditz laguntzaileetan, hots, <i>-it- > -zki-</i>. Hego-nafarreratik ekialderantz Zaraitzuraino hedatzen den berrikuntza da, eta iparraldera Lapurdi eta Baxenabarrera hedatzen den arren, Zuberoan ez da erabiltzen. 1729ko predikuan ageri den ezaugarria da, eta Lizarragak ere salbuespenik gabe erabiltzen du.</li>
    <li class=“gorputza1”>Sail honetako azkeneko ezaugarria <i>kaso</i> partikularen erabilera da. Kausazko perpausak erabiltzerakoan <i>-(e)n kasos</i> edo <i>-(e)la kaso</i> eta enparauak erabiltzen ditu Lizarragak, hego-nafarreraren eremuan gutxi asko lekukotzen den egitura berbera. Hala ere ez da erabiltzen duen forma bakarra. Hurrengo adibidean antzeman daitekeenez, pasarte bera itzultzeko bi estrategia desberdin erabiltzen ditu:</li>
  </div>
  <div class="aipua">  
    <p class=“aipua”>- “Sandac seréna, eztút il orren sémea nic, bai, bere itsutasúna cela cáso, ilaraci dú ene guardiaco Aingiruac” (1994: 394).</p>
    <p class=“aipua”>- “Erranzue sandac, nic eztút il, baicic bere atrevénciac. Libre atradire gañarácoac; baña onéc errespetoricgábe nainindue borchátu: orgátic ilaracidú ene Ainguiru guardiácoac” (1994: 122).</p>
  </div>  
</ol>
  <div class="gorputza">
  <p class=“gorputza”>Ikusi berri ditugun ezaugarri horiek Lizarragak nagusiki hego-nafarreraz idatzi zuela erakusten dute. Bost ezaugarri esklusiboetatik lau eta ia esklusiboak diren seietatik bost ageri dira JMSBn. Lekukotu ez ditugun 4. eta 6. ezaugarrietatik, lehena forma alokutiboen agerpenen urriarekin loturik egon daiteke, eta bigarrena bilakabidearen geografiarekin loturik dago, Eguesibarren ez baitzen <i>eu > au</i> gertatu.</p>
</div>
</div>
&nbsp;
<section>
<button background-color= #000 type="button" class="collapsible1" background-color= #000>Oharrak:</button>
<div class="content">
<ol start="0">
  <div class="gorputza1">
    <li class="gorputza1">Hemen jasotako informazio guztia hemendik atera dugu: Iriarte, I., 2022, <i>Joakin Lizarragaren lexikoaren azterketa</i>, Nafarroako Gobernua eta Euskaltzaindia: Iruñea.</li>
    <li class="gorputza1">Bonapartek <i>gibel</i> eta <i>atze</i> jaso zituen Goñin.</li>
    <li class="gorputza1">Testuaren inguruko xehetasun gehiagorako ikus Reguero (2019: 490-536).</li>
    <li class="gorputza1">“Domingo tercero de quaresma año 43” (Reguero, 2019: 331).</li>
    <li class="gorputza1">Esteribarko Eugi eta Iragi izan ezik, ibarreko gainerako herriak.</li>
    <li class="gorputza1">https://www.navarra.es/home_es/Temas/Turismo+ocio+y+cultura/Archivos/Programas/Archivo+Abierto/Buscador/?Ambito=FONDO+BONAPARTE&TextoLibre=</li>
    <li class="gorputza1">Abaurrepekoa 41. zenbakiduna da, Ariakoak 39.a du eta Orbarako biak 35. eta 40. zenbakia dutenak dira.</li>
    <li class="gorputza1">Egiazki lau dokumentu desberdin balira bezala sailkaturik daude, hots, 36, 37, 38 eta 42. zenbakia duten dokumentuak dira. 42 zenbakia duen dokumentua 37aren jarraipena da, eta, hortaz, dokumentu bakarra osatzen dute. Era berean, 36. zenbakia duen dokumentua Etxenikek Bonaparteri bidaltzeko egindako 38.aren kopia da; hori dela eta, dokumentu bakartzat hartu dugu hori ere (Camino, 1989).</li>
  	<li class=“gorputza1”>Gure lanaren ardatza lexikoa den heinean, ez ditugu aditz nagusiak besterik aztertu, baina hizkera definitzaileak diren aldetik, ezaugarri hauen kasuan aztertzea merezi duela iruditu zaigu; esan dugun bezala, Lizarragaren jokaera hobeki ezagutzeko balioko duelakoan.</li>
    <li class=“gorputza1”>[∫]: chsaquin ‘jakin’; [t∫]: chostatu ‘jostatu’; eta [x]: joan.</li>
    <li class=“gorputza1”>“Aurzutue ta zarzutue, beti aur-kontue” (1974: 146).</li>
    <li class=“gorputza1”>Ibarrak “Intza Est.” etiketa ezarri zion zarzutu hitzari, Intzak Esteribarren jasoa zela adierazteko; eta “Intza Mez.” -zutu atzizkiari, Mezkirizkoa zela adierazteko. Nolanahi ere den, Intzak jasotako adibidea dakar bi sarreretan: “aurzutue ta zarzutue, beti aur-kontue” (ikus aurreko oharra). </li>
</div>
  </ol>
  

</div>
        </section>

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
var coll = document.getElementsByClassName("collapsible1");
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
var coll = document.getElementsByClassName("collapsible2");
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
&nbsp;&nbsp;&nbsp;&nbsp;
</body>
</html>
<?= $this->endSection(); ?> 
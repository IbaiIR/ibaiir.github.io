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
  max-width: 600px;
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
  width: 100%;
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

</style>
      <title> <?= $title; ?> </title>

</head>
<section>
 <div class="responsive-container-block">
  <p class="text-blk team-head-text">
  <?= $header; ?> <sup>0</sup>
  </p>
</div>
<div class="team-image-wrapper3">
    <img class="team-member-image" src="<?= base_url("assets/img/Lizarraga.png")?>">
  </div>
  &nbsp;
<body>


  

<button type="button" class="collapsible">I. Gizarte eta kultura egoera</button>
<div class="content">
<div class="gorputza">
    <p class="gorputza">Atal honetan, Lizarragaren garaiko gizarteari, egoera politikoari eta kultur joera nagusiei begiratuko diegu, hari nagusitzat hizkuntza harturik. Lakarrak (1997) proposaturiko periodizazioari jarraituz, Lehen Euskara Modernoaz (LEM) arituko gara, garai horretan idatzi baitzuen Lizarragak.</p>
    <p class="gorputza">LEMk 1745-1896 arteko garaia hartzen du. Bestela esan, Larramendiren <i>Hiztegi Hirukoitza</i> (HH) argitaratu zen urtean hasi eta Azkueren <i>Euskal Izkindea</i>rekin bukatzen da. Guk Lizarragaren bizitzaren aldiari erreparatuko diogu nagusiki (1748-1835), eta era berean, ez dugu eremu euskaldun guztia aztertuko, Nafarroaz eta bereziki hego-nafarreraren eremuaz ariko baikara.</p>
</div>
<h3><b>1.1 Gizarte antolaketa</b></h3>
<div class="gorputza">
  <p class="gorputza"> XVII. mende bukaeratik XIX.aren hasierara doan denbora tarteari Argien Mendea esaten zaio. Garai hartan Ilustrazioa deitzen den mugimendu intelektuala zen nagusi, batez ere Europan, baina baita Ameriketako kolonietan ere. Mugimendu horrek aurrerapen ugari ekarri zizkion gizarteari (Burke, 2004), esate baterako higienea eta osasungintza, derrigorrezko eskolatzea etab. Garai horretan baina, ideien eta mundu ikuspegi desberdinen arteko talka nabarmena gertatu zen (Iáñez, 1990: 7-13), eta horrek ordura arte elkarbizitza arazorik ez zuten elite burgesen eta herriaren arteko konfrontazioa eragin zuen Euskal Herrian.</p>
  <p class="gorputza">	Kutsu herrikoia zuen ororen kontra jo zuten eliteek: dantzak, ohiturak, sinesmenak… Eliteen parte izan arren, Elizako kide guztiak ez ziren iritzi berekoak, eta Larramendik adibidez, eztabaida ugari izan zituen bere jarraitzaileekin dantzak zirela eta, batez ere Mendibururekin. Larramendiren ustez, ez ziren herritarrek egin zezaketen okerrena eta defendatu ez arren, jarrera malguagoaren aldekoa zen (Cor: 204 eta hur.). Mendiburuk aldiz, guztiz arbuiagarritzat zituen eta Lizarraga ere iritzi berekoa zen, 1800. urte inguruan idatziriko sermoi batean adierazi zuena ikusirik:</p>
  <p class="aipua">Eta gizónki ta emastékien danza góiek errietán Patrono Sanduen jaietán nondik etorri dire? Nork paratu [di]tú? Jangoikoak, ez; elizak ere ez; Zeruko Aingeruek ere ez. Nork bada? Aditzen nago diotena zenbaitek berén kolkoan. Eztákit zierto, baña sospetxatzen dút (Satrustegi, 1976: 222).<sup>1</sup></p>
  <p class="gorputza">Kontu horretan eta beste batzuetan zuen iritzia adierazi izanak arazoak ekarri zizkion Larramendiri, eta horrenbestez bere egitasmoari. Elizako buruen eta bere ondoan hezitako apaiz gazte askoren ideiekin bat ez etortzearen ondorioz proiektuak ez zuen ahal bezainbateko dimentsiorik eta iraupenik lortu.</p>
  <p class=“gorputza”> Kontu horretan eta beste batzuetan zuen iritzia adierazi izanak arazoak ekarri zizkion Larramendiri, eta horrenbestez bere egitasmoari. Elizako buruen eta bere ondoan hezitako apaiz gazte askoren ideiekin bat ez etortzearen ondorioz proiektuak ez zuen ahal bezainbateko dimentsiorik eta iraupenik lortu.</p>
  <p class=“gorputza”>	Orduko Euskal Herrian, hizkuntza gizarte maila bereizteko erabili zen estereotipo honek lagundurik: gaztelania edo frantsesa eliteek, jende ikasiak eta boteretsuek erabiltzen zituzten eta euskara herritarrek. Horrela, eliteetako kideen artean euskara jende xume, ezjakin edo are basatiena zelako ustea zabaldu zen eta gurasokeriaz egiten zioten erreferentzia herrietan bizi zen jende eskolatu gabeari. Esaterako, Mogelek herritar nekazariak hiriguneetan zabaltzen eta hedatzen ari zen mundu modernoan egokitu ahal izateko asmoz idatzi zuen bere <i>Erakasteak</i> lana.</p>
<p class=“gorputza”>	Erdarak ziren, hortaz, giltza eta baldintza gizarte maila goragoa erdiesteko eta horrek bere ama hizkuntza zekienik ere ukatzera eraman zuen euskaldun asko, euskaraz jakiteak bere helburua lortzeko ekar ziezazkiokeen arazoak saihesteko, dagoeneko Larramendik aipatu bezala (HH: LIV-LVII). Erdarek zuten balio instrumental handiak eta euskararen beraren estigmatizazioak eragin izugarria izan zuten Araba eta Nafarroako egoera soziolinguistikoan (§2.1.2), eta horrela, bi belaunalditan familia asko elebakar euskaldun izatetik elebakar erdaldun izatera igaro ziren.</p>
<p class=“gorputza”>	Horrez gain, euskara gramatikarik, egiturarik, sintaxirik eta funtsean edozein hizkuntzak duen ezaugarririk gabeko hizkuntza basatia zela esaten zuten hizkuntza handietan idazten zuten jende ikasietariko askok (Mayans, Ossorio…). Horrek ia arrakalatu ezinezko murru zurruna ezarri zion euskarari gizartearen hainbat esparrutara hedatzeko orduan. 
<p class=“gorputza”>	Euskarak, hortaz, bi auzi zeuzkan aurrean: batetik, hizkuntza nagusien aldekoek aldarrikatzen zuten diskurtso gutxiesleari aurre egitea eta bestetik euskarari berari estatusa ematea. Lehenarekin loturik, euskara gainerako hizkuntzak bezalakoa zela, hots, gramatika zuela frogatu behar zen. Horretarako, hizkuntza nagusiak edo “kultur hizkuntzak” deskribatzeko erabiltzen ziren garaiko gramatika parametroetan sartu beharra zegoen. Ideia horren baitan sortu ziren Urteren <i>Gramaire Cantabrique Basque</i> (1712; 1900), Harrieten <i>Gramatica escuaraz eta francesez composatua, francez hitzcunça ikhasi nahi dutenen faboretan</i> (1741) edota Perotxegi (1731) eta Azpitarteren (1774) apologiak. Horrez gain, betebehar modernoagoetan aritzeko lagungarri izanen zen lexikoa ere eskura jarri behar zitzaien euskara goragoko eginkizun horietara egokitzen saiatuko zirenei; gaitasun hiztegi bat behar zen.</p>
<p class=“gorputza”>	Hiztegi hori 1745ean iritsi zen, Manuel Larramendi andoaindarraren eskutik. Hiztegia argitaratzerako baina, hainbat urrats emanak zituen. Lehenik euskararen apologia idatzi zuen, <i>De la antiguedad y universalidad del Bascuence en España </i> (1728)<sup>2</sup>; hurrengo urtean, euskarak gramatika arauak (artea) zituela frogatzen zuen lana kaleratu zuen, eta <i>El imposible vencido: Arte de la lengua vascongada</i> (1729) izenburua jarri zion, euskara egiturarik gabeko basatien hizkuntza dela esaten zutenei aurre egiteko-edo. Eta azkenik, <i>Hiztegi Hirukoitza</i> (HH) edo <i>Diccionario Trilingüe del Castellano, Bascuence y Latín</i> (1745) iritsi zen.</p>
<p class=“gorputza”>	Larramendirena bezalako egitasmoak aurrera eramateko saiakera gutxi batzuk ezagutzen dira, besteak beste, Bidegarairena (1675) eta Etxeberri Sarakoarena (1718ko <i>Lau-Urdiri gomendiozco carta</i>, edo gutunean adierazi bezala), baina andoaindarra izan zen egitasmoa arrakastaz burutu zuen bakarra. Horrez gain, Mayans eta abarrek botatako euskararen kontrako erasoei erantzuteko baliatu zituen apologia, gramatika eta hiztegia, hiruretan haien ideiak aipatu eta kontra egiteko argumentuak ematen baititu.</p>
</div>
<h4>1.1.1 Garaiko gudak </h4>
<div class="gorputza">
<p class=“gorputza”>	LEMn bi gerrate izan ziren Nafarroan, Frantziako iraultzaren (1789-1799) oihartzunen eraginez: Konbentzioarena (1793-1795) eta Independentziarena (1808-1814). Lehenak ez zuen Elkanon eragin zuzenik izan Pirinio inguruko herrietan nabaritu baitzen gehienbat. Hala ere, Lizarragak elizako ornamenturik onenak Erriberara bidali zituen badaezpada. Bertan bi urtez egon ziren, 1795eko uztailaren 22ra arte, Basileako ituna sinatu baitzen orduan.</p>
<p class=“gorputza”>	Independentzia gerran aldiz, muturreko egoerak bizi izan zituzten Iruñerri inguruan, batez ere bukaera aldera. 1808ko otsailaren 9an iritsi zen Frantziako armada Iruñera eta ekainaren 6an Jose Bonaparte Espainiako errege izendatu zuten. Hura errege izendatzearekin batera, erresumako eskualde guztietan tropa frantsesak mantentzeko zergak ezarri ziren; Nafarroan gainerako eskualdeetan baino altuagoak, “nafarrak mugiarazten zituen izpiritu txarragatik” (Apecechea, 1978: 154; itzul.).</p>
<p class=“gorputza”>	Ezarritako zergek zekarten zama astuna alde batera utzirik, Elkanon eta Iruñerrian oro har, herritarrek ez zuten aparteko arazorik izan gudaren hasierako urteetan. Hala ere, egoerak okerrera egin zuen denborak aurrera egin ahala. Nafarroako herri askotan nekazari eta abeltzainak egoera benetan larrian utzi zituzten hainbeste urtez jasandako zerga handiek. Hori gutxi balitz, soldaduek gero eta maiztasun handiagoz herrietara sartu eta nahi zutena hartu eta egiten zuten.</p>
<p class=“gorputza”>	1812-13 urteetan Iruñe inguruko herrietan egoerak nabarmen egin zuen okerrera, guda frontea bertara mugitu baitzen eta soldaduak askoz ere jarrera bortitzagoa erakusten hasi baitziren: arpilaketak bata bestearen atzetik heldu ziren eta norbaitek aurre egiten bazien, bertan akabatzen zuten (ibid.: 159).</p>
<p class=“gorputza”>	1813ko uztailaren 21ean frantsesek espainiar eta ingelesen aurka galdu zuten Gasteizen eta Pirinioetaraino atzera egin behar izan zuten. Ihesaldian, besteren artean, Atarrabiako bikarioa hil zuten, mihia moztu ondoren, eta inguruko herrietan sekulako sarraskia egin zuten. Uda horretan bertan, aliatuak Iruñera iritsi ziren frantsesen atzetik eta herritarrek bakea laster iritsiko zela eta uzta salbatzen ahalko zutela pentsatzen hasi ziren. Oso bestela izan zen, ordea.</p>
<p class=“gorputza”>	Aliatuen eta frantsesen arteko muga aurrera eta atzera ibili zen Iruñe inguruan eta, txandaka, alde bateko zein besteko soldaduak bertako nekazarien bizkar bizi ziren lurra irabazi edo galdu ahala. Hala ere, Olorizek (1910: 280-281) jasotakoaren arabera, askotan makurragoa izan zen “laguntzera” heldu aliatuen jarrera frantsesena berena baino: </p>
</div>
<div class="aipua">
<p class=“aipua”>¡Espectáculo doloroso! Sin autorización de los propietarios, sin más ley que la fuerza, sin género alguno de consideración, como si operáran en país enemigo, los soldados españoles y las tropas aliadas invadían los campos cubiertos de mieses […] segaban en verde los cereáles […] y luego de agotar aquellas subsistencias, exigían de imperiosa manera y en brevísimo plazo nuevos aprontos al desdichado pueblo, al pueblo que acababan de sumir en la indigencia.</p>
</div>
<div class="gorputza">
<p class=“gorputza”>	Elkanoraino ere iritsi zen gudaren oihartzuna. Iruñetik heldu tropak 1812ko irailaren 3an iritsi ziren herrira lehen aldiz. Ordutik 1813ko ekainera bitarte, bospasei aldiz utzi behar izan zuten herria bertako biztanleek, soldaduei zieten beldurragatik mendira ihes egiten zuten eta. Guda bukatu ondoren, Elkano oso egoera larrian geratu zen: herritarren gehiengoa txiroa zen eta ez zuen maileguei aurre egiteko gaitasunik. Antzeko egoera izan zen Nafarroako herri askotan, Pirinio inguruan batez ere.</p>
</div>
<h4>1.1.2 Eliza</h4>
<div class="gorputza">
<p class=“gorputza”>	Elizaren baitan aldi nahasia izan zen LEM. Gertakizunik esanguratsuenetarikoa jesuita edo josulagunen kanporaketa izan zen. 1766aren hondarrean, Carlos III.a Jesuitak Espainiatik kanporatzeko ahaleginean hasi zen eta 1767ko otsail bukaeran lortu zuen horretarako baimena (Fernández, 2014: 170-172). Urte bereko apirilerako, Arandako kondeak dena prest zuen kanporaketa gauza zedin (Fernandez, 2002: 24-34). Lizarraga momentu horretan Jesuitekin ikasten ari zen, baina gorabehera askoren ondoren konpainia utzi eta Elkanora itzultzeko erabakia hartu zuen (§3). Gauzak horrela, 1767an euskararen alde hainbeste egin zuen konpainia Espainiako Erresumatik kanporatua eta Italiara erbesteratua izan zen.<sup>3</sup> Hori baino lehenago Portugaldik (1759) eta Frantziatik (1762) kanporatuak izan ziren eta geroago Napolitik (1769), Errusiatik  (1814) eta beste hainbat lekutatik (Garrido, 1881: 233 -318)
<p class=“gorputza”>	Bestalde, Independentzia gerraren baitan (1808-1814), Elizarekin loturiko gertakari esanguratsu ugari jazo ziren. 1809an ordena erlijioso askoren egoitzak armadek okupatu eta bertan bizi zirenak kaleratu zituzten<sup>4</sup>. Gerra bukaturik eta urte batzuk geroago, 1820ko hirurteko liberalean, Fernando VII.ak ere zenbait ordena erlijioso esklaustratu zituen:<sup>5</sup></p>
</div>
<div class="aipua">
<p class=“aipua”>Art. 1.º Se suprimen todos los monasterios de las órdenes monacales; los de canónigos regulares de S. Benito, de la congregación claustral Tarraconense y Cesaraugustana; los de S. Agustín y los Premonstrarenses, los conventos y colegios de las órdenes militares de Santiago, Calatrava, Alcántara y Montesa; los de la de S. Juan de Jerusalen; los de la de S. Juan de Dios y de betlemitas; y todos los demas hospitalarios de cualquiera clase (BOE: 1820/10/25)).</p>
</div>
<div class="gorputza">
<p class=“gorputza”>	Bi kaleratze horiek Nafarroako errealitate soziolinguistikoa aldatu zuten. Kalean geratu ziren erlijioso erdaldun elebakar horietariko askok herri euskaldunetan ikusi zuen bere burua, eta tokian tokiko apaizekin harremanetan hastearekin batera, predikazioan gaztelania gehiago erabiltzen hasi ziren (Lekaroz 2014).</p>
	<p class=“gorputza”> Beste aldaketa batzuk ez ziren biolentziarekin lotuak izan. Horietariko batzuk apaizen prestaketari eta predikazioari eragin zietenak izan ziren. Elizak bere boterea eta jendearengan zuen kontrol ideologikoa arriskuan ikusi zituen Frantziako iraultzak lehenik, eta Errepublikak ondoren Erregimen Zaharrean betirako ezarritakotzat zeuden balore gehienak kolokan jarri zituztenean. Kontrol hori ziurtatzeko eskura zuen tresnarik eraginkorrena predikazioa zen eta berebiziko garrantzia hartu zuen. Horrekin batera, zenbait herritako egoera soziolinguistikoak hartaraturik, hizkuntza gutxituak ere begi puntuan jarri zituen. Kasu batzuetan euskararen mesedetan izan zen, apaizek euskara lantzera jo zuten eta. Beste batzuetan aldiz, euskararen kalterako izan zen, apaizek nahiago izan zutelako herritarrei erdara irakatsi.</p>
<p class=“gorputza”>	Ordura arte, herri bakoitzeko apaizgaia bertakoa edo ingurukoa izan ohi zen eta bertako apaizak hezi ohi zuen. Horren ondorioz, eliza asko prestakuntza makaleko bikarioen eskuetan geratu ziren, eta horrenbestez, predikazioa ez zen behar bezalakoa.</p>
<p class=“gorputza”>	Munduko hainbat lekutan bezala, Euskal Herriko aunitz lekutan predikazioaren gaineko kezka handia zabaldu zen XVIII. mendean. Zenbait tokitan predikazioaren maila apala hizkuntzari egozten zitzaion eta hartara hizkuntza lantzeko materialak sortu ziren. Ez zen hori kezka bakarra ordea, beste zenbait lekutan edukiari buruzko eztabaida ugari egon baitzen. 1777. urtean apaizgaitegia eraiki aurretik, handia zen Iruñeko gotzainak eta beste zenbait elizgizonek zuten predikazioarekiko kezka, bai hizkuntzari eta baita edukiari zegokionez ere. Agindu pastoral ugari kaleratu zituzten eta eztabaida sutsuak ere piztu ziren. Egoerari konponbidea emateko, Erromako katiximaren bertsio bat prestatu zuten predikazioa hobetu eta bide batez eliztarrak hezteko. Apaiz asko material hori erabiltzearen kontra agertu zen beren gaitasun intelektualari egokitu gabekoa zela argudiatuz. Horren aurka, Irigoyen y Dutari Iruñeko gotzainak esan zuen aitzakia horrek ez zuela inongo baliorik eta baldin eta arazorik bazegoen, hura ez zela katiximaren maila goragatik, apaizaren gaitasun apalagatik baizik. Ateratako idatziaren bukaeran, gotzainak katixima erabiltzen ez zutenen aurka jotzeko asmoa adierazi zuen, lanetik bota eta are eskumikatuko zituela mehatxu eginez.</p>
<p class=“gorputza”>	Argi dago, hortaz, herritarrak doktrinatzeko hizkuntza eta eduki egokiak beharrezkoak zirela ikusi zuen orduan Elizak eta, beti euskararekiko maitasunagatik izan ez arren, prediku landuak, hizkuntza egokia erabiliz eta eliztarrek ulertzeko moduan emateko erabakia hartu zuen. Aginduak ez ziren beti bete, batzuetan utzikeriagatik eta besteetan prestaketa faltagatik. Etorkizunean apaiz izanen zirenen heziketa hobetzeko, zenbait apaizgaitegi sortu ziren azkenean, tartean Iruñekoa 1777an.</p>
<p class=“gorputza”>	Apaizgaitegi berriek baina, ez zuten bere horretan euskarak gizartean zuen estatusean eragin zuzenik izan. Aitzitik, apaiz euskaldun askok beren lana euskaraz baino, erdaraz errazago egitea ekarri zuen, heziketa latinez edo gaztelaniaz jasotzen zutelako. Gaztelania erabiltzeko joera nabarmenagoa zen berea ez zen herria egokitzen zitzaien apaizengan (Lekaroz, 2014). Egoera hori aldatzeko ahalegina egin zuten Larramendik eta haren jarraitzaileek. Esaterako, andoaindarrak <i>Corografian</i> “vuelvo a los predicadores vascongados. Si quieren predicar con limpieza y fruto, aprendan bien el dialecto del pais que predican” (Cor: 260-261) esaten die apaiz horiei. Are gehiago, nagusiki nor bere euskalkian egin arren, besteena ere baliatzeko dei egiten die: “Además de ésto deben aprender el vascuence de los demás dialectos […]” (ibid.). Dei berbera egin zuen Kardaberazek ere: “Alper alperrik leiatzea da: animen onerako, Bizcaiko, Nafarroako, ta Gipuzkoako iru Dialektotan eskribitzea, guztiz premiazko, ta gauza txit bearra da” (EBO: 63).</p>
<p class=“gorputza”>	Ez dugu ahaztu behar Elizako kideak ere elitearen parte zirela eta horrek eragina zuela euskararekiko zuten ikuspegian. Ikastetxe berri horietan gainera, eremu euskaldunetako ikasleak eremu erdaldunekoekin elkartzen ziren eta horrek ere eragina izan zuen, euskaldunek kasu askotan beren hizkuntza ahaztu edo erabiltzeko erraztasuna galdu baitzuten. Gauzak horrela, ezin daiteke esan Elizak euskararekiko jarrera bat eta bakarra izan zuenik, herriaren eta apaizaren arabera ezberdin jokatzen baitzuen. 
<p class=“gorputza”>	Esaterako, sermoietan erabiliko zuten materiala prestatu beharrean, eremu euskaldunetan predikatzen zuten apaizetariko askok bat-batean itzultzen zuten gazteleraz edo latinez idatzirik zuten materiala, entzuleei diskurtso ulertezin bat eskainiz: </p>
</div>
<div class="aipua">
<p class=“aipua”>[N]o se atreverían a hablar de repente en latín […] pues con qué vergüenza se atreven a hacerlo en vascuence? Sóla la demasiada piedad, y devoción de los pueblos vascongados<sup>6</sup> pudiera sufrir con paciencia semejantes sermónes en que sólo se oye un barbarismo continuado, más latin y castellano, que vascuence, solecismos a cada paso, que no los ofenden, como si solo en latin hubiera solecismos. Qué repetir! Qué trabucarse! Qué no atinar con las voces del vascuence oportunas! Qué invertir conjugaciones y tiempos! Parece, que están haciendo burla del auditorio, de la Iglesia y de la palabra de Dios: y luego tienen el desahogo de decir que no da más de sí el vascuence (HH: XLI). </p>
</div>
<div class="gorputza">
<p class=“gorputza”>	Beste toki batzuetan kanpotarrak aitzakiatzat erabilita gaztelaniaz predikatzen zen. Hala zen XVIII. mendean euskaldun ia elebakar zen Urraulgoiti ibarrean adibidez (Jimeno Jurio, 2008: 450-451): erromeria egunetan eta eliztar asko elkartzen ziren egunetan, gaztelaniaz predikatzen zen “aunque la obligación es de predicar en vascuence por ser este valle vascongado”, eta arrazoiak “por concurrir forasteros de pueblos romanzados” edota “porque no siempre se halla orador vascongado” ziren.</p>
<p class=“gorputza”>	Dena dela, esan dugun bezala, Elizak harturiko jarrera oso ezberdina izan zen leku batetik bestera, baita ibar beraren barnean ere. XVIII. mendeko Eguesibar horren adibide ezin hobea da: Lizarragak Elkanon 1771-1835 urteen artean euskaraz eta ahalik eta modu egokienean predikatzen zuen bitartean, hamar kilometrora dagoen Badostainen (Eguesibar), Andres Martín Uztarrozeko erronkariar euskaldunak gaztelania erabiltzen zuen 1802-1821 aldian; euskara elebakarrei dotrina erakusteko bakarrik erabiltzen zuen (Lekaroz 2014). Egues herrian ere, Juan Agustin de Egues apaizak euskaldunei dotrina gaztelaniaz ikasarazi zien 1814-1820 artean, baita hizkuntza ulertzen ez zuten agureei ere. Iruñeko Uharten jaioa zen, baina gaztaroa Tuteran igaroagatik euskaraz aritzeko erraztasuna galdua zuen eta nahiago zuen gaztelaniaz egin (Jimeno Jurio, 2007, 363).</p>
<p class=“gorputza”>	Oso bestelakoa izan zen Gipuzkoako jesuitek eta frantziskotarrek euskarari prestigioa emateko eta herritarrak Elizaren ideien arabera hezteko egin zuten ahalegina. Garai hartan, ordena erlijiosoetako kideak misioak egiten aritzen ziren Euskal Herriko luze-zabalean. Esaterako, Mendiburu, Iruñeko Anuntziada ikastetxean gazteak hezteaz gain, herritarrak kristautzeko lanetan aritzen zen Nafarroan barrena (Pérez, 2008), ohitura zaharrak alde batera utzi eta erlijio kristauaren arauei jarraituz bizi zitezen.</p>
<p class=“gorputza”>	Frantziskotarren sermoietan hobekuntza nabarmena sumatu zuela adierazi zuen Larramendik bere <i>Corografian</i> (1882[1754]: 259), eta gerora, haien predikazioaren kalitatea eta ospea zela eta, Zarauzko frantziskotarren komentua predikatzaileak hezteko mintegi bihurtu zuten. Bertara joaten hasi ziren eremu euskaldunean (ez Gipuzkoan soilik) aritzen ziren misiolari ugari: frantziskotarrak, jesuitak, karmeldarrak, etab.</p>
<p class=“gorputza”>	Esan dugun bezala, orduko hartan, misioei eta dotrina irakasteari garrantzia handia eman zitzaien. Hain egiteko larria ongi betetzeko lanabesak prestatzeko beharra ikusi zuen Larramendik, eta halaxe aipatu zuen bere lan guztietan, gramatikan esaterako: </p>
</div>
<div class="aipua">
<p class=“aipua”>Baina dagoeneko metododun artea eta arauak badituenez, eta jainkoak hala nahi badu, aurrerago argitaratuko den hiztegi bat ere, […] predikari, misiolari, apaiz jaun eta arimen ongizateaz arduratzen diren beste zenbaitek ere beren egitekoa betetzen ahalko dute (1729: hitzaurrea; <i>itzul.</i>).</p>
</div>
<div class="gorputza">
<p class=“gorputza”>	Predikazioa hobetzeko prestaturiko tresnak argitaratu eta zabaltzeko ordea, Elizako kideen onespena eta babesa behar zuen; hots, aldaketaren alde egiten zutenekin bat egin eta gainerakoei euskara erabili eta lantzeak merezi duela sinestarazi. Horretarako hainbat bide erabili zituen: euskara jainkoak Babelen sortu hizkuntzetarik bat dela eta Tubalek Iberiar penintsulara ekarri zuela; jainkoak sortu hizkuntza izanik gainerakoek dituzten bertute eta dohain berak dituela; jende ikasiak ere erabiltzeko modukoa dela; eta ikasteko ere balio duela aipatu zituen besteak beste.</p>
<p class=“gorputza”>	Andoaindarraren proiektua batez ere erlijio ordenetako kideek jarraitu zuten lehendabiziko urteetan. Hasieran, Josulagunak izan ziren nagusiki eta predikazioan laguntzeko materiala sortzeko lanean hasi ziren; nolabait, hegoaldeko tradizio idatziari ekin ziotenak direla esan daiteke (Salaberri, 2002: 126). 1745ean, Larramendik bere HH argitaratu zuen urtean, Kardaberaz, Mendiburu eta hirurak Loiolan bizi ziren elkarrekin eta bi horiek izan ziren andoaindarraren ideien jarraitzaile eta hedatzaile nagusi eta ezagunenak. </p>
<p class=“gorputza”>	Egitasmoak, ordea, josulagun ez ziren askorengan ere ilusioa piztu zuen. Arakistain karmeldarrak, esate baterako, proiektua aberasteko hitz zerrenda bat bidali zion 1746an Erronkarin jasotako hitzekin eta hiztegian zuzendu beharreko akatsak aurkitu zituela esanez (Fita, 1880: 41-91). Horrekin batera, behar zuen guztian laguntzeko eskaini zion bere burua, eta apaizen jarrera ere gaitzetsi zuen. Alfertzat zeuzkan, eta gaztigatu zion euskara hobea erabiliko bazuten, bidea konpainietako kideek ireki beharko zutela, prestigioa eman eta gero, agian, atzetik jarraituko zietela: 
</div>
<div class="aipua">
<p class=“aipua”>Pero porque los clérigos sólo se moverán a ello por el punto y emulación honrosa, el primer móvil son los religiosos para introducir su mayor pureza y elegancia, porque si ésos dan en picarse de cultos y elegantes, no faltarán otros que los quieran imitar (Fita, 1880: 66).</p>
</div>
<div class="gorputza">
<p class=“gorputza”>	Dena dela, Elizako goi karguek kaleraturiko aginduetan jasotakoaren arabera, oro har apaizek ez zuten predikazioa hobetzeko ahalegina egiteko borondate handirik erakutsi, ez hizkuntzari ez eta edukiari dagokionez ere. Hala ere, gorago ikusi dugun bezala, askotariko jarrerak atzeman daitezke herriaren eta apaizaren arabera eta gutxi izanagatik ere, ez dira alde batera utzi beharrekoak. Lizarragaz gain, Gandara gernikarrak aipamen berezia merezi du. Berari buruzko informazio askorik ez dagoen arren, 1743an “Protonotario Apostólico, Presbítero Beneficiado de esta Villa de Gernika” (Arana Martija, 1984: 505) zela badakigu. 1764an gabon kanta batzuk idatzi zituen eta Larramendiri bidali zizkion bere iritzia ezagutu nahi zuelako, gureganaino iritsi diren elkarren arteko gutunek erakusten duten bezala (Kaltzakorta, 1998).</p>
</div>
<h4>1.1.3 Administrazioa</h4>
<div class="gorputza">
<p class=“gorputza”>	Administrazioko garai horretako dokumentu guztiak erdaraz idatziak dira, eta euskara zeharka besterik ez da ateratzen. Epaitegiei dagokienez, bai Elizarenean eta baita justizia epaitegian ere, bi txandatan hartzen ziren deklarazioak Nafarroan: batean erromantzez eta bestean euskaraz. Euskarazko txanda hori herritarren gehiengoa euskaldun elebakarra zen herrietan (<i>vascongado</i>) eskaintzen zen soilik. Herri horietako komisario plaza lortzeko, hortaz, ezinbesteko baldintza zen euskaraz jakitea.</p>
<p class=“gorputza”>	Komisario erdaldunak eremu euskalduneko zati bat bereganatzen saiatu ohi ziren, bertako herritarren gehiengoa gaztelania ulertzeko gai zela esanez. Hala ere, Agoitzen 1793an adibidez, plaza eskuratzeko aurkeztu zen aetz batek euskaraz zekiela adierazi zuen eskaera orrian, plaza eskuratzen lagunduko ziolakoan (Jimeno Jurio, 1998: 79).</p>
</div>
<h4>1.1.4 Eskola</h4>
<div class="gorputza">
<p class=“gorputza”>	Atal honen hasieran aipatu dugun bezala, Ilustrazioak, beste gauza batzuen artean, derrigorrezko eskolatzea ekarri zuen; Nafarroan 1780-81ean. Horrek kasu askotan ez zion euskarari mesederik egin, eskola izan baitzen erdara herrian sartu, eta euskara galtzearen eragile nagusia. Agoitzen, esaterako, 1790ean haurrek debekaturik zuten eskolan euskaraz egitea; etxean, kalean eta elizan erabiltzen zuten arren (Jimeno Jurio, 2008: 436). Honakoa idatzi zuen Gorraizko abadeak 1821ean eskolari buruz: </p>
</div>
<div class="aipua">
<p class=“aipua”>[E]s de naturaleza vascongada [el pueblo], y se hablaba mas vascuenz que castellano, hasta que se puso maestro de escuela, que hace como diez y seis años, desde cuyo tiempo se a fomentado la lengua castellana y se hablan ambas (Jimeno Jurío 2007: 358).</p>
</div>
<div class="gorputza">
<p class=“gorputza”>	Geroago ikusiko dugunez (§2.2.1), Apececheak jasotakoaren arabera (1978: 31), 1791. urtean Elkanon eskola bat zegoen,<sup>7</sup> eta hura zen Eguesibarko bakarra. Lekarozek ordea (2014) ibarreko lehena Badostaingoa zela dio, 1805 inguruan irekia eta Gorraizko abadea eskola horri loturik ematen du. Ezin izan dugu jakin Elkanoko eskolan gaztelania edo euskara erabiltzen zuten, baina litekeena da gaztelaniaz egitea.</p>
</div>
<h3><b>1.2 Argitalpenak </h3></b>
<div class="gorputza">
<p class=“gorputza”>	Euskaraz inprimaturiko lan gutxi ezagutzen ziren LEMaren hasieran. Larramendik ezagutzen zituen guztiak zerrenda batean eman zituen HHeko hitzaurrean (XXXIV - XXXVI). Guztira hamar liburu, Harrieten gramatika, zehaztu gabeko katixima kopuru bat eta Landucciren eta Etxeberri Sarakoaren hiztegien eskuizkribuak aipatzen ditu.</p>
<p class=“gorputza”>	LEMen sorkuntza literarioa (erlijioarekin loturikoa batez ere) biziki hazi zen. Larramendiren proiektuarekin bat eginez, zenbait josulagun gazte euskaraz idazten hasi ziren, euskaldunek euskaraz irakurtzeko materialak eskura izan eta ohitura har zezaten. Kardaberazek gaztetatik hasteko gomendioa egiten zien euskaldunei:</p>
</div>
<div class="aipua">
<p class=“aipua”>	Seme ta alabak txikitatik eskolan erdaraz ta euskaraz, edo guztitara, oitu bear dira, ta arrazoi gabeko lotsa beltz gaiztoa pisatu ta kentzera. Bestela, zer lotsa gaizto itsusiagorik, euskaldun galtzadun edo gizon egin bat, lau errengloi euskeraz ezin irakurririk, ez atzera ta ez aurrera, lotuta ikustea baño? Ta ori guzia, zergatik? Añ aisa ta erraz lau egunean libru bat irakurtzen ez ekin edo jarduteagatik; Lau eguneko ejerzizio piska batekin seguru, erdaraz bezala edo aisago, euskaraz irakurtzera egingo zera: egin ta irakurri, ta nekerik ta lotsarik eztago (EBO: 16).</p>
</div>
<div class="gorputza">
<p class=“gorputza”>	LEMan eta baita lehenago ere euskarazko lanak inprimatu izan ziren Nafarroan, gaztelaniazkoak baino kopuru askoz txikiagoan izanik ere. Esaterako, egun galdurik dagoen Eltsoren dotrina (1561), ezagutzen den nafarreraz idatziriko lan inprimaturik zaharrena, Lizarran inprimatua da. Iruñeko moldiztegietan inprimatu ziren Beriainen <i>Tratatzen da nola entzun behar den Meza</i> (1621) eta <i>Dotrina kristioarena euskaras</i> (1626)<sup>8</sup> eta Elizalderen <i>Apezendaco doctrina christiana uscaras</i> (1735).</p>
<p class=“gorputza”>	Garai honetan, aldiz, gauzak aldatu ziren 1766an Venancio Legarrak euskarazko lanak argitaratzeko debekua ezarri zuenean. Debekua Kardaberazek <i>Aita San Ignacioren bizitza laburra</i> inprimatu nahi izan zuenean jarri zen indarrean, eta zenbait historialariren aburuz Jesuiten kontrako erabakia izan zen euskararen kontrakoa baino gehiago. Zuzenean euskararen kontrako erasoa ez izanagatik ere, 1767an jesuitak kanporatu ondotik debekuak indarrean jarraitu zuen 1800. urtean, salbuespen bezala edo, Mogelen <i>Confessio ta Comunioco sacramentuen gainean eracasteac</i> argitaratzea lortu zen arte. Ordutik aurrera euskarazko beste lan batzuek ere argia ikusiko zuten, zailtasunak zailtasun eta oso kopuru xumean.</p>
</div>
<h4>1.2.1 Hego-nafarreraz jasotako lekukotasunak</h4>
<div class="gorputza">
<p class=“gorputza”>	Aurrerago (§3.3) hego-nafarrera xehekiago aztertuko dugun arren, orain idatzizko tradizioa aipatuko dugu labur.</p>
<p class=“gorputza”>	Hego-nafarreraren hizkerek hartzen duten eremuko idatzizko lekukotasun gehienak Euskara Zahar eta Klasikokoak (EZK) dira, hots, 1600. urtetik 1745.era doan denbora tartekoak. LEMn lekukotasun bakarra ezagutzen dugu Lizarragaren lanez gain: Urritzolako olerkia (c. XIX. mendeko eskuizkribua).</p>
<p class=“gorputza”>	XVII. mendean, hego-nafarreraz jaso diren lekukotasunak honakoak dira: Orreagako amari eginiko bertsoak (1617), Beriainen <i>Tratatzen da nola entzun behar den Meza</i> (1621) eta <i>Dotrina kristioarena euskaras</i> (1626) eta beste zenbait gutun, esaldi eta kopla labur. XVIII. mendearen lehen erdian 1729ko predikua, <i>Larrasoañako sermoia</i> (XVIII. mendea), Elizalderen <i>Apezendaco doctrina christiana uscaras</i> (1735), <i>Muruzabalgo sermoiak</i> (1743, c. XVIII), <i>Goñerriko sermoia</i> (1743) eta <i>Obanosko Missiora Deeya</i> (c. 1744) ezagutzen dira.<sup>9</sup> Aurreko puntuan esan dugun bezala, EZKn euskaraz argitaraturiko lan gutxi ezagutzen zen eta esanguratsua da hain idatzizko lekukotasun gutxi dituen hizkera honek duen argitaraturiko lanen kopurua. Aurreko puntuan aipatu dugun bezala, bederatzi lekukotasun horietatik sei eskuizkribu labur xamarrak<sup>10</sup> dira eta gainerako hirurak<sup>11</sup> argitaraturiko lan aski luzeak. </p>
</div>
<h3><b>1.3 Euskararen mugak </h3></b>
<div class="gorputza">
<p class=“gorputza”>	Euskararen mugek atzerakada nabarmena izan zuten LEMn. Galera hori, batez ere Araba eta Nafarroako lurraldeetan izan zen, gainerako mugak gutxi-asko bere horretan gelditu baitziren. Nafarroari dagokionez, atzerakada hori ez zen lurralde osoan zehar berdina izan: hego-mendebaldean ez zen aldaketa handirik izan, garaiaren hasieratik bukaerara euskararen muga Urbasa eta Andia mendilerroen hegoaldetik iparraldera igaro baitzen. Hegoalde eta hego-ekialdean aldiz, atzerakada askoz ere larriagoa izan zen. Nafarroa mendebaldetik ekialdera gurutzatzen zuen euskararen mugak 1778an Tafalla eta Leireko mendilerroaren iparraldea ukitzen zituen eta 1863an Iruñea, Agoitz eta Garde. Hortaz, Lizarragak idatzi zuenean, Iruñerriko hegoaldean euskara galzorian zela pentsa daiteke.</p>
</div>
</div>

</div>
&nbsp;
&nbsp;
&nbsp;
&nbsp;


<button type="button" class="collapsible">II. Joakin Lizarragari buruz dakiguna</button>
<div class="content">
<div class="gorputza">
<p class=“gorputza”>	Joakin Lizarragaren bizitzako gertakizun aipagarrienak ekarri ditugu atal honetara, bere obraren gorabeherak hurrengorako (§2.3) utziz. Nor zen eta nola bizi zen ezagutu nahi badugu eta egin zuena (euskaraz 5.000 orrialde inguru idatzi) zergatik egin zuen argitu nahi badugu, Juan Apecechearen obrara hurbildu beharko dugu nahitaez. Elkanokoaren obrak duen balio erlijiosoak mugiturik, haren obra edukiaren eta hizkuntzaren aldetik aztertzen hasi zen, eta handik gutxira haren bizitzari buruzko datuak biltzeari ekin zion, gehien aztertu duen aditua izatera iritsi arte. Francisco Ondarrak ere ia Apecechearen pare aztertu du Joakin Lizarragaren obra (ikus bibliografia), besteren artean, bi edizio lan argitaratu baititu bakarka eta beste bat Apecechearekin elkarlanean. Horien atzetik eta bereziki hizkuntzari erreparatuz Salaberri, Villasante, Mitxelena, Bonaparte eta beste zenbait euskalari daude, baina Lizarragaren bizitzari dagokionez, batek ere ez du Apecechearen sakontasuna erdietsi.</p>
<p class=“gorputza”>	Atal hau osatzeko beraz, Apecechearen <i>Joaquin de Lizarraga (1748-1835). Un escritor navarro en euskara</i> liburua erabili dugu. Lan hori doktorego tesi bezala aurkeztu zen Gasteizko Teologia Fakultatean eta Joakin Lizarragaren bizitza eta ingurua xehekien aztertzen dituena da. Gauzak horrela, irakurketa arinago gerta dadin, ez ditugu lan horretatik ateratako informazioaren erreferentzia guztiak eman; bai ordea bestelako lanetatik ateratako informazioa erabili dugunean.</p>
</div>
  <h3>2.1 Haurtzaro eta gaztaroa</h3>
  <div class="gorputza">
    <p class=“gorputza”>	Joakin Lizarraga 1748ko irailaren 17an jaio zen Elkanon (Eguesibar), Migelena etxean. Bere aita bertakoa zen eta ama Egozkuekoa (Anue) eta Joakin izan zen lehenjaioa; guztira bost anai-arreba ziren.</p>
    <p class=“gorputza”>	XVIII. mendearen erdian, Elkanok 19 etxe edo familia zituen eta bertako biztanle gehienak, Lizarragaren gurasoak bezala, nekazariak ziren. Txikitatik oso gertu izan zuen eskola, Eguesibarko bakarra Elkanon bertan baitzegoen.<sup>12</sup> Gainera, badirudi herrian bertan beste eskola bat ere bazegoela eta apaiz ikasketak egin nahi zituzten ibarreko gazteek bertan egiten zituztela prestaketa ikastaroak eta zenbait kasutan baita lehendabiziko urtea ere. Apececheak jasotakoaren arabera, litekeena da Lizarraga haurra zela, “apaizen eskola” horren ardura haren osabarena izatea, eta dakigunagatik, 1815. urte inguruan bederen, Lizarragaren esku egon zen (Ondarra 1978). </p>
    <p class=“gorputza”>	Migelenakoek harreman estua zuten elizarekin, senideen artean apaiz eta abade ugari baitzegoen; horietarik bat autorearen izen bera zuen Joachin Lizarraga osaba, Elkanoko bikarioa. Izenkide biak elkarrekin bizi ziren gazteenak, ikasketak zirela eta, jaiotetxea utzi zuen arte. 1. irudian ikus daitekeenez, Elkanoko Migelena etxea eta eliza metro gutxira daude. Lizarragak, beraz, kultura eta erlijioa inguruan izan zituen haurra zenetik, eskola eta eliza herrian bertan eta familian apaiz ugari zituen eta.</p>
  </div>  
  <div class="team-image-wrapper2">
    <img class="team-member-image" src="<?= base_url("assets/img/Migelena.png")?>">
  </div>
  <div class="gorputza">
    <p class=“gorputza”>	12 urte zituela, 1760an, Iruñeko Anuntziada ikastetxera joan zen humanitate ikasketak egitera. Ikastetxearen eraikina egun Iruñeko Hizkuntza Eskola Ofizialaren egoitza da, Konpainia plazan. Plazak eta izen bereko ondoko kaleak egoitzaren garai bateko arduradunen berri ematen dute, Jesusen Lagundiaren gaztelerazko izenetik (Compañía de Jesús) baitator haien izena ere. Ikastetxea 1580ko apirilaren 19an inauguratu zen eta 1767ko apirilaren 3an itxi, Karlos III.ak lagundia Espainiatik kanporatzeko agindua eman ondoren.<sup>13</sup> XVIII. mende hasieran espainiar estatuko ikastetxerik prestigiotsuenetarikoa zen, Jesuitek kudeatzen zituzten gehienak bezala.</p>
  </div>
  <div class="team-image-wrapper2">
    <img class="team-member-image" src="<?= base_url("assets/img/Anuntziada.png")?>">
  </div>
  <div class="gorputza">
    <p class=“gorputza”>	Anuntziadan egiten ziren humanitate ikasketek lau urte irauten zuten, baina Lizarragak hiru urtetan burutu zituen, 1760tik 1763ra hain zuzen ere. Apececheak lortu ahal izan zituen paperetan ageri denaren arabera, bigarren ikasturtean ageri da lehen aldiz matrikulaturik. Pentsatzekoa da bere osaba Joachinek lagunduko ziola zuzenean bigarrenean sartzeko azterketa prestatzen, hark ere humanitateak ikasi baitzituen apaiz izan aurretik. Zailago da jakitea hori non eta nola egin zuten, etxean edota gorago aipatu dugun Elkanoko apaizen eskolan egin baitzezaketen.</p>
    <p class=“gorputza”>	Anuntziadan garrantzi handia ematen zitzaien humanitate ikasketei, baina horiez gain filosofia eta teologia ere irakasten ziren. Esan berri dugun bezala, Lizarragak humanitateak ikasi zituen eta, normalean, lau urteko epean bost ikasgai ematen ziren: gramatikako hiru, erretorikako bat eta humanitateetako beste bat. Hala ere, azterketak egin eta aurrera egiteko aukera zuten ikasleek. Lizarragak horrela eginen zuen lehen ikasturtea, esan dugun bezala, zuzenean bigarren urtean hasi baitzen.</p>
    <p class=“gorputza”>	Gramatikako eskoletan batez ere latinaren gramatika, sintaxia eta literatura irakasten ziren,<i> Nebrijaren Artea</i> landu eta itzulpengintzan trebatzeko ariketak egiten zituzten (horiek ere latinetik nagusiki, baina ez bakarrik). Erretorikan gaiari buruzko autore klasikoak lantzen zituzten (Horazio, Zizeron, Tito Livio…). Humanitateez den bezainbatean, Greziako historia eta geografia ikasten ziren eta, horiez gain, hala nahi zutenek greziera ikasteko aukera zuten. Humanitate prestaketa aberatsa eskaintzen zen hortaz, Anuntziadan, eta Perez Goyenak bost bertute nagusi aitortzen dizkio: latina irakastea, Nafarroako historia ezagutaraztea, katekesia zabaltzea, euskara sustatzea eta Jesusen bihotzaren debozioa.</p>
    <p class=“gorputza”>	Humanitateen ziklo horretan bi izan ziren Lizarragaren maisuak: Pedro Amezketa eta Francisco Martín de Villacomer. Horiez gain, euskal kulturan sona handikoak diren bi pertsonaia ere ikastetxe horretako irakasle izan ziren XVIII. mendean: Agustin Kardaberaz eta Sebastian Mendiburu. Historiaren Erret Akademiak jasotzen duenaren arabera,<sup>14</sup> Kardaberaz 1734-1735 urteetan Filosofia irakasle aritu zen bertan. Mendiburuk, aldiz, 28 urte egin zituen bertan, hiru egonalditan: 1737tik 1745era,<sup>15</sup> 1746tik 1755era eta 1756tik 1767ra, hots, Italiara erbesteraturik joan behar izan zuen arte (Pérez, 2008). Lizarraga Mendibururen azken egonaldian egon zen Anuntziadan eta, zuzenean bere irakasle izan ez bazen ere, pentsatzekoa da eskolaz kanpo egiten zituzten eskolako jardueretan eta eguneroko bizitzan elkarrekin egoteko tarterik izanen zutela. Mendiburu, Kardaberazen antzera, oso idazle eta predikari ospetsua zen garai hartan, eta Lizarragarengan euskaraz idatzi eta predikatzeko grina piztu zezakeela uste da. Pérez Goyenaren hitzetan, Mendiburu eta Kardaberazen liburuek euskara bultzatzen lagundu zuten eta eragin handia izan zuten garai hartako Anuntziadako ikasleengan (1947 (I): 167).</p>
  </div>
    <h3>2.2 Nobiziagoa Jesuitekin</h3>
  <div class="gorputza">
    <p class=“gorputza”>	1763an, 15 urterekin, Iruñeko ikasketak bukatu eta ondorengo bi urteetan Elkanoko parrokiako benefiziadu bezala ageri da idazkietan Lizarraga. Urte luzez, nobiziagoa Loiolan egin zuelako ustea zabaldu zen aditu askoren artean, baina Apececheak erakutsi zuen ez zela horrela izan (1978: 67-71). Jakin ahal izan zuen bezala, nobiziagoa Villagarcía de Camposen egin zuen eta lehen aldiz 1765ean ageri da lehen urteko nobizio bezala matrikulaturik. Bigarren urtean, bere prestaketa eta gaitasun intelektuala zirela medio, nobizio bezala agertzeaz gain, irakasle bezala ageri da 18 urte besterik ez zituenean. 
    <p class=“gorputza”>	Azpimarragarria da, eta Lizarragaren gaitasunen erakusgarri, hain gazterik Espainiako estatuko eskola prestigiotsuenetariko batean Villagarciako gramatikako irakasle izatea; klaustroa osatzen zuten zazpi irakasleetatik gazteena. Villagarcian hiru komunitate edo talde biltzen ziren: Aita Jesuitak, nobizioak eta eskolako ikasleak. Lizarragak, lehen urteko ikasleen irakasle izateaz gain, bera bezala nobizio zirenen ikuskaritzaren ardura ere bazuen. Bere lana nobizioak bide zuzenetik eramatea zen, behar zutenean laguntzea eta egin behar zituztenak egiten zituztela ziurtatzea. Aurreko urtean, egiteko hori bi pertsonak betetzen zuten, baina Lizarraga arduradun jartzean, egitekoa berak bakarrik egiten zuen. Argi dago, beraz, izan zezakeen gaitasunaz gain, eskolako buruek harengan konfiantza handia zutela.</p>
    <p class=“gorputza”>	Lizarraga Villagarcian zegoela, Jesuitak kanporatzeko agindua eman zuen Karlos III.ak (§2.1.1.2) eta 1767ko apirilaren 3an, eraikina inguratu eta bertan zeuden Jesuita guztiak preso hartu zituzten, Jesuitek kudeaturiko eskola guztietan gertatu zen bezala. Erregeak Aita Jesuita guztiak kanporatzea agindu zuen eta jesuita izateko ikasten ari ziren nobizioei erabakitzeko aukera eman zien: haiekin erbestera joan edo etxera itzuli eta, nahi izanez gero, beste kongregazioren batean sartu.</p>
    <p class=“gorputza”>	Lizarragak hasieran desterruko bidea hartzea erabaki zuen eta apirilaren 5ean Villagarciatik Ampudiara bidali zuten erabaki bera hartu zuten 73 kideekin batera.<sup>16</sup> Ampudian txalo artean jaso zituzten herritarrek eta bertan eman zuten gaua, aterpe eman nahi izan zieten herritarren etxeetan. Hurrengo egunean, apirilak 6, Palentziara abiatu ziren eta bertara iristean antzeko giroa aurkitu zuten: herritarrak negarrez, haien alde oihuka eta gaua igarotzeko beren etxeko atea irekitzen zieten herritar andana. Biharamunean Torquemadara bidea hartu zuten, baina hara iritsi baino lehen, Magazen igaro behar izan zuten gaua, eta bertako giroa ez zen hain atsegina izan. Hori gutxi balitz, nobizioak Aita Jesuitengandik banandu zituzten eta gazteen artean atsekabea zabaldu zen. Erabaki horren atzean asmo argia zegoen: harturiko erabakiaren gainean berriro hausnartu eta atzera egin zezaten. 
    <p class=“gorputza”>	Apirilaren 8an nobizio guztiak Torquemadara iritsi ziren eta bertan herritar gehienak aurka zituztela ikusi zuten. Egoera nahikoa gogorra ez izaki, eta agintariek gazte guztiak binaka jarri eta etxeetan banatzea erabaki zuten. Horrela, elkarren arteko komunikazioa ahalik eta gehien mugatu zuten, nobizioen kemena galarazi eta haien borondatea hautsi nahian. 
    <p class=“gorputza”>	Eguneroko betebeharren zerrenda osatu zuten nobizioek, egunean zehar egin beharreko otoitzak, mezak, etab. jasotzen zituena. Horiek egin ahal izateko lekua behar zutela eta, herriko apaizarekin elkartu ziren Lizarraga eta Arévalo abizena zuen beste nobizio bat, guztien ordezkari bezala. Lekua eta elkartzeko baimena lortu zituzten, baina herriko alkateak geroz eta traba gehiago jarriko zizkien. Aurrekoez gain, nobizioek zituzten arazo guztiak konpontzen saiatzen ziren Lizarraga eta Arévalo: askori egokitu zitzaien etxean ez zieten ia jaten ematen, beste asko lurrean lo egitera behartzen zituzten, gaixo zeudenak ez zituzten artatu nahi, etab. Arazo guztiak konpontzea lortu ez arren, bi arduradunen lanari esker egoera hobean egotea lortu zuten askok.</p>
    <p class=“gorputza”>	Apirilaren 12an egoerak okerrera egin zuen benetan ofiziala zen argi ez dagoen dokumentu batengatik. Nobizioei esan zietenagatik, erregearen aginduak ziren, baina ez zieten dokumenturik erakutsi, Lizarragak askotan eskatuagatik ere. Agindu horrek honakoak biltzen omen zituen: 1. Nobizioak ezin ziren jarduera kolektiboak egiteko elkartu eta Lizarragak eta Arévalok ezin zuten agindurik eman. 2. Nobizioak ezin ziren gainerakoen etxeetara bisitan joan, bisitatuak gaixo egonik ere. 3. Paseatzera ateratzekotan, etxe berean bizi zirenak soilik atera zitezkeen elkarrekin. 4. Kalean beste nobizioren bat aurkitzekotan, agurtu besterik ezin zuten egin, beste deus esan gabe. 5. Ezin zioten elkarri animorik eman. 6. Nobizioak ezin ziren Lizarraga eta Arévalo bizi ziren etxera aholku eske joan.</p>
    <p class=“gorputza”>	Egoera horretan igaro behar izan zituzten Torquemadako azken egunak, apirilaren 19ko goizeko zazpietan Palentziako bidean jarri zituzten arte. Hara iristean, aurrekoan bezala, harrera beroa egin zieten palentziarrek. Soldaduek, ia jendea gainetik kendu ezinik, udaletxera eraman zituzten zuzenean, alkatearekin elkar zitezen. Bertan, alkateak banan-banan deitu eta bakoitzari erregearen agindua irakurri ondoren, gogoa alda zezaten saiatzen zen; hobe zutela etxera itzultzea, Jesuitek Italian umezurtz utziko zituztela, beste konpainia askotan sartzeko aukera zutela eta abar esaten zien. Hitzaldiaren ondoren, desterruko bidea hartu nahi zuten ala ez galdetzen zien. Lehendabiziko galdeketa horretan, hogeita hamabost inguruk harturiko erabakiari tinko eutsi zioten, Lizarraga tartean. Horiek bigarren aldiz pasa behar izan zuten, banaka, alkatearen aurretik eta, orduan, Lizarragak etxerako bidea hartzea erabaki zuen. 1767ko apirilaren 21a zen. Azkenean, Villagarcian zeuden 79 nobizioetatik 20 izan ziren Italiako bidea hartu zutenak.</p>
  </div>
    <h3>2.3 Elkanora </h3>
  <div class="gorputza">
    <p class=“gorputza”>	Jesuitak utzirik, 1770eko martxoaren 10ean, subdiakono izendatu zuten eta 1771ko udazkenean, urriaren 5ean, Elkanoko parrokiaren ardura hartu zuen. Azaroaren lehenengoan, sandu guztien egunean, bere lehendabiziko sermoia predikatu zuen (euskaraz): <i>De audiendo Verbo Dei et quomodo</i> izenburua du eta Nafarroako Gordailu Nagusiko Bonaparte ondarean aurki daiteke 7. zenbakiarekin. 1773ko azaroaren 8an Elkanoko parrokiako titular izendatu zuten.</p>
  </div>
    <h3>2.4 Gramatikako irakasle izatear </h3>
  <div class="gorputza">
    <p class=“gorputza”>	1777an Iruñeko apaizgaitegia sortu zen eta, harekin batera, ikasketa programa berritzaile bat proposatu zen. Hasieran, diru falta zela eta, ikasleek handik kanpo jasotzen zituzten gramatikako eskolak, baina 1786an eskola horiek garrantzitsuegiak zirela eta apaizgaitegi barrenean eman behar zituztela erabaki zen. Ez hori bakarrik, Aguado y Rojas gotzainak elizarekin loturiko pertsona batek eman behar zituela azpimarratu zuen. Postu horretarako katedratiko baten bila hasi ziren orduan eta hilabete batzuen buruan bi hautagai zituzten eskuartean: Joakin Lizarraga eta Ramon Labeaga.</p>
    <p class=“gorputza”>	Irakasle berriari lagunduko zion pertsona bat ere izendatu beharra zuten eta ia hasieratik argi zegoen zeinek hartuko zuen ardura hori: bertako ikasle zen Miguel de Sorron 28 urteko tolosarrak. Erabakiaren gaineko xehetasunak ez dira ezagutzen, baina katedra Labeagaren esku uztea erabaki zuten azkenean. Gauzak horrela, Lizarragak Elkanoko bikario izaten jarraitu behar izan zuen.</p>
  </div>
    <h3>2.5 Predikazioa </h3>
  <div class="gorputza">
    <p class=“gorputza”>	Euskarazko materialei dagokienez, Iruñean XVII. eta XVIII. mendeen artean katiximak, dotrinak eta erlijioarekin loturiko liburu ugari inprimatu ziren. Besteak beste, ezagutzen dugun, baina galdurik dagoen Eltsoren dotrina (1561), Beriainena (1626) eta Elizalderena (§3.3.2.1). 
    <p class=“gorputza”>	Lehenago esan dugun bezala (§2.1.1.2), 1777an apaizgaitegia ireki zen apaizen heziketa hobetzeko asmoz. Lizarraga predikatzen hasi zenean beraz, Nafarroako Elizaren baitan aldaketa ugari gertatzen ari zen. Pentsatzekoa da aldaketa horiekin eroso egonen zela, Iruñeko zikloa egitea eta Villagarcian irakasle aritzea ezohiko ezagutza humanistikoa eta heziketa intelektuala eskuratzeko baliagarri izan zitzaizkion eta. Euskarari dagokionez, ziurrenik Villagarcian ezin izan zuen sakonki landu eta horretarako tresnak eta ereduak beste nonbaitetik hartu beharko zituen. Gauzak horrela, agian Mendibururi esker ezagutzen zituen iturrietara joko zuela pentsa dezakegu. Garai hartan bolo-bolo zebiltzan arazoak izanik, sobera ezagutuko zuen, eta akaso, konponbidea ematen saiatzeko sorturiko Larramendiren proiektua eta haren inguruko elizgizonen (horietariko asko jesuitak) kezkak eta proposamenak ere bai (§2.1). Lizarraga Jesuitekin ikasten ari zenean Larramendi tartean bizirik zegoen, kanporaketa baino urtebete lehenago hil baitzen (1766/01/29). Aurrez aurre egon zirela frogatzen duen ebidentziarik egon ez arren, zenbait datuk Elkanokoak andoaindarra ezagutzen zuela erakusten dute. Argiena, Lizarragaren liburutegian HHaren lehen liburukiaren kopia bat zegoela (egun Kaputxinoen Iruñeko egoitzan). 
  </div>
    <h3>2.6 Elkanoko parrokiako egitekoak </h3>
  <div class="gorputza">
    <p class=“gorputza”>	Elkanoko parrokian ehun eliztar inguru elkartzen ziren. Hain kopuru murritza izanik, esan daiteke ez zela kudeatzeko zailenetarikoa. Hala ere, Lizarraga ez zen alferkerian erori eta egunaren zatirik handiena ikasten eta predikazio lanak ontzen ematen zuen. Begi bistakoa da bere betebeharra ahalik eta hobekien egitea zuela helburu eta hori ezagun dute prestaturiko materialaren kopuruak eta kalitateak.</p>
    <p class=“gorputza”>	Lizarraga parrokiaren arduradun zen garaian, Konbentzioaren gerra (1793-1795) eta Independentziarena (1808-1814) gertatu ziren. Lehenak ez zuen Elkanon eragin zuzenik izan, tropa frantsesak Pirinio inguruko herrietan ibili baitziren gehienbat. Hala ere, Elkanoko herritar batzuk frontera joateko erabakia hartu zuten eta Lizarragak ere eliz jantzirik onenak Milagrora bidali zituen. Bertan egon ziren 1795eko uztailaren 22ra arte, Basileako ituna sinatu arte, alegia. 
    <p class=“gorputza”>	Independentzia gerraren hasieran (1808), Iruñerriko eta Elkanoko herritarrek ez zuten Bonaparte erregeak ezarritako zerga handien zama bestelako ezbehar nabarmenik sufritu. Zergak, ordea, oso altuak ziren eta herritar asko pobre izatera iritsi ziren horien eta noizean behinkako arpilaketen ondorioz. Herriko Parrokiak, orduan, zenbait gauza saldu zituen ordaindu ezin zuten herritarrei laguntzeko.</p>
    <p class=“gorputza”>	Gerrak aurrera egin ahala, egoera geroz eta tirabiratsuago bilakatzen hasi zen. 1810 inguruan, Iruñerriko elizgizon batzuek armak hartu zituzten frantsesen aurka jotzeko. Ez dago informaziorik Lizarragaren erabakiaren gainean, baina bere adina kontuan harturik (60 urtetik gora), eta 1813an, osasun arazoak zirela eta, bikario izateari uzteko eskaria egin zuela jakinik, pentsatzekoa da ez zuela halakorik eginen.</p>
    <p class=“gorputza”>	Frantses armada 1812an Iruñerrira iritsi zenetik, Elkanoko herritarrek bost edo sei aldiz utzi zuten herria hutsik, frantses soldaduengandik ihesi. 1813ko ekainaren 23an, Gasteiztik erretretan heldu ziren soldadu frantsesak gauez iritsi ziren herrira, eta herritarrei ez zien ihes egiteko denborarik eman. Soldaduek, nahi zuten guztia hartu ondoren, ondasun gehiagorik ez zegoela eta, diru eske joan zitzaizkion Lizarragari, ezpatarekin mehatxu eginez. Hark, bere iloba bidali behar izan zuen auzokide bati dirua eskatzera. Auzokideak, 20 peso eskaini zizkien soldadu haiei eta haiek atzera lau ontza eskatu zizkioten. Bukaeran, bost ontza baino gehiago kendu zizkioten gizonari. Denbora gutxi igarota, Lizarragak galdutako diru guztia itzuli zion.<sup>17</sup>
    <p class=“gorputza”>	Garai latzak bizi izan zituzten guda bukatu aurreko urteetan Elkanon. Behin, Frantziako soldaduek gizon bat hil zuten Lizarragaren etxe atarian eta hark ozta-ozta lortu zuen ihes egitea, tiro egin zioten arren. Egun hartan, elizako zenbait objektu baliotsu ostu eta kalte handiak egin zituzten eliza barrenean. 
    <p class=“gorputza”>	Hala ere, unerik latzenak 1813ko uztailaren 27tik abuztuaren 10era bizi izan zituzten. 27an frantsesak iritsi eta herritarrek mendira ihes egin zuten. Lizarragak elizan geratzen zen azkeneko kaliza eta aldareko sakramentua eramatea lortu zuen. Abuztuaren 2an frantsesek atzera egin behar izan zuten eta herritarrak menditik jaitsi ziren, egoera baretu zelakoan. Ez zen hori, baina, aurkitu zutena: ingelesek frantsesen lekua hartua zuten eta lehenek utzitako apurrak berendako hartuak zituzten. Eliza ukuilu bihurtu zuten, etxeak, soroak, baratzeak, etab. bereganatuak zituzten… herritarren artean atsekabea nagusitu zen. Honela azaldu zuen Lizarragak aurkituriko egoera:</p>
  </div>
  <div class="aipua">
    <p class=“aipua”>Idos ellos (los franceses), luego entraron acá los ingleses de a caballo que hicieron el templo establo de sus caballos y de sí mismos: cuando yo volví, que fué a dos del siguente agosto, aunque hallé la casa destrozada y despojada tan de todo, que no había ni carretón, ni un gerón donde reclinarme, sin embargo la mayor pena la tenía de mi iglesia. Supliqué humilde rendidamente al Comandante, que mandase quitar los caballos de la iglesia: no hubo remedio, hasta que el once de dicho mes de agosto se fueron dejándola extremadamente despojada de todo, llena solamente de paja y estiércol, que para limpiarle, hubimos de trabajar todos los del pueblo, hombres y mujeres (Apecechea, 1978: 164).</p>
  </div>
  <div class="gorputza">
    <p class=“gorputza”>	Galera nabarmenak izan zituen Elkanoko herriak 1813ko udan. Elkanoko Udal Agiritegian jasotakoaren arabera, uztari dagokionez frantsesek 47.362 erreal gogorreko kalteak eragin zituzten eta ingelesek 38.420koak. Arropa zuri eta beltzean<sup>18</sup> 135.868 erreal gogor galdu zituzten. Gainera, gorde ahal izan zuten hazi kopuru txikia dela eta, ereiteko arazoak izan zituzten hurrengo urtean.</p>
    <p class=“gorputza”>	Gerraren ondorioz, hain zen latza Elkanoko biztanleen egoera, ez baitziren elizarekin zituzten maileguak itzultzeko gai. Lizarragak, egoeraren jakitun, 1828an herritarren zorrak barkatzeko eskatu zuen, berak bere dirutik ordaindutako bi kanpairen truke. Otsailaren 27an eskaera onartu eta zorrak barkatuko zituela ebatzi zuen elizbarrutiko zuzkitzaileak.</p>
    <p class=“gorputza”>	Bikario izateari uzteko eskaera 1813an egin bazuen ere, 1819ra arte ez zioten onartu, eta orduan ere, ordezko bezala egotera beharturik ikusi zuen bere burua. 1834ko azaroaren 6an bere osasun egoerak okerrera egin eta paperak sinatzeari utzi zion. Data horretatik aitzina Pedro Idoatek, Ustarrozko (Eguesibar) abadeak, sinaturik ageri dira elizako paper guztiak. </p>
    <p class=“gorputza”>	1835eko urtarrilaren 20an zendu zen Joakin Lizarraga eta, hark hala eskaturik, ez zen ospakizun handirik egin:</p>
  </div>
  <div class="aipua">
    <p class=“aipua”>Declaro ser mi voluntad que sucedida mi muerte sin mudar de estado y lugar, sea sepultado mi cuerpo en ésta dicha iglesia parroquial y sepultura que mi casa nativa tiene en la misma, que se halla a los pies del crucifijo de la adoración, y que a luego de mi muerte se ponga encerrado y cubierto en una caja, sin andarlo lavando, ni desnudando, ni vistiendo y que la función de entierro se haga muy moderado, con poco aparato y menos pompa, siguiendo mi ánimo que se celebren misas y sufragios verdaderos más que otras esterilidades que usa el mundo (Lizarragaren testamentua; NGN, Uharteko protokoloak, leg. 95 z.g.).</p>
  </div>
    <div class="gorputza">
    <p class=“gorputza”>	Urtarrilaren 23an bere anaidiko sei sazerdotek Migelenatik elizara eraman zuten gorpua eta meza baten ondoren bertan lurperatu zuten. Lizarragaren azken nahia betetzeko, bost egunen buruan anaidiko kide guztiek bijilia egin zuten eta Lizarragaren izenean egindako Requiemean egon ziren.</p>
  </div>
  </div>
</div>
&nbsp;
<button type="button" class="collapsible2">Oharrak</button>
<div class="content">
  <ol>
<div class="gorputza1">
    <li class=“gorputza1”>Hemen jasotako informazio guztia hemendik atera dugu: Iriarte, I., 2022, <i>Joakin Lizarragaren lexikoaren azterketa</i>, Nafarroako Gobernua eta Euskaltzaindia: Iruñea.</li>
    <li class=“gorputza1”>Pasarte honen eta hurrengoen grafia gaurkoturik eman dugu. </li>
    <li class=“gorputza1”>Izenburu osoa honakoa da: De la antigüedad y universalidad del Bascuenze en España: de sus perfecciones y ventajas sobre otras muchas Lenguas, Demonstración previa al Arte que se dará a luz desta Lengua</li>
    <li class=“gorputza1”>Euskararen aldeko lana ez zuten beti euskararekiko maitasun hutsagatik egin. Beren helburu nagusia jainkoaren eta erlijio kristauaren alde egitea zen.</li>
    <li class=“gorputza1”>Honakoak izan ziren 1809an hustutako erlijio institutuak. Gehienak irailean hustu zituzten, baina batzuk hilabete batzuk geroago (Andueza, 2012: 694): La Oliva, Fitero, Urdazubi, Martzilla, Irantzu, Leire eta Iratxe. Iruñean: mesedeetako oinetakodunak, agustinoak, karmeldar oinetakodunak, dominikoak, karmeldar oinutsak, trinitarioak, antonianoak, frantziskanoak eta kaputxinoak. Zangozan: mesedeetako dominikoak, karmeldar oinetakodunak, Rokafuerteko otoiztegiko frantziskanoak. Tutera: karmeldar oinetakodunak, mesedeetakoak, dominikoak, karmeldar oinutsak, frantziskanoak, antonianoak eta kaputxinoak. Cascante: San Frantzisko. Valtierra: kaputxinoak. Zentroniko: kaputxinoak. Villafranca: karmeldar oinutsak. Tafalla: frantziskanoak eta kaputxinoak. Olite: antonianoak eta frantziskanoak. Azkoien: kaputxinoak. Lerin: kaputxinoak. Gares: trinitarioak eta Hilobi Sandua. Lizarra: mesedeetakoak, agustino oinetakodunak, dominikoak eta frantziskanoak. Viana: frantziskotarrak. Los Arcos: kaputxinoak. Bera: kaputxinoak. Corella: mesedeetako oinetakodunak eta karmeldar oinutsak. Eta horiekin batera, Hondarribiko kaputxinoen komentua.</li>
    <li class=“gorputza1”>https://www.boe.es/datos/pdfs/BOE/1820/123/C00544-00544.pdf [kontsulta 2021/08/27]</li>
    <li class=“gorputza1”>Vascongado hitzak ‘euskaldun elebakar’ esan nahi zuen garai horretan.</li>
    <li class=“gorputza1”>NGNko Estatistikako 27. leg., 2. karpetatik ateratako datua.</li>
    <li class=“gorputza1”>Lan hauek badute gaztelaniazko izenburua ere: <i>Tratado de como se ha de oyr missa</i> (1621); Doctrina Christiana en Romance y Bascuence (1626).</li>
    <li class=“gorputza1”>Garaiotan Nafarroako eremu euskaldunean jasotako lekukotasunen gainean sakontzeko, Reguero (2019).</li>
    <li class=“gorputza1”>Orreagako bertsoak 4 lerroko hiru ahapaldi dira, 1729ko sermoia </li>
    <li class=“gorputza1”>Beriainen biak eta Elizalderena. </li>
    <li class=“gorputza1”>Lekarozek (2014) Eguesibarko lehen eskola 1805 inguruan irekitako Badostaingoa dela aipatzen du. Apececheak berriz (1978: 31), 1797ko zentsua aipatuz, urte hartan Elkanok eskola zuela dio.</li>
    <li class=“gorputza1”>https://www.jesuitaspamplona.org/nuestro-colegio/nuestra-historia/ [2021-07-29].</li>
    <li class=“gorputza1”>https://dbe.rah.es/biografias/19971/agustin-de-cardaveraz [azken kontsulta: 2021/09/01]</li>
    <li class=“gorputza1”>Urte horretan Loiolara bidali zuten eta bertan egon zen Larramendiren hiztegia inprimatu zen urtean, Larramendi eta Kardaberazekin, atzera Iruñera bidali zuten arte.</li>
    <li class=“gorputza1”>Villagarcian 79 nobizio zeuden eta horietarik hiruk Jesuita izateari uztea erabaki zuten, eta beste bik bertan geratu behar izan zuten gaixorik zeudelako.</li>
    <li class=“gorputza1”>Apececheak (1978: 162-167) jasotako lekukotasunak, Lizarragak berak jaso zituen Elkanoko parrokiako gordailuan dagoen Libro de Fábrica (1727-1957) liburuan.</li>  
    <li class=“gorputza1”>Arropa zuria azpiko arropa, maindireak eta mahai-oihalak dira. Arropa beltzarekin zer esan nahi duten ezin izan dugu jakin, baina kanpoan eraman ohi diren jantziez ari direla uste dugu.</li>
</div>
  </ol>
  </div>
&nbsp;
<section>
<button background-color= #000 type="button" class="collapsible1" background-color= #000>Autoreari buruzko lanak:</button>
<div class="content">

<swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="20"
    slides-per-view="3">

    <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Fagoaga.png")?>">
                </div>
                <p class="text-blk name">
                «Azkueren iztegi berritu eta osoturako Joakin Lizarraga Elkanoko Apaizaren liburu argitara gabekoetatik ateratako itz saila»
                </p>
                  <p class="text-blk position">
                  1959
                </p>
                <p class="text-blk feature-text">
                  Blas Fagoaga
                </p>
                <p class="text-blk feature-text">
                  <i>Euskera</i>
                </p>
                <p class="text-blk feature-text">
                  63-68
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/fagoaga.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
  </swiper-slide>

      <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Irigaray.png")?>">
                </div>
                <p class="text-blk name">
                  Lizarraga Elkanokoa.
                </p>
                  <p class="text-blk position">
                  1959
                </p>
                <p class="text-blk feature-text">
                  Aingeru Irigarai
                </p>
                <p class="text-blk feature-text">
                  <i>Euskera</i>
                </p>
                <p class="text-blk feature-text">
                  119-126
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Irigaray.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
        </swiper-slide>

        <swiper-slide>
          <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Iraizoz.png")?>">
                </div>
                <p class="text-blk name">
                  «Vocabulario y fraseología de Joaquín Lizarraga»
                </p>
                  <p class="text-blk position">
                  1978-1979
                </p>
                <p class="text-blk feature-text">
                  Policarpo de Iraizoz
                </p>
                <p class="text-blk feature-text">
                  <i>Fontes linguae Vasconum</i>
                </p>
                <p class="text-blk feature-text">
                  (1978) 245- 297; 461-468; (1979) 121-162; 303-332.
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Fraseologia.zip")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
            </div>
          </swiper-slide>

            <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Ondarra.png")?>">
                </div>
                <p class="text-blk name">
                «Producción literaria de Joaquín Lizarraga (1748-1835)»
                </p>
                  <p class="text-blk position">
                  1972
                </p>
                <p class="text-blk feature-text">
                  Francisco Ondarra
                </p>
                <p class="text-blk feature-text">
                  Fontes Linguae Vasconum 4
                </p>
                <p class="text-blk feature-text">
                  265-281
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Produccion.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
            </swiper-slide>

      <swiper-slide>
               <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Bizitza1.png")?>">
                </div>
                <p class="text-blk name">
                  <i>Joaquin de Lizarraga (1748-1835): Un esccritor navarro en euskara.</i>
                </p>
                  <p class="text-blk position">
                  1978
                </p>
                <p class="text-blk feature-text">
                  Juan Apecechea Perurena
                </p>
                <p class="text-blk feature-text">
                  Nafarroako Gobernua. Hezkuntza eta Kultura saila.
                </p>
                <p class="text-blk feature-text">
                  (Iruñea)
                </p>
                <div>
                <p><button class="btn">Soilik paperean</button></p>
                </div>
              </div>
        </swiper-slide>

      <swiper-slide>
            <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Ondarrazkue.png")?>">
                </div>
                <p class="text-blk name">
                  La Escuela de Gramática de Joaquín Lizarraga, en Elcano
                </p>
                  <p class="text-blk position">
                  1978
                </p>
                <p class="text-blk feature-text">
                  Francisco Ondarra
                </p>
                <p class="text-blk feature-text">
                  <i>Fontes Lingua Vasconum</i> 28
                </p>
                <p class="text-blk feature-text">
                  127-138
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Gramatica.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
        </swiper-slide>

      <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Ondarrazkue.png")?>">
                </div>
                <p class="text-blk name">
                  Joaquin de Lizarraga en el diccionario de Azkue
                </p>
                  <p class="text-blk position">
                  1980
                </p>
                <p class="text-blk feature-text">
                  Francisco Ondarra
                </p>
                <p class="text-blk feature-text">
                  <i>Fontes Lingua Vasconum</i> 34
                </p>
                <p class="text-blk feature-text">
                  107-141
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Ondarrazkue.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
        </swiper-slide>

      <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Zabalza.png")?>">
                </div>
                <p class="text-blk name">
                «El tratado sobre el matrimonio de Joaquín de Lizarraga (1782)»
                </p>
                  <p class="text-blk position">
                  2005
                </p>
                <p class="text-blk feature-text">
                Ana Zabalza-Seguín
                </p>
                <p class="text-blk feature-text">
                  in I. Arellano eta J. M. Usunáriz (ed)<i>El matrimonio en Europa y el mundi hispánico. Siglos XVI y XVII.</i>
                </p>
                <p class="text-blk feature-text">
                  211-223
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Zabalza.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
  </swiper-slide>

      <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Santazilia.png")?>">
                </div>
                <p class="text-blk name">
                Nor-Nori, Nor-Nork eta Nor-Nori-Nork sailetako hirugarren pertsona pluralaren morfemaren aldaerak Joaquín Lizarraga Elkanokoaren aditzean
                </p>
                  <p class="text-blk position">
                  2006
                </p>
                <p class="text-blk feature-text">
                  Ekaitz Santazilia
                </p>
                <p class="text-blk feature-text">
                  Argitaragabea
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Santazilia.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
              </swiper-slide>
              &nbsp;
              <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Bizitza2.png")?>">
                </div>
                <p class="text-blk name">
                  Bidegileak: Joakin Lizarraga Elkanokoa (1748-1835).
                </p>
                  <p class="text-blk position">
                  2008
                </p>
                <p class="text-blk feature-text">
                  Juan Apecechea Perurena
                </p>
                <p class="text-blk feature-text">
                  Euskal Autonomia Erkidegoko Administrazioa. Kultura saila.
                </p>
                <p class="text-blk feature-text">
                  (Gasteiz)
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Bidegileak.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
              </swiper-slide>

      <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Kaustu.png")?>">
                </div>
                <p class="text-blk name">
                «Altxorraren bila: Lizarraga Elkanokoaren aberastasunak kaustu
                nahiz»
                </p>
                  <p class="text-blk position">
                  2008
                </p>
                <p class="text-blk feature-text">
                  Patxi Salaberri
                </p>
                <p class="text-blk feature-text">
                  <i>Iker</i> 21
                </p>
                <p class="text-blk feature-text">
                597-616
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Kaustu.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
              </swiper-slide>

      <swiper-slide>
              <div class="card">
                <div class="team-image-wrapper">
                  <img class="team-member-image" src="<?= base_url("assets/img/Iriarte.png")?>">
                </div>
                <p class="text-blk name">
                Joakin Lizarragaren lexikoaren azterketa
                </p>
                  <p class="text-blk position">
                  2022
                </p>
                <p class="text-blk feature-text">
                  Ibai Iriarte
                </p>
                <p class="text-blk feature-text">
                  Nafarroako Gobernua eta Euskaltzaindia
                </p>
                <p class="text-blk feature-text">
                Iruñea eta Bilbo
                </p>
                <div>
                <p><button class="btn" type="submit" onclick="window.open('<?= base_url("assets/txt/Iriarte.pdf")?>')"><i class="fa fa-download"></i> Jaitsi</button></p>
                </div>
              </div>
        </swiper-slide>
        </swiper-container>

      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
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

</div>
</div>
</div>          
</div>
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
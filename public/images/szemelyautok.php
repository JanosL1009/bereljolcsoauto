<?php 

$pagetitle="Személyautók - Bérelhető autók, autóbérlés Budapesten olcsón! ";
$active="szemelyautok";
require_once("template/header.php");


?>
<div class="page-header parallax" style="background-image:url(images/page_header3.jpg)">
<div class="container"><h1 class="page-title">Személyautók</h1><h4>Személyautó bérléssel forduljon hozzánk bizalommal!</h4>
</div></div>
<div class="utility-bar"><div class="container"><div class="row"><div class="col-md-8 col-sm-6 col-xs-8"> <ol class="breadcrumb"><li><a href="./">Kezdőlap</a></li>
<li class="active">Személyautók</li></ol></div> <div class="col-md-4 col-sm-6 col-xs-4"> </div></div></div></div>
<div class="actions-bar tsticky">
<div class="container">
<div class="row">
<div class="col-md-9 col-sm-9"><div class="btn-group pull-right results-sorter"><button type="button" class="btn btn-default listing-sort-btn">Rendezés</button>
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<span class="caret"></span>
<span class="sr-only">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu">
<li><a href="#">Ár (csökkenő)</a></li>
<li><a href="#">Ár (növekvő)</a></li></ul></div>
<div class="toggle-view view-format-choice pull-right">
<label>Nézet</label>
<div class="btn-group">
<a href="#" class="btn btn-default active" id="results-list-view"><i class="fa fa-th-list"></i></a>
<a href="#" class="btn btn-default" id="results-grid-view"><i class="fa fa-th"></i></a>
</div></div><button class="btn btn-default visible-xs" id="Show-Filters">Search Filters</button>
</div></div></div></div>
<div class="main" role="main">
<div id="content" class="content full">
<div class="container">
<div class="row">
<div class="col-md-3 search-filters" id="Search-Filters">
<div class="tbsticky filters-sidebar">
<h3>Bérelhető autók</h3>
<div class="accordion" id="toggleArea"><ul style="list-style-type:none"><li><a href="szemelyautok.php"><br>Személyautók</a></li><li><a href="kisbuszok.php"><br>Kisbuszok</a></li></ul></div>
</div></div>
<div class="col-md-9 results-container">
<div class="results-container-in">
<div class="waiting" style="display:none">
<div class="spinner"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div> </div>
</div> <div id="results-holder" class="results-list-view">
<?php// foreach(glob("images/cars01/*") as $file){ ?>
<h1>Üdvözöljük leendő Ügyfeleink között!</h1>
<p>Kérjük, a megfelelő <strong>bérautó</strong> kategória ( személyautó vagy kisbusz) kiválasztása után legyen kedves kiválasztani az Önnek leginkább megfelelő <strong>bérautót</strong> az adott kategórián belül, és ennek megfelelően töltse ki az <strong>autóbérlési</strong> űrlapot, mely az Ön <strong>bérautó</strong> típusigényeit tartalmazza</p>
<p>A feltüntetett árak napi bérlés esetén értendőek.</p>
<p>Hosszú távú illetve havi bérlés esetén, kérjük vegye fel velünk a
kapcsolatot telefonon vagy levélben, ahol –típustól és időtartamtól
függően- egyedi árajánlattal szolgálunk az Ön részére.</p>
<p>Köszönettel:</p><p>A Bérelj Olcsó Autót csapata</p>
<hr><div class="result-item format-standard">
<div class="result-item-image">
<a href="images/ford_fusion-berauto-budapesten-autoberles.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/ford_fusion-berauto-budapesten-autoberles.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a></div><div class="result-item-in"><h4 class="result-item-title"><a href="#">Ford Fusion 1,4</a></h4>
<div class="result-item-cont"><div class="result-item-block col2"><div class="result-item-pricing"><div class="price">4500&nbsp;FT/nap</div>
</div></div></div><div class="result-item-features"><ul class="inline">
<li>ajtók száma: 5</li><li>üzemanyag: benzin</li><li>elektromos ablakemelő: nincs</li><li>klíma: nincs</li><li>sebességváltó: manuális</li></ul>
</div></div> </div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/opel-agila-berelheto-auto-berlejolcsonautot.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/opel-agila-berelheto-auto-berlejolcsonautot.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a></div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Opel Agila</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">4500&nbsp;FT/nap</div>
</div></div></div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: nincs</li>
<li>sebességváltó: manuális</li>
</ul></div></div></div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/02.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/02.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a></div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Peugeot 206</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">4900&nbsp;FT/nap</div>
</div></div></div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>sebességváltó: manuális</li>
<li>klíma: van</li>
</ul></div></div></div>



<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/03.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/03.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a></div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="vehicle-details.htm">Suzuki Swift</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">4900&nbsp;FT/nap</div>
</div></div></div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul></div></div></div>
<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/05.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/05.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a></div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Citroen C3</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">4950&nbsp;FT/nap</div>
</div></div></div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul></div></div></div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/ford_fusion-berauto-budapesten-autoberles.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/ford_fusion-berauto-budapesten-autoberles.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a></div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Ford Fusion 1,4 tdci</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">5000&nbsp;FT/nap</div>
</div></div></div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul></div></div></div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/fiesta1-autoberles-budapesten-berauto.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/fiesta1-autoberles-budapesten-berauto.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a></div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Ford Fiesta</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">5500&nbsp;FT/nap</div>
</div></div></div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul></div></div></div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/nissan-micra-berelheto-auto-bereljolcsonautot-budapesten.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/nissan-micra-berelheto-auto-bereljolcsonautot-budapesten.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Nissan Micra</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">6000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/11.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/11.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Toyota Yaris 1.4 D</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">6000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/ford_fiesta-olcso-autoberles-budapesten-2017.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/ford_fiesta-olcso-autoberles-budapesten-2017.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Ford Fiesta</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">6000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/peugeot-206-autoberles-olcso-budapesten-2017.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/peugeot-206-autoberles-olcso-budapesten-2017.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Peugeot 206 1,4</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">6000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/opel-astra-g-berelheto-auto-budapest-2018.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/opel-astra-g-berelheto-auto-budapest-2018.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a></div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Opel Astra G 1,4</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">6000&nbsp;FT/nap</div>
</div></div></div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul></div></div></div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/Fiat-Grande-Punto-bereljolcsoautot-3-ajtos-autoberles.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/Fiat-Grande-Punto-bereljolcsoautot-3-ajtos-autoberles.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Fiat Grande Punto 1.2</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">6500&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:3</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/16.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/16.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Opel Astra
H 1.4 benzin</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">7000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/grandepunto-autberles-bereljolcsonautot-autoberles-budapest-2019.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/grandepunto-autberles-bereljolcsonautot-autoberles-budapest-2019.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Fiat Grande Punto 1.3 MultiJet D</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">7000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:3</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/23.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/23.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Volkswagen Polo</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">7000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>sebességváltó: manuális</li>
<li>klíma: van</li>
</ul>
</div>
</div>
</div>
<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/30.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/30.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Ford Connect 1,8 tdci</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">7000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>
<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/opel-astra-g-kombi-berelheto-auto-budapest.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/opel-astra-g-kombi-berelheto-auto-budapest.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Opel Astra G kombi</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">7000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/39.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/39.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Opel Corsa D</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">7000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/Renault-Megane-autoberles-budapest.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/Renault-Megane-autoberles-budapest.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Renault Megane 1,5 dci</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">7000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/mercedes-a170-berelhetoauto.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/mercedes-a170-berelhetoauto.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Mercedes A170</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">8000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/peugeot-307-berauto-budapest.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/peugeot-307-berauto-budapest.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Peugeot 307 kombi</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">8000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/26.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/26.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Volkswagen Caddy</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">8000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/toyota-prius-berelheto-auto-autoberles-budapesten-2017.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/toyota-prius-berelheto-auto-autoberles-budapesten-2017.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Toyota Prius Hybrid</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">8500&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: automata</li>
</ul>
</div>
</div>
</div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/toyota-previa-berauto-budapest-2018.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/toyota-previa-berauto-budapest-2018.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Toyota Previa</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">9000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: benzin</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: automata</li>
<li>szállítható személyek száma: 7 fő</li>
</ul>
</div>
</div>
</div>


<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/cars01/37.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/cars01/37.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Mitsubishi Grandis</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">9000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
<li>szállítható személyek száma: 7 fő</li>
</ul>
</div>
</div>
</div>
<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/zafira-autoberles-olcso-budapesten-2017.jpg" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/zafira-autoberles-olcso-budapesten-2017.jpg');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Opel Zafira</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">9000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>szállítható személyek száma: 7</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>

<div class="result-item format-standard">
<div class="result-item-image">
<a href="images/berelheto-autoink/sport_kombi-autoberles-budapesten-2017.png" data-rel="prettyPhoto[gallery]" class="media-box"><div class="" style="background:url('images/berelheto-autoink/sport_kombi-autoberles-budapesten-2017.png');background-repeat:no-repeat;background-size:contain;background-position:50% 50%;width:100%;height:180px">
</div></a>
</div>
<div class="result-item-in">
<h4 class="result-item-title"><a href="#">Volkswagen Golf 1,6 kombi</a></h4>
<div class="result-item-cont">
<div class="result-item-block col2">
<div class="result-item-pricing">
<div class="price">10000&nbsp;FT/nap</div>
</div>
</div>
</div>
<div class="result-item-features">
<ul class="inline">
<li>ajtók száma:5</li>
<li>üzemanyag: diesel</li>
<li>elektromos ablakemelő: van</li>
<li>klíma: van</li>
<li>sebességváltó: manuális</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-9 pull-right">
<div>
<h2>Az autóbérlés előnyeiről bővebben</h2>
<img src="images/bereljolcsoautot.hu.16nov.jpg" alt="Az autóbérlés előnyeiről bővebben" style="float:right;margin-left:10px;width:200px">
<p style="text-align:justify">
Sokan nagy tehernek érzik egy autó állandó fenntartásának költségét, és mindezt teljesen jogosan teszik, hiszen egy évre szerencsétlen esetben akár milliós tétel is lehet, amit rá kell költenünk autónkra. Pontosan ezért manapság egyre elterjedtebb az autóbérlés intézménye!
</p>
<p style="text-align:justify">
Miért fizetnénk úgy valamiért, hogy azt igazából ki sem használjuk teljes mértékben? Ha az <strong>autóbérlést</strong> választjuk, akkor kizárólag azokért a napokért fizetünk, amikor ténylegesen használjuk az autót, gondolva itt kisebb utazásokra, munkával kapcsolatos teendőkre, vagy akár egy családi nyaralásra. Az <strong>autókölcsönzéssel</strong> tehát rengeteg pénzt spórolhatunk, ha tudatosan választjuk ki azokat a napokat és eseményeket, amikor valóban szükségünk van egy gépjárműre.
</p>
<p style="text-align:justify">
Ha szeretne egy minden tekintetben profi <strong>autókölcsönzőből autót bérelni</strong>, akkor a legjobb helyen jár! Cégünk kínálatában számos gépjármű közül választhatja ki az Ön számára legmegfelelőbb darabokat, melyekért csak akkor kell fizetnie, amikor valóban hasznukat is veszi!
</p>
</div>
</div>
<div class="col-md-9 pull-right">
<div>
<h2>Szeretne elutazni családjával a hétvégén? Autóbérlés!</h2>
<img src="images/bereljolcsoautot.hu.17marc.jpg" alt="Szeretne elutazni családjával a hétvégén? Autóbérlés!" style="float:left;margin-right:10px;width:200px">
<p style="text-align:justify">
Hivatalosan is beköszöntött a tavasz! Bár a felhőtlen jó idő még várat magára, szerencsére a nappali átlaghőmérséklet már jóval 0°C felett ingadozik. Ennek köszönhetően egyre többen döntenek úgy, hogy akár családjukkal, akár barátaikkal elutaznak egy-egy hétvégére kirándulni, vagy felfedeznek egy várost!
</p>
<p style="text-align:justify">
Az <strong>autóbérlés</strong> ebben az esetben remek megoldást kínálhat, hiszen nem is gondolnánk, hogy hányan rendelkeznek vezetői engedéllyel, ugyanakkor egy gépjármű fenntartására nincsen lehetőségük. Az <strong>autóbérlés</strong> sokak számára tehát ideális opció lehet arra, hogy komfortosan és gyorsan elérhessék a kitűzött célt, ráadásul az utazási költségek is jóval kedvezőbbek lehetnek így! Természetesen az <strong>autóbérlés</strong> azok számára is ideális megoldást kínál, akiknek a gépjárművük éppen szervizben van, vagy más okból nem tudnak azzal közlekedni.
</p>
<p style="text-align:justify">
Egy hétvégi utazás remek kikapcsolódás lehet, és segíthet újult erővel feltöltődni az egész család számára! Ha Ön is szeretne autót bérelni kedvező feltételek mellett, keressen minket bizalommal!
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Recipe",
  "name": "Olcsó autóbérlés Budapesten",
  "author": "Bérelj olcsón autót",
  "image": "http://bereljolcsoautot.hu/images/bereljolcsoautot.hu.16okt.jpg",
  "description": "Nagy létszámú autó flottánkkal várunk minden kedves autót bérelni kívánó személyt!",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4",
    "reviewCount": "276",
    "bestRating": "5",
    "worstRating": "1"
  },
  
  "jármű": {
    "@type": "Bérelhető autó",
    "name": "Ford Fusion",
    "Ajtók száma": "5",
    "Üzemanyag": "benzin",
    "Ár": "4500 FT"
  }
  
}
</script>
<?php 
require_once("template/footer.php")

?>
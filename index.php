<!DOCTYPE html>
<html lang="en">
<head>

  <title>Spektar Plus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdn.bootcss.com/hover.css/2.1.1/css/hover-min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Spektar Plus</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Ko Smo mi?</a></li>
        <li><a href="#services">Usluge</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#posao">Naš Posao</a></li>
        <li><a href="#contact">Kontakt</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Menjačnica "Spektar Plus"</h1> 
  <p>Specijalizovana radnja</p> 
  <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover text-center">
  <caption class="text-center" style="background-color=white;">Kursna lista na dan <?php echo  date("d-m-Y")?>.</caption>
  <thead>
    <tr>
      <th  class="text-center">Valute</th>
      <th class="text-center">Otkup</th>
      <th class="text-center">Prodaja</th>
      <th class="text-center">Srednji kurs NBS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>EUR</td>
      <td>119,50</td>
      <td>121,00</td>
      <td>120,42</td>
    </tr>
    <tr>
      <td>CHF</td>
      <td>106,00</td>
      <td>110</td>
      <td>109.09</td>
    </tr>
    <tr>
      <td>USD</td>
      <td>101.00</td>
      <td>105,00</td>
      <td>103.28</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container parallax">
  <div class="row">
    <div class="col-sm-8">
      <h2>Ko smo mi ?</h2><br>
      <p class="text-bg">Menjačnica " Spektar Plus" je ovlašćeni

      menjač NBS za obavljanje menjačkih poslova.
      
      08.06.2004 godine je počela sa radom.
      
      Februara 2017 godine, menjačnica dobija dozvolu NBS
      
      za obavljanje poslova platnog prometa.
      
      Oktobra 2017 godine, menjačnica dobija dozvolu za RIA transfer novca</p>
     </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span> 
    </div>
  </div>
</div>
 
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>Usluge</h2> 
  <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
  <br>
  <div class="row slideanim">
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-user-md fa-4x" aria-hidden="true"></i> 
      <p>Prodaja putnog zdravstvenog osiguranja</p>
    </div>
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
     <i class="fa fa-eur  fa-4x" aria-hidden="true"></i> 
      <p>RIA transfer novca slanje i prijem novca</p>
    </div>
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-money fa-4x" aria-hidden="true"></i> 
      <p>Menjačko poslovanje</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-lock fa-4x" aria-hidden="true"></i> 
      <p>Kontrola novčanica</p>
    </div>
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right">
    <i class="fa fa-usd fa-4x" aria-hidden="true"></i>
      <p>Platni promet</p>
    </div>
    <div class="col-sm-12 col-md-4 hvr-sweep-to-right"> 
      <i class="fa fa-thumbs-up fa-4x" aria-hidden="true"></i>
      <p>Plaćajte uz minimalnu proviziju</p>
    </div>
  </div>
</div>

<!-- Container (Blog Section) -->
<div id="blog" class="container-fluid text-center bg-grey">
  <h2>Blog</h2><br> 
  <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="assets/img/arch.jpg" alt="Paris" width="400" height="300">
        <p><strong>Title</strong></p> 
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="assets/img/arch.jpg" alt="New York" width="400" height="300">
        <p><strong>Title</strong></p> 
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="assets/img/arch.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Title</strong></p> 
      </div>
    </div>
  </div><br>
  

<!-- Container (Businessg Section) -->
<div id="posao" class="container-fluid parallax2">
  <div class="text-center">
    <h2>Naš posao</h2> 
    <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Menjačko poslovanje</h1>
        </div>
        <div class="panel-body">
          <p> Novac menjajte na sigurnom mestu - brzo, jednostavno i diskretno</p>
        </div>
         
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Platni <br>promet </h1>
        </div>
        <div class="panel-body">
          <p>Plaćanje svih obaveza (računi, struja, plin, grejanje, telefoni (fiksni i mobilni).</p>
        </div>
         
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Putničko osiguranje</h1>
        </div>
        <div class="panel-body">
          <p>U slučaju iznenadne bolesti ili povrede, putničko zdravstveno osiguranje garantuje vam pokriće</p>
        </div>
      
      </div>            
    </div>    
  </div>

  <div class="row slideanim slide">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>RIA transfer novca</h1>
        </div>
        <div class="panel-body">
          <p>Više od 30 godina Ria Money Transfer sa velikim uspehom pruža brz, siguran i povoljan način za prijem i slanje novca korisnicima širom sveta.</p>
        </div>
        
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Fotokopiranje crno-belo ili u boji</h1>
        </div>
        <div class="panel-body">
          <p>Posedujemo aparate za fotokopiranje Canon, Ricoh i Hp najnovije generacije i možemo slobodno reći da su u nekim slučajevima naše kopije bolje od originala</p>
        </div>
        
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Kontrola novčanica</h1>
        </div>
        <div class="panel-body">
          <p>Detektor ima nekoliko nacina detekcije: infra crvenu kontrolu; magnetnu kontrolu; kontrola transparetnosti papira; kontrola širine novcanice;</p>
        </div>
         
      </div>      



      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey wow bounceInRight">
  <h2 class="text-center">Kontakt</h2>
  <div class="line-holder">
    <div class="the-line">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-5">
      <p>Kontaktirajte nas i ubrzo cemo Vam se javiti.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Srbobran</p>
      <p><span class="glyphicon glyphicon-phone"></span> 064 55555555</p>
      <p><span class="glyphicon glyphicon-envelope"></span> email@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Ime i Prezime" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Poruka" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Posalji</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<script src="assets/js/gmap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHi9TK59E_qaH8huUApx5H9-3WhENPEFA&callback=myMap"></script>
 

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Theme Made By <a href="#" title="Visit me">Stevan Pivnicki</a></p>
</footer>

<script src="assets/js/script.js"></script>

</body>
</html>

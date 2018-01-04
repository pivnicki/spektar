<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Theme Company Page</title>
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
  
  <style>
    @import url("https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css");
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  

  .line-holder{
      width:30px;
      margin: 0 auto;
      margin-top: -14px;
      margin-bottom: 15px;
}
.the-line{
 border:solid #f4511e 3px;
 width:100%;
}
  .jumbotron {
      background-color: /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#feccb1+0,f17432+32,ea5507+89,fb955e+100 */
background: rgb(254,204,177); /* Old browsers */
background: -moz-linear-gradient(-45deg, rgba(254,204,177,1) 0%, rgba(241,116,50,1) 32%, rgba(234,85,7,1) 89%, rgba(251,149,94,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg, rgba(254,204,177,1) 0%,rgba(241,116,50,1) 32%,rgba(234,85,7,1) 89%,rgba(251,149,94,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg, rgba(254,204,177,1) 0%,rgba(241,116,50,1) 32%,rgba(234,85,7,1) 89%,rgba(251,149,94,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feccb1', endColorstr='#fb955e',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  .parallax {
    /* The image used */
    background-image: url('assets/img/man.png');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax2 {
    /* The image used */
    background-image: url('assets/img/bm.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.text-bg{
    background-color: #0e0e0e;
    opacity: .9;
    padding: 1em;
    border: solid 1px #fbf9f9;
}

tr{
    background-color: aliceblue;
    color:#000;
}
caption{
background-color:bisque;
}

h1 {
  text-decoration: none;
  position: relative; 
}
h1:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0%;
  border-bottom: 2px solid #fff;
  transition: 0.4s;
}
h1:hover:after {
  width: 100%;
}
  </style>
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
        <li><a href="#posao">Nas Posao</a></li>
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
    <div class="col-sm-4 hvr-sweep-to-right">
    <i class="fa fa-user-md fa-4x" aria-hidden="true"></i> 
      <p>Prodaja putnog zdravstvenog osiguranja</p>
    </div>
    <div class="col-sm-4 hvr-sweep-to-right">
     <i class="fa fa-eur  fa-4x" aria-hidden="true"></i> 
      <p>RIA transfer novca slanje i prijem novca</p>
    </div>
    <div class="col-sm-4 hvr-sweep-to-right">
    <i class="fa fa-money fa-4x" aria-hidden="true"></i> 
      <p>Menjačko poslovanje</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4 hvr-sweep-to-right">
    <i class="fa fa-lock fa-4x" aria-hidden="true"></i> 
      <p>Kontrola novčanica</p>
    </div>
    <div class="col-sm-4 hvr-sweep-to-right">
    <i class="fa fa-usd fa-4x" aria-hidden="true"></i>
      <p>Platni promet</p>
    </div>
    <div class="col-sm-4 hvr-sweep-to-right"> 
      <i class="fa fa-thumbs-up fa-4x" aria-hidden="true"></i>
      <p>Plaćajte uz minimalnu proviziju</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
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
  

<!-- Container (Pricing Section) -->
<div id="posao" class="container-fluid parallax2">
  <div class="text-center">
    <h2>Nas posao</h2> 
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
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
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
<script>
function myMap() {
  var icon={
        url: 'http://image.flaticon.com/icons/svg/252/252025.svg',
        scaledSize: new google.maps.Size(80, 80),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(32,65),
        labelOrigin:  new google.maps.Point(40,33),
      }; 
      var markerLabel = 'SPECTRUM ';      
var myCenter = new google.maps.LatLng(45.548110, 19.793515);
var mapProp = {center:myCenter, zoom:18, scrollwheel:false, draggable:false,
 mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter,icon:icon, label: {
      text: markerLabel,
      color: "#000",
      fontSize: "16px",
      fontWeight: "bold"
    }});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHi9TK59E_qaH8huUApx5H9-3WhENPEFA&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Theme Made By <a href="https://www.w3schools.com" title="Visit me">Stevan Pivnicki</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})




new WOW().init();
</script>

</body>
</html>

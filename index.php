<!DOCTYPE html>
<html>
<title>Sexta Burger</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    
    <!-- javascripts -->
    <script src="css/jquery.js"></script>
    <script src="css/bootstrap.min.js"></script>

    <!-- nice scroll -->
    <script src="css/jquery.scrollTo.min.js"></script>
    <script src="css/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="css/scripts.js"></script><!--Menu-->
    <script src="css/angular1.3.14.min.js"></script>

    <!--Ultimo estilo-->
    <link href="css/estilo.css" rel="stylesheet" />
    <link href="css/chk.css" rel="stylesheet" />
    <link href="css/wsp.css" rel="stylesheet" />
     <link href="css/boxicons.min.css" rel="stylesheet" />
     <link href="css/boxicons.css" rel="stylesheet" />
     <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Color style -->
        <link rel="stylesheet" href="css/color.css">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("SextaBurguerinfo/Preparacion2.jpg");
  min-height: 80%;
}


.modalDialog {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
.modalDialog:target {
  opacity:1;
  pointer-events: auto;
}
.modalDialog > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
  -webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
}
.close {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }


.topnav {
  overflow: hidden;
  float: left;
}

.topnav a {
  float: left;
  display: block;
  
  text-align: center;
  
  text-decoration: none;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}



 .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
   a.icon {
    float: right;
    display: block;
    font-size: 22px !important;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
   .icon {
    position: absolute;
    right: 0;
    top: 0;
    font-size: 22px !important;
  }
  .topnav {
    float: none;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: right;

  }
  
  .logoProyectos{
      height:900px;
  }
  
}
}
</style>
<body onload="onloadddd()">
<a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20hacer%20un%20pedido%EF%B8%8F" class="btn-wsp" target="_blank">
    <i class='bx bxl-whatsapp'></i>
  </a>


 <!-- Preloader --> 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <!--End Preloader -->


<!-- Navbar (sit on top) -->
<div class="w3-top w3-right">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    
    

    
    <!-- Float links to the right. Hide them on small screens -->
    <div class="topnav " id="myTopnav" >
      <a href="#" class="w3-bar-item w3-button" style="width: 20%" onclick="myFunction()"><img src="SextaBurguerinfo/logo.png" width="57px%"></a>
      <a href="#menu" class="w3-bar-item w3-button" onclick="myFunction()">MENU</a>
    <a href="#about" class="w3-bar-item w3-button" onclick="myFunction()">ACERCA DE</a>
    <a href="#ubicacion" class="w3-bar-item w3-button" onclick="myFunction()">UBICACION</a>
    <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20hacer%20un%20pedido%EF%B8%8F" target="_blank" onclick="myFunction()" class="w3-bar-item w3-button"><i class='bx bxl-whatsapp'></i></a>
    <a href="https://web.facebook.com/sexta.burger" class="w3-bar-item w3-button" target="_blank" onclick="myFunction()"><i class='bx bxl-facebook' ></i></a>
    <a href="https://www.instagram.com/sexta_burger/" class="w3-bar-item w3-button" target="_blank" onclick="myFunction()"><i class='bx bxl-instagram' ></i></a>
      
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function myFunction2() {
  var x = document.getElementById("myTopnav");
    x.className = "topnav";

}

</script>
    </div>
    <a href="javascript:void(0);" class="icon w3-padding" onclick="myFunction()" style="color: white;">
    <i class="fa fa-bars"></i>
  </a>
  </div>


</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Atendiendo de 10am a 10pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <img src="SextaBurguerinfo/logo.png" width="62%">
    <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Dejame ver el Menu</a></p>
  </div>
</header>


<div class="w3-container  w3-blue-grey" id="new">
  <div class="form-group">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:10px">Nuevo</h1>
    <div class="col-md-6 w3-blue-grey" >
                       <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- carousel inner -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="SextaBurguerinfo/Pulledporkburger.png" alt="Burger">

                            <div class="carousel-caption">
                                <h2>PulledPork Burger</h2>
                                <h3>Con carne desilachada de Cerdo</h3>

                                <p>En lo más profundo del sur de los Estados Unidos, en los Estados de Carolina, Tennessee y Alabama,
 donde se escucha mucha música country, también podemos encontrar una excelente gastronomía, llena del mejor sabor que te puedas imaginar. 🇺🇸🍔🍟🐖
.</p>

                                <div class="info_btn_shadow">
                                    <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20PulledPorkBurger🍔%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="SextaBurguerinfo/PullerPorkBurger.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>PulledPork Burger</h2>
                                <h3>Con carne desilachada de Cerdo</h3>

                                <p>Arriba en @sexta_burger el famoso PULLED PORK, es un corte de cerdo el cual es preparado en una cocción a 
baja temperatura durante muchas horas, por lo que esto hace que la carne quede tan blanda que se desgarre o se rompa fácilmente en pedacitos. 😳🤤</p>

                                <div class="info_btn_shadow">
                                    <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20PulledPorkBurger🍔%EF%B8%8F" target="_blank"  class="info_btn">Pedir ya!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="SextaBurguerinfo/PullerPork.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>PulledPork Burger</h2>
                                <h3>Con carne desilachada de Cerdo</h3>

                                <p>Nuestro Pulled Pork es preparado con una lenta cocción y adobado el dia anterior con especias secretas del Chef para brindar una experiencia única en cada Pulled Pork Burger 👨‍🍳🍔.</p>

                                <div class="info_btn_shadow">
                                    <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20PulledPorkBurger🍔%EF%B8%8F" target="_blank"  class="info_btn">Pedir ya!</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- carousel inner end -->
                </div><!-- Carousel end-->
  </div>


  <div class="col-md-6 w3-blue-grey" >
                       <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                    </ol>

                    <!-- carousel inner -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="SextaBurguerinfo/papaspulledpork2.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Papas PulledPork</h2>
                                <h3>Con carne desilachada de Cerdo</h3>

                                <p>La combinacion perfecta de papas rusticas de la casa con corte casero, abundante cerdo desilachado, salsa de queso y un toque de ciboullete.🍟</p>

                                <div class="info_btn_shadow">
                                    <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20PulledPorkPapas🍟%EF%B8%8F" target="_blank"  class="info_btn">Pedir ya!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="SextaBurguerinfo/papaspulledpork.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Papas PulledPork</h2>
                                <h3>Con carne desilachada de Cerdo</h3>

                                <p>Un picoteo perfecto para poder disgustarlo y probarlo a cualquier hora.🍟🍟</p>

                                <div class="info_btn_shadow">
                                    <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20PulledPorkPapas🍟%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- carousel inner end -->
                </div><!-- Carousel end-->
  </div>




</div>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">MENU</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="pizza();" id="myLink" style="color: white; ">
        <div class="w3-col s6 tablink w3-padding-large w3-hover-red"><b>BURGER</b></div>
      </a>
      <a href="javascript:void(0)" onclick="pasta();" style="color: white; ">
        <div class="w3-col s6 tablink w3-padding-large w3-hover-red"><B>AGREGADOS</B></div>
      </a>
      
    </div>

    <div id="Pizza" class="w3-container w3-padding-32 w3-black" style="display: block;">
      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/ClassicSextaBurger.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Classic Sexta Burger</b> <span class="w3-right w3-tag w3-dark-grey w3-round" style="margin-top: 0px;">Simple:$5000 Doble:$6000</span></h1>
      <p class="w3-text-grey">Pan artesanal, burger 150 grs, queso cheddar, tocino crispy, lechuga orgánica y nuestra Salsa SB. </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20ClassicSextaBurger🍔%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>
      
      
      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/GultroBurger.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Gultro Burger</b> <span class="w3-right w3-tag w3-dark-grey w3-round" style="margin-top: 0px;">Simple:$5500 Doble:$6500</span></h1>
      <p class="w3-text-grey">Pan artesanal, burger 150 grs, queso cheddar, champiñones salteados, pepinillos, tocino crispy y nuestra salsa SB.  </p>
        </div>
      <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20GultroBurger🍔%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
                                    
                                
             
      </div>
      
      
      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/MachaliBurger.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Machali Burger</b> <span class="w3-right w3-tag w3-dark-grey w3-round" style="margin-top: 0px;">Simple:$5600 Doble:$6600</span></h1>
      <p class="w3-text-grey">Pan artesanal, burger 150 grs, queso cheddar, cebolla caramelizada, aros de cebolla, tocino crispy y nuestra salsa SB.   </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20MachaliBurger🍔%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>
      

      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/NogalesBurger.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Nogales Burger</b> <span class="w3-right w3-tag w3-dark-grey w3-round" style="margin-top: 0px;">Simple:$5000 Doble:$6000</span></h1>
      <p class="w3-text-grey">Pan artesanal, burger 150 grs, champiñones salteados, tocino crispy, cebolla carameliza y nuestra salsa Barbacoa.    </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20NogalesBurger🍔%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>

      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/RancaguaBurger.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Rancagua Burger</b> <span class="w3-right w3-tag w3-dark-grey w3-round" style="margin-top: 0px;">Simple:$5600 Doble:$6600</span></h1>
      <p class="w3-text-grey">Pan artesanal, burger 150 grs, queso cheddar, lechuga, pepinillos, cebolla morada,  tomate y nuestra salsa SB.    </p>
        </div>
            <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20RancaguaBurger🍔%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a> 
      </div>

      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/OlivarBurger.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Olivar Burger</b> <span class="w3-right w3-tag w3-dark-grey w3-round" style="margin-top: 0px;">Simple:$5500 Doble:$6500</span></h1>
      <p class="w3-text-grey">Pan artesanal, burger 150 grs, queso cheddar, lechuga orgánica, champiñones salteados y cebolla caramelizada.     </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20OlivarBurger🍔%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>

      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/Pulledporkburger.png" width="100%" height="150px">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Pulledpork Burger</b> <span class="w3-tag w3-red w3-round">Nuevo!</span><span class="w3-right w3-tag w3-dark-grey w3-round">Simple:$6000 Doble:$7000</span></h1>
      <p class="w3-text-grey">Pan artesanal, pulled pork(cerdo deshilachado), queso cheddar, tocino crispy, pepinillos, aros de cebolla y nuestra salsa Barbacoa. </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20PulledPorkBurger🍔%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>
      
    
      <div class="col-sm-6">
        
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b></b> <span class="w3-tag w3-red w3-round"></span><span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
      <p class="w3-text-grey"> </p>
        </div>
             
      </div>

      
      
    </div>

    <div id="Pasta" class="w3-container w3-padding-32 w3-black" style="display: none;">
      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/papas3.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Papas Rusticas 1</b><span class="w3-right w3-tag w3-dark-grey w3-round">$1300</span></h1>
      <p class="w3-text-grey">Caja Papas fritas rusticas con salsa Verde. </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20PapasRusticas🍟%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>
      

      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/papas2.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Papas Rusticas 2</b><span class="w3-right w3-tag w3-dark-grey w3-round">$1300</span></h1>
      <p class="w3-text-grey">Caja Papas fritas rusticas con salsa Secret. </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20PapasRusticas🍟%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>

      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/papas1.jpg" width="100%">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Papas Rusticas 3</b><span class="w3-right w3-tag w3-dark-grey w3-round">$1300</span></h1>
      <p class="w3-text-grey">Caja Papas fritas rusticas con salsa SB. </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20PapasRusticas🍟%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>

      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/aroscebolla.jpg" width="100%" height="200px">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Aros de Cebolla</b><span class="w3-right w3-tag w3-dark-grey w3-round">$1000</span></h1>
      <p class="w3-text-grey">Porcion de  unidades de aros de cebolla. </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20ArosdeCebolla🍟%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>

      <div class="col-sm-6">
        <div class="col-sm-4">
          <img src="SextaBurguerinfo/papaspulledpork.jpg" width="100%" height="200px">
        </div>
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b>Papas Rusticas PulledPork</b> <span class="w3-tag w3-red w3-round">Nuevo!</span><span class="w3-right w3-tag w3-dark-grey w3-round">$3500</span></h1>
      <p class="w3-text-grey">Papas fritas rusticas con la exquisita carne de cerdo desilachada de sabor unico. </p>
        </div>
             <a href="https://api.whatsapp.com/send?phone=56952078667&text=Hola!%20Deseo%20pedir%20la%20PulledPorkPapas🍟%EF%B8%8F" target="_blank" class="info_btn">Pedir ya!</a>
      </div>
      
      <div class="col-sm-6">
        
        <div class="col-sm-8">
          <h1 style="margin-top: 0px;"><b></b> <span class="w3-tag w3-red w3-round"></span><span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
      <p class="w3-text-grey"> </p>
        </div>
             
      </div>
      
    
    
    
  </div>
    
    
</div>

<script type="text/javascript">
  function pizza() {
  document.getElementById("Pizza").style.display = "block";
  document.getElementById("Pasta").style.display = "none";

}

function pasta() {
  document.getElementById("Pizza").style.display = "none";
  document.getElementById("Pasta").style.display = "block";

}

</script>

<div class="w3-container w3-black w3-grayscale w3-xlarge" id="">
  <div class="w3-content">
    <div class="form-group w3-black" style="text-align: center;" id="">
  
    <a href="SextaBurguerinfo/MenuSextaBurger.pdf" target="_blank" class="w3-button w3-black">Tambien puedes descargar nuestro menu<br> mas detallado aqui!<i class='bx bxs-download'></i></a>
</div>
    
    
  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">NOSOTROS</h1>
    <div class="col-md-6" style="text-align: center;">
      <img src="SextaBurguerinfo/logo.jpg" width="74%">
    </div>
    <div class="col-md-6">
      
    <p>Somos Sexta Burger, y tenemos un compromiso con cada uno de nuestros clientes. Brindar una experiencia única de sabor con cada una de nuestras burgers. 
Si bien, no puedes comprar la felicidad, puedes comprar una Sexta Burger, lo que vendría siendo lo mismo. 
Cada uno de nuestros productos y acompañamientos son obra de las constantes pruebas en nuestra cocina para entregar un producto único e irresistible.<br><br>

Nuestra carne es 100% certificada y su proceso de molienda se realiza a diario para conservar su sabor tan único y especial que nos representa.<br><br><br><br> </p>
    </div>
    
    
    <h1><b>Opening Hours</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Lunes 17.00 - 21.00</p>
        <p>Martes 17.00 - 21.00</p>
        <p>Miercoles 17.00 - 21.00</p>
        <p>Jueves 17.00 - 21.00</p>
      </div>
      <div class="w3-col s6">
        <p>Viernes 17.00 - 21.00</p>
        <p>Sabado 16.00 - 21.00</p>
        <p>Domingo 16.00 - 21.00</p>
      </div>
    </div>
    
  </div>
</div>


<!-- Contact -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge" id="ubicacion">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">UBICACION</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.955392116215!2d-70.7680783492478!3d-34.198616143587635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96635d2a5d653e11%3A0x5a707dce7b86255!2sOscar%20Castro%2044%2C%20Olivar%2C%20O&#39;Higgins!5e0!3m2!1ses-419!2scl!4v1612123017122!5m2!1ses-419!2scl" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Creado por <a href="https://www.keizandev.cl/" title="W3.CSS" target="_blank" class="w3-hover-text-green">Keizandev</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();

function onloadddd() {
  if ($('#loading').length) {
      $('#loading').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
}



</script>

</body>
</html>

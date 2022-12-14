<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stylelic.css">

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>       
.orar{
  height: 100vh;
  width: 100%;
  background: url("imagini/orar_clasee.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  font-family: 'Papyrus', serif;
  z-index:1;
}

.orar .text p{
  z-index:2;
  color: #000;
  text-align: center;
  line-height: 1150px;
  font-weight: 950;
  font-size: 50px;
  text-transform: uppercase;
  font-style: italic;
}
.functional{
  height: 150vh;
  width: 100%;
  background-color:#E8E8E8;
  font-family: Apple Chancery, cursive;
  margin:auto;
  display: flex;
  align-items: center;
}

.functional .text p{
  color: #000;
  text-align: center;
  padding: 0 15px;
  font-weight: 100;
  font-size: 20px;
  font-style: italic;
  
}
.functional .text p span{
  font-weight: 950;
 
}
.button1 {
  transition-duration: 0.4s;
  margin-top: 50px;
  padding: 15px 16px;
  color: #535252;
  text-decoration: underline;
  font-style: italic;
  font-size: 18px;

}

.button1 span:hover {
  color:  #2a292e;
  text-decoration: overline;
}

@media (max-width: 532px){
  .functional {
    height: 270vh;
  }
}

</style>  
   </head>
<body>

 <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar">
                            <div class="time">
                                <i class="far fa-clock"></i>
                                <h4>8:00 - 12:00</h4>
                                <p>Luni - Vineri</p>
                            </div>
                            <div class="time">
                                <i class="fa fa-phone-alt"></i>
                                <h4>(+40) 770 779 888</h4>
                                <p>Rela??ii clien??i</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
  <!-- Move to top button -->
  <div class="scroll-button">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
  </div>
  <!-- Navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="home.php">Body</br>Techs</a></div>
      <ul class="menu">
      <?php
			if(isset($_SESSION["useruid"])) {
				echo "<li><a href='galerie.php'>Galerie LIVE</a></li>";
			}
            ?>
      <li>
       <div class="dropdown">
            <a href="" class = "current">Servicii <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="servicii_clase.php">Clase</a>
                <a href="servicii_functional.php">Functional</a>
                <a href="servicii_cross.php">Cross-training</a>
            </div>
        </div> 
        </li>
          <li><a href="orar_clase.php">Orar</a></li>
          <li><a href="tarif_clase.php">Tarife</a></li>
		   <?php
			if(isset($_SESSION["useruid"])) {
				echo "<li><a href='magazin.php'>Produse</a></li>";
			}
			else{
				echo "<li><a href='login.php'>Produse</a></li>";
			}
		  ?>
		  <li><a href="instructori.php">Despre noi</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <?php
			if(isset($_SESSION["useruid"])) {
				echo "<li><a href='profil.php'>Bun??, " . $_SESSION["useruid"] . "</a></li>";
				echo "<li><a href='includes/logout.inc.php'><i class='fas fa-sign-out-alt'></i></a></li>";
			}
			else{
				echo "<li><a href='login.php'><i class='fa fa-user'></i></a></li>";
			}
		  ?>
		  <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
      </ul>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>
      </div>

      <section class="orar" id="orar">
        <div class="text">
          <p>Clase</p>
        </div>
      </section>
      <section class="functional" id="functional">
        <div class="text">
          <p><span >Circuit Training</span>
          <br>
Este o combina??ie ??ntre fitness-ul de tip cardio ??i antrenamentul de rezisten????.
Clasa Circuit Training, utilizeaz?? o varietate de exerci??ii ??i echipamente (coard??, gantere, mingi medicinale, aparate cu greut????i sau propria greutate a corpului) pentru a genera o mi??care c??t mai complex?? din punct de vedere motric, la o intensitate ridicat??. Mi??c??rile se ??in lan??, dup?? cum reiese ??i din nume, iar pauza este una activ??. Schimbul dintre exerci??ii substituie timpul de revenire. Antrenamentul ??n Circuit este un tip de efort foarte eficient, care cre??te anduran??a sportivului ??n timp ??i-i aduce un plus de for????.
<br><br/>
<span>Body Shape </span>
<br>
Clasa de Body Shape reprezint?? un antrenament complet, ideal pentru men??inerea unui stil de via??a activ.
??n timpul antrenamentului se insist?? pe tonifierea ??i definirea abdomenului. Reprezint?? un mod pl??cut de ardere a gr??similor ??i totodat?? practicat ??n mod constant, ajut?? la consolidarea musculaturii spatelui ??i corectarea posturii.
Mu??chii fesieri, bra??ele ??i picioarele sunt sculptate prin antrenament. ??ntreg corpul lucreaz?? la des??v??r??irea formei perfecte pe care dorim s?? o vedem ??n oglind??.
<br><br/>
<span>Burning Cardio</span>
<br>
Este un antrenament ce se adreseaz?? tuturor persoanelor care doresc s??-??i ??mbun??t????easc?? aspectul fizic printr-o tehnic?? de lucru bazat?? pe eforturi de scurt?? durat?? ??i intensitate ridicat??. 
<br><br/>
<span>ABS Workout</span>
<br>
ABS Workout este un antrenament potrivit persoanelor care doresc s?? pun?? accent pe modelarea p??r??ii superioare a corpului.
Prin exerci??iile propuse se ??nt??re??te musculatura spatelui ceea ce duce la corectarea posturii. Este perfect pentru cei care opteaz?? ??n favoarea unui antrenament mai intens.
Arderea caloriilor nu va fi deloc neglijat?? ??n aceasta or??.  
<br><br/>
<span>Mix Workout </span>
<br>
Vinerea aduce cu sine acel feeling de relaxare.
Mix Workout este perfect pentru cei care doresc s?? se men??in?? activi, dar f??r?? a-??i solicita organismul prea tare. Antrenamentul este ideal pentru remodelare corporal??.
Conceput la o intensitate redus??, acesta ??ncheie perfect o s??pt??m??n?? plin?? de activitate.
<br><br/>
<span>Pilates </span>
    <br>
Pilates aduce ??n fa???? armonia dintre ritmul respira??iei ??i mi??c??rile corpului.
Antrenamentele se refer?? la un sistem aerobic care pune accentul pe dezvoltarea principalilor muschi ai coloanei vertebrale pentru a ob??ine ??i men??ine o direc??ie ??i o pozi??ie c??t mai corect?? a corpului.
Datorit?? complexit????ii, contribuie semnificativ la ameliorarea durerilor de spate (dureri lombare) ??i este foarte eficient pentru oricine dore??te o ??mbun??t????ire a echilibrului fizic ??i a mobilit????ii articulare.
</p>
          <div class="funct-button">
            <a href="servicii_functional.php" class="button1" style="float: right;"><span>??nainte ></span></a>
	        </div>

	        </div>
        </div>
      </section>



      <!-- Footer Section -->
  <!-- Footer Start -->
  <div class="footer">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="#" class="footer-logo"><em>B<span>o</span>D<span>y</span> T<span>e</span>C<span>h</span>S</a>
                        <h3>Strada Cire??ilor 13, Cluj-Napoca, Rom??nia</em></h3>
                        <div class="footer-menu">
                            <p>(+40) 770 779 888</p>
                            <p>bodytechsstudio@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="copy">
                            <p>&copy; <a href="#"><em>Body Techs</em></a></p>
                        </div>
                        <div class="design">
                            <p>Designed By <a href="home.html"><em>LucaRamona</em></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

  <script src="scriptlicenta.js"></script>
</body>
</html>

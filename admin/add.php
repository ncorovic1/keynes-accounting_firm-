<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Keynes</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="../vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/footer.css" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="../css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/admin.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <link rel="icon" href="../img/logo2.png">
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                              <img class="logo-img logo-img-main" src="../img/logotamni2.png" >
                               <img class="logo-img logo-img-active" src="../img/logo2.png">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="browse.php">
                                    Pregled/Brisanje</a></li>   
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="add.php">
                                    Dodavanje</a></li>  
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="update.php">
                                    Izmjena</a></li>   
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="">
                                    Log Out</a></li>   
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="../img/1920x1080/usluge.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">Usluge</h1>
                <p>Knjigovodstvena agencija za mala i srednja preduzeca, udruzenja, <br/>ugostiteljske radnje, obrte i dr.</p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->
        
        <div class="content-lg container">
<!--
            <div class="usluga">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Finansijsko Računovodstvo</h2>
                    </div>
                </div>

                <div class="lista">
                    <p>Vođenje poslovnih knjiga podrazumijeva sljedeće poslove i radnje:</p>
                    <ul class="lista-stavke">
                        <li>Vođenje glavne knjige</li>
                        <li>Vođenje analitičkih evidencija: kupaca, dobavljača, blagajne, tekućih računa, robe, materijala, lična primanja, osnovna sredstva</li>
                        <li>Vođenje pomoćnih evidencija: Knjiga ulaznih faktura, knjiga izlaznih faktura, knjiga blagajne</li>
                        <li>Obračun PDV-a, poreza na dohodak građana po ugovorima: o djelu, autorstvu, zakupu nepokretnosti, zakupu pokretnih stvari</li>
                        <li>Obračun akcize</li>
                        <li>Sastavljanje poreskih prijava i drugih obračuna</li>
                        <li>Izvod otvorenih stavki kupaca, dobavljača</li>
                        <li>Izvještaj analitičkih kartica na dan, za period</li>
                        <li>Sastavljanje zaključnog lista i bruto bilansa na željeni datum</li>
                        <li>Sastavljanje godišnjeg finansijskog izvještaja za mala i srednja pravna lica i preduzetnike</li>
                        <li>Sastavljanje vanrednih finansijskih izveštaja: likvidacioni, bilans pripajanja, bilans spajanja, diobni bilansi,  sastavljanje finansijskih izveštaja u svrhu dobijanja kredita od banaka</li>
                        <li>Sastavljanje poreskog bilansa i poreske prijave</li>
                        <li>Obračun poreza na imovinu</li>
                        <li>Sastavljanje godišnje prijave na dohodak gradjana</li>
                    </ul>
                </div>
                <button class="delete_dugme">Brisi uslugu</button>
            </div>
-->
            <div class="nova_usluga">
                <hr>
                <form method="get" id="role">   
                    <h3 class="usluga_naslov">Nova Usluga</h3>
                    <div>
                        <textarea type="text" placeholder="Tekst Usluge" id="tekst_usluge" rows="15" name="yes"
                                  style="display: none";></textarea>
                    </div>
                    <div>
                        <textarea type="text" placeholder="Tekst Usluge" id="tekst_usluge" rows="15" name="yes"
                                  style="display: none";></textarea>
                    </div>
                    <div>
                        <textarea type="text" placeholder="Tekst Usluge" id="tekst_usluge" rows="15" name="yes"
                                  style="display: none";></textarea>
                    </div>
                    <input type="text" placeholder="Naslov Usluge" id="naslov_usluge">
                    <textarea type="text" placeholder="Tekst Usluge" id="tekst_usluge" rows="15" name="yes"></textarea>
                    <button class="post_dugme">Dodaj uslugu</button>
                </form>
                <hr>
            </div>
        </div>
        <script>
            alert("rs");
            alert(document.getElementById("role").innerHTML); 
        </script>
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer-distributed">
            <div class="container">
          			<div class="footer-left">
          				<h3 id="logofooter"><img src="../img/logotamni2.png"></h3>
          				<p class="footer-links">
                    <a href="">Log Out</a>
          				</p>
          				<p class="footer-company-name">Keynes d.o.o. &copy; 2016.</p>
          			</div>

          			<div class="footer-center">
          				<div>
          					<i class="fa fa-map-marker"></i>
          					<p><span>Kolodvorska 12</span> Sarajevo, BiH</p>
          				</div>
          				<div>
          					<i class="fa fa-phone"></i>
          					<p>+387 61 666 167</p>
          				</div>
          				<div>
          					<i class="fa fa-envelope"></i>
          					<p>amar-keynes@hotmail.com</p>
                    <br>
                    <i class="fa fa-envelope"></i>
                    <p>fahra-keynes@hotmail.com</p>
          				</div>
          			</div>

          			<div class="footer-right">
            				<p class="footer-company-about">
                      <span>Keynes d.o.o.</span>
            					Knjigovodstvena agencija za mala i srednja preduzeca, udruzenja, ugostiteljske radnje, obrte i dr.
            				</p>
            				<div class="footer-icons">
            					   <a href="https://www.facebook.com/KeynesDoo/?surface=rese"><i class="fa fa-facebook"></i></a>
            				</div>
          			</div>
            </div>
    		</footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="../vendor/jquery.min.js" type="text/javascript"></script>
        <script src="../vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="../vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="../vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="../vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="../vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="../vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="../vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="../js/layout.min.js" type="text/javascript"></script>
        <script src="../js/components/wow.min.js" type="text/javascript"></script>
        <script src="../js/components/swiper.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>

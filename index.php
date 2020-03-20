<!DOCTYPE html>

<?php
session_start();
include_once("php/code.php");
$user = new Users;
$work = new Works;
?>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mon Portfolio</title>
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">

</head>

<body>

  <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <a href="index.html"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="#header" class="smoothScroll">Accueil</a></li>
          <li><a href="#about" class="smoothScroll">Moi</a></li>
          <li><a href="#portfolio" class="smoothScroll">Mes photos & Créations</a></li>
          <li><a href="#journal" class="smoothScroll">Mes vidéos</a></li>
          <li><a href="#contact" class="smoothScroll">Contact</a></li>
        </ul>

      </div>
    </div>
  </nav>


  <div id="header" class="home">

    <div class="container">
      <div class="header-content">
        <h1>Je suis <span class="typed"></span></h1>
        <p>Photo, Vidéo, Design</p>

        <ul class="list-unstyled list-social">
          
          <li><a href="https://fr.linkedin.com/in/amaury-camalet-67420b172"><i class="ion-social-linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/amaury.cmlt/?hl=fr"><i class="ion-social-instagram"></i></a></li>

        </ul>
      </div>
    </div>
  </div>


  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="images/me.jpg" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading">Passionné de vidéo, de photographie et de design je suis actuellement en 2ème année de DUT Métiers du Multimédia et de l'Internet à l'Université de Bordeaux Montaigne </p>
            <p class="separator"> En Juin 2019, lors de mon stage de première année de DUT je suis intervenu dans plusieurs mariages. J’ai ainsi pu développer ma passion pour la photographie.
              Ce qui me plait, c’est capturer les instants de vie et les moments les plus intimes.
              <br>
              J’aime également travailler les photos en les retouchant et en appliquant des effets.
            <br><br>
            J'ai toujours eu un faible pour la vidéo, j'aime l'immense liberté que l'on peut avoir en filmant et en réalisant des montages.
            <br><br>
            Concernant le design, j'ai depuis mon plus jeune été intéressé par le dessin. Je ne dessine plus trop en ce moment mais je réalise de nombreuses créations comme des logos par exemple.
            
            </p>

          </div>

        </div>
      </div>
    </div>
  </div>
  

  <div id="portfolio" class="text-center paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>Mes photos & Créations</h2>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">

          </div>

          <div class="portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits webdesign">
              <a class="popup-img" href="images/portfolio/1.jpg">
                <img src="images/portfolio/1.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits photography">
              <a class="popup-img" href="images/portfolio/2.jpg">
                <img src="images/portfolio/2.jpg"  alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding webdesig photographyn">
              <a class="popup-img" href="images/portfolio/3.jpg">
                <img src="images/portfolio/3.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
              <a class="popup-img" href="images/portfolio/4.jpg">
                <img src="images/portfolio/4.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits photography">
              <a class="popup-img" href="images/portfolio/5.jpg">
                <img src="images/portfolio/5.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits webdesign">
              <a class="popup-img" href="images/portfolio/6.jpg">
                <img src="images/portfolio/6.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
              <a class="popup-img" href="images/portfolio/7.png">
                <img src="images/portfolio/7.png" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
              <a class="popup-img" href="images/portfolio/8.jpg">
                <img src="images/portfolio/8.jpg" alt="img">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
              <a class="popup-img" href="images/portfolio/9.jpg">
                <img src="images/portfolio/9.jpg" alt="img">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

  <div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>Mes vidéos</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="https://youtu.be/9D8JkkFuhQc"><img src="images/1.png" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="https://youtu.be/9D8JkkFuhQc">WAGYL</a></h4>
                <p class="separator">Film réalisé dans le cadre du projet Writting peace pour l’Unesco. Une épopée dans les paysages de la Gironde à la recherche du Wagyl
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="https://youtu.be/khoZXmMNFfU"><img src="images/2.png" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="https://youtu.be/khoZXmMNFfU">LA MÉTAPHORE DU THÉÂTRE</a></h4>
                <p class="separator">Motion design illustrant la métaphore du théâtre d’Erving Goffman. Vulgarisation scientifique appliquée à une théorie de la communication.
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="https://youtu.be/a27_qpEkTLM"><img src="images/3.png" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="https://youtu.be/a27_qpEkTLM">VIDEO MARIAGE</a></h4>
                <p class="separator">Vidéo reprenant les moments forts du mariage, sous forme de diaporama dynamique avec flou et transitions.
                </p>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>


  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-6">
            <div class="contact-contact">

              <h2 class="mb-30">CONTACT</h2>

              <ul class="contact-details">
                <li><span>24 rue G FAURE</span></li>
                <li><span>Bordeaux, FRANCE</span></li>
                <li><span>+33 078356142</span></li>
                <li><span>amaury.camalet@mmibordeaux.com</span></li>
              </ul>

            </div>
          </div>

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="contactForm">
              <div class="row">

                <div id="sendmessage">Ton message est envoyé ! Merci beacoup !</div>
                <div id="errormessage"></div>

                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ton Nom" data-rule="minlen:4" data-msg="Entre au moins 4 caractères" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ton Email" data-rule="email" data-msg="Entre un email valide" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Entre au moins 8 caractères" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Ecris moi quelque chose !" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <input type="submit" class="btn btn-defeault btn-send" value="Envoyer">
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">

          <li><a href="https://fr.linkedin.com/in/amaury-camalet-67420b172"><i class="ion-social-linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/amaury.cmlt/?hl=fr"><i class="ion-social-instagram"></i></a></li>
        </ul>

      </div>

      <div class="credits">
        Amaury CAMALET
      </div>

    </div>
  </div>


  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/typed/typed.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>

  <? php if(isset($_SESSION["account"]["username"]))
  {
      echo($_SESSION["account"]["username"]);
  }

  else
  {
      echo "NOT CONNECTED";
  }
  ?> 

  <?php
        $allworks = $work->get_works();
        foreach($allworks as $w)
        {
            echo($w["title"]);
            echo("|");
            echo($w["description"]);
        }

    ?>

</body>

</html>
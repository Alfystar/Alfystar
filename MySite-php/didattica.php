<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./sitePart/commonHead.php") ?>
</head>

<body> <!-- Add your content of header -->
<header>
    <nav class="navbar navbar-default active">
        <div class="container">
            <?php include("./sitePart/HeaderMount.php");
            navbarDefault();
            menu("Didattica");
            ?>

        </div>
    </nav>
</header>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <h1 class="text-center">Corsi Torvergata</h1>


                <div class="border-container-15px">
                    <div class="text-left">
                        <h3>Tutoraggio di Fondamenti di Informatica 2020/21</h3>
                    </div>
                    <div class="flex-conteiner">
                        <div class="col-xs-10 flex-child flex-child-Big" style=" padding-top: 5px">
                            <p style="vertical-align: bottom">
                                Corso indirizzato a gli ingegneri Elettronici e di Internet.
                            </p>
                        </div>

                        <div class="col-xs-2 flex-child flex-child-Small "
                             style="padding-right: 100px;">
                            <a href="./didattica/FondInf2020.php" class="btn btn-info btn-sm">FondInf 2020</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="footer-container white-text-container">
    <?php
    include("./sitePart/FooterMount.php");
    footer();
    ?>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        navActivePage();
        scrollRevelation('.reveal');
    });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
<script type="text/javascript" src="main.js"></script>
</body>

</html>
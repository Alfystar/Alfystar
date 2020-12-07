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
            menu("pageTemplate");
            ?>
        </div>
    </nav>
</header>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <h1 class="text-center">SEZIONE</h1>
                <p>
                    TESTO
                </p>

                <div class="section-container-spacer">
                    <img src="./assets/images/img-06.jpg" alt="" class="img-responsive reveal-content"
                         data-action="zoom">
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <img src="./assets/images/img-04.jpg" alt="" class="img-responsive reveal-content"
                             data-action="zoom">
                    </div>
                    <div class="col-xs-6">
                        <img src="./assets/images/img-07.jpg" alt="" class="img-responsive reveal-content"
                             data-action="zoom">
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
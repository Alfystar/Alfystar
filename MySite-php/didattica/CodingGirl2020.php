<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../sitePart/commonHead.php") ?>
</head>

<body> <!-- Add your content of header -->
<header>
    <nav class="navbar navbar-default active">
        <div class="container">
            <?php include("../sitePart/HeaderMount.php");
            navbarDefault();
            menu("Didattica");
            ?>

        </div>
    </nav>
</header>
<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-11 col-md-offset-0">
                <div id="InfoBase">
                    <h1 class="text-center">
                        Coding-Girl 2021
                    </h1>
                    <h4>
                        Pagina dedicata alle ragazze e ai ragazzi del progetto di Coding-Girl 2021
                    </h4>
                    <p>
                        Per contattarmi riguardo questo corso scrivere su gmail, è preferibile usare gmail:<br>
                        <i class="fa fa-envelope" aria-hidden="true"> </i>
                        <a href="mailto:alfystar1701@gmail.com?Subject=[Coding-Girl 2021]"
                           target="emailTab">alfystar1701@gmail.com</a> <br>
                        Corso indirizzato al liceo: <br>
                        <ul>
                        <li>
                            LS VITO VOLTERRA - CIAMPINO
                        </li>
                        <li>
                            LCSS B. RUSSELL - ROMA
                        </li>
                        <li>
                            LICEO LEVI CIVITA - ROMA
                        </li>
                        </ul>
                    </p>
                </div>
                <div id="Avvisi">
                    <h3 class="text-left">
                        Avvisi
                    </h3>
                    <ul>
                        <li>
                            [13/01/21] Buon giorno a tutti ragazzi,le date provvisorie del corso saranno: <br>
                            <ul>
                                <li>
                                    Lunedì 25-01-21
                                </li>
                                <li>
                                    Lunedì 15-02-21
                                </li>
                                <li>
                                    Lunedì 22-03-21
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div>
                <div id="fileTable">
                    <h3>Argomenti trattati</h3>

                    <table class="tableDidattica">
                        <thead>
                        <tr>
                            <th><b>Data</b></th>
                            <th><b>Argomenti</b></th>
                            <th><b>File lezione</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><b>[25/01/21]</b></td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>

                        <tr>
                            <td><b>[15/02/21] </b></td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>

                        <tr>
                            <td><b>[22/03/21] </b></td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>


<footer class="footer-container white-text-container">
    <?php
    include("../sitePart/FooterMount.php");
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
<script type="text/javascript" src="../main.js"></script>
</body>

</html>

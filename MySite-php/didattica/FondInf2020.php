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
                        Fondamenti di Informatica Anno 2020/21
                    </h1>
                    <h4>
                        Pagina dedicata ai ragazzi di Fondamenti di Informatica A.A. 2020-21
                    </h4>
                    <p>
                        Per contattarmi riguardo questo corso scrivere su gmail, è preferibile usare gmail:
                        <i class="fa fa-envelope" aria-hidden="true"> </i>
                        <a href="mailto:alfystar1701@gmail.com?Subject=[Fond-Inf2020]"
                           target="emailTab">alfystar1701@gmail.com</a> <br>
                    </p>
                </div>
                <div id="Avvisi">
                    <h3 class="text-left">
                        Avvisi
                    </h3>
                    <ul>
                        <li>
                            [11/11/20] Buon giorno a tutti ragazzi, intanto, per iniziare, ecco il link per la votazione
                            del giorno di lezione:
                            <i class="fa fa-question-circle"><a href="https://doodle.com/poll/vux42u387m99v8a2">Doodle
                                    Giorno Lezione</a></i>

                        </li>
                        <li>
                            [13/11/20] Il vincitore, a larghissima maggioranza è stato: <strong> Lunedì tra le
                                16-18</strong> <br>
                            I professori mi hanno fatto sapere l'aula dove svolgeremo lezione: <strong> Aula B1</strong>
                        </li>
                        <li>
                            [4/12/10] La lezione del 7/12/20 si terrà normalmente come da risultato della votazione su
                            doodle
                        </li>
                        <li>
                            [16/12/10] Dalla lezione del 21/12/20 le lezioni si svolgeranno <b>SOLO ONLINE</b>, fino
                            alla fine del corso, a meno di ulteriori avvisi in seguito
                        </li>
                    </ul>
                </div>
                <div id="Doodle Lezioni in Presenza">
                    <h3 class="text-left">
                        Doodle list
                    </h3>
                    <ul>
                        <li>
                            [16/11/20] Qui il doodle per prenotarvi alla lezione in presenza
                            <i class="fa fa-question-circle"><a href="https://doodle.com/poll/i48man4it96hvh76">Doodle
                                    Prenotazione</a></i>
                        </li>
                        <li>
                            [23/11/20] Qui il doodle per prenotarvi alla lezione in presenza
                            <i class="fa fa-question-circle"><a href="#">Doodle Prenotazione</a></i>
                        </li>
                        <li>
                            [30/11/20] Qui il doodle per prenotarvi alla lezione in presenza
                            <i class="fa fa-question-circle"><a href="https://doodle.com/poll/mg7imac9hiav4d6t">Doodle
                                    Prenotazione</a></i>
                        </li>
                        <li>
                            [07/12/20] Qui il doodle per prenotarvi alla lezione in presenza
                            <i class="fa fa-question-circle"><a href="https://doodle.com/poll/i2849h46zazrspay">Doodle
                                    Prenotazione</a></i>
                        </li>
                        <li>
                            [14/12/20] Qui il doodle per prenotarvi alla lezione in presenza
                            <i class="fa fa-question-circle"><a href="https://doodle.com/poll/5in6tb2wa9as66fx">Doodle
                                    Prenotazione</a></i>
                        </li>
                        <li>
                        </li>
                    </ul>
                </div>
                <div id="fileTable">
                    <h3>Argomenti trattati</h3>
                    <ul>
                        <li>
                            <a href="https://youtube.com/playlist?list=PLNj_ZzE2Ih2FbuWfQ8CpqHKsFvZavH1FP" target="youtube"> Video registrazioni Lezioni</a>
                        </li>
                        <li>
                            <a href="/Files/Didattica/2020/FondInf/tracce_esami.zip"> Tracce Esami anni passati</a>
                        </li>
                    </ul>
                    <table width="100%" border="1" class="text-center">
                        <tbody>
                        <tr bgcolor="#adf6f2">
                            <td><b>Data</b></td>
                            <td><b>Argomenti</b></td>
                            <td><b>File lezione</b></td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td><b>[16/11/20] </b></td>
                            <td>
                                <ul class="text-left">
                                    <li>Esercitazione sul phi-greco</li>
                                    <li>Cosa è un Makefile</li>
                                    <li>Cmake</li>
                                </ul>
                            </td>
                            <td><a href="/Files/Didattica/2020/FondInf/L1.tar.gz" class="btn btn-primary">File TAR</a>
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td><b>[23/11/20] </b></td>
                            <td>
                                <ul class="text-left">
                                    <li>Esercitazione su stringe e argv</li>
                                    <li>Esercizi in classe</li>
                                    <li>Lista puntata</li>
                                </ul>
                            </td>
                            <td><a href="/Files/Didattica/2020/FondInf/L2.tar.gz" class="btn btn-primary">File TAR</a>
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td><b>[30/11/20] </b></td>
                            <td>
                                <ul class="text-left">
                                    <li>Accediamo a una matrice dai puntatori</li>
                                    <li>Esercizio da matrice 2D a 3D</li>
                                    <li>GDB</li>
                                </ul>
                            </td>
                            <td><a href="/Files/Didattica/2020/FondInf/L3.tar.gz" class="btn btn-primary">File TAR</a>
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td>
                                <del><b>[07/12/20]</b></del>
                                <br>
                                <b>[14/12/20]</b>
                            </td>
                            <td>
                                <ul class="text-left">
                                    <li>Debugging of file</li>
                                    <li>Debugging ricorsive program x casa</li>
                                </ul>
                            </td>
                            <td>
                                <a href="/Files/Didattica/2020/FondInf/L4-BugToFound.tar.gz" class="btn btn-primary">Bug File</a>
                                <a href="/Files/Didattica/2020/FondInf/L4-BugFree.tar.gz" class="btn btn-primary">DeBug File</a>
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td><b>[21/12/20] </b></td>
                            <td>
                                <ul class="text-left">
                                    <li>Creiamo un nodo</li>
                                    <li>Creiamo un albero e le sue operazioni</li>
                                    <li>Print ricorsivo (DFS)</li>
                                </ul>
                            </td>
                            <td>
                                <a href="/Files/Didattica/2020/FondInf/L5.tar.gz" class="btn btn-primary">File TAR</a>
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
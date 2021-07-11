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
            menu("Projects");
            ?>

        </div>
    </nav>
</header>

<div class="section-container">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <h2 class="text-center">University Projects</h2>

                <div id="EMP" class="border-container-15px">
                    <div class="text-left">
                        <h3><b>EMP</b> (Embedded Message Pack)</h3>
                        <h6>2021</h6>
                    </div>
                    <div class="flex-conteiner">
                        <div class="col-xs-10 flex-child flex-child-Big" style=" padding-top: 5px">
                            <p style="vertical-align: bottom">
                                Progetto sviluppato durante lo sviluppo della mia tesi sperimentale magistrale.
                                Scopo di questa libreria CROSS-PLATFORM, è semplificare e standardizzare la
                                comunicazione
                                tra 2 diversi device (non necessariamente dello stesso tipo) con una comunicazione
                                stabile ed efficiente.
                                <br>
                                Il progetto è nato come "spin-off" di quello che avevo fatto nello Scorbot l'anno
                                precedente:
                                <br>
                                Dopo aver creato uno standard ad-hoc per la comunicazione tra la scheda e il Computer,
                                mi sono reso conto
                                che il lavoro sarebbe stato difficilmente trasportabile in un altro progetto, con il
                                know-how che ho sviluppato
                                ho però deciso di estendere le conoscenze e creare una libreria che automatizzasse il
                                processo per ogni possibile
                                pacchetto di comunicazione
                            </p>
                        </div>
                        <div class="col-xs-2 flex-child flex-child-Small "
                             style="padding-right: 100px;">
                            <a href="https://github.com/Alfystar/EMP" target="git" class="btn btn-info btn-sm">Git
                                Repository</a>
                        </div>
                    </div>
                    <!--                    <a href="https://web.uniroma2.it/module/name/Content/newlang/italiano/navpath/HOM/action/showpage/content_id/92493" class=" btn btn-info btn-link">-->
                    <!--                        More info on Tor Vergata Website</a>-->
                </div>
                <br>
                <div id="Scorbot-CA" class="border-container-15px">
                    <div class="text-left">
                        <h3><b>Scorbot</b> (Controlli Automatici)</h3>
                        <h6>2019:2020</h6>
                    </div>
                    <div class="flex-conteiner">
                        <div class="col-xs-10 flex-child flex-child-Big" style=" padding-top: 5px">
                            <p style="vertical-align: bottom">
                                Progetto inizialmente sviluppato per il corso di Controlli Automatici in Triennale, e
                                successivamente evoluto
                                in una borsa di studio.
                                Scopo del progetto era rimettere in funzione l'esercito di Scorbot presente nei
                                lavoratori
                                della facolta di Automatica che, nonostante siano meccanicamente funzionanti, non sono
                                più manutenuti
                                e il supporto dall'azienda produttrice (del 1990).

                                Il mio contributo è stato omni-comprensivo, dalla creazione di ben 2 revisioni di
                                schede, alla creazione del Firmware
                                fino ad arrivare alla creazione di un interfaccia grafica.
                            </p>
                        </div>

                        <div class="col-xs-2 flex-child flex-child-Small "
                             style="padding-right: 100px;">
                            <a href="https://github.com/Alfystar/Scorbot-CA" target="git" class="btn btn-info btn-sm">Git
                                Repository</a>
                        </div>
                    </div>
                    <!--                    <a href="https://web.uniroma2.it/module/name/Content/newlang/italiano/navpath/HOM/action/showpage/content_id/92493" class=" btn btn-info btn-link">-->
                    <!--                        More info on Tor Vergata Website</a>-->
                </div>
            </div> <!-- University Projects END -->

            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <h2 class="text-center">My Project</h2>

                <div id="listDownload" class="border-container-15px">
                    <div class="text-left">
                        <h3>List Download</h3>
                    </div>
                    <div class="flex-conteiner">
                        <div class="col-xs-10 flex-child flex-child-Big" style=" padding-top: 5px">
                            <p style="vertical-align: bottom">
                                Come ogni ragazzo anche io ho le mie passioni, nel mio caso serie TV, essendo un grande
                                appassionato, mi sono ritrovato spesso a scaricare le serie una per una, con tutte le
                                limitazioni
                                di banda del caso, e la "rottura" di dover cliccare 1 per 1 tutti i link, quando spesso,
                                apparte il numero dell'episodio, l'url è lo stesso identico.
                                <br>
                                Da questa "esigenza" è nato il mio piccolo <b>List Download</b>>, un semplice script
                                python
                                che permette di scaricare una lista di episodi lunga a piacere, tramite download
                                paralleli.
                                <br>
                                Questo semplice programma, è stato divertente da scrivere e utile per tenere in caldo
                                python
                                e in oltre mi ha permesso di agirare la limitazione di banda sulla singola connessione,
                                poichè
                                avvia n-download in parallelo, accelerando di molto il download dell'intera serie!!!
                            </p>
                        </div>

                        <div class="col-xs-2 flex-child flex-child-Small "
                             style="padding-right: 100px;">
                            <a href="https://github.com/Alfystar/listDownload" target="git" class="btn btn-info btn-sm">Git
                                Repository</a></div>
                    </div>
                    <a href="https://web.uniroma2.it/module/name/Content/newlang/italiano/navpath/HOM/action/showpage/content_id/92493"
                       class=" btn btn-info btn-link">
                        More info on Tor Vergata Website</a>
                </div>
            </div> <!-- My Project END -->


        </div> <!-- row end -->
    </div> <!-- container end -->
</div> <!-- section-container end -->


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
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
                    Codice corso: 4LAZ
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
                                    Lunedì 01-02-21 dalle 16.00 alle 18.00
                                </li>
                                <li>
                                    Lunedì 15-02-21 dalle 16.00 alle 18.00
                                </li>
                                <li>
                                    Lunedì 22-03-21 dalle 16.00 alle 18.00
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div>
				
				<div id="Link_Utili">
                    <h3 class="text-left">
                        Link Utili
                    </h3>
                    <ul>
                        <li>
						<a href="https://socialengagement.it/wordpress-modificare-la-grandezza-immagine-in-evidenza/"
                           target="link">Link per modificare dimensione immagine in evidenza</a>
                        </li>
                    </ul>
                </div>
				
                <div id="fileTable">
                    <h3>Argomenti trattati</h3>

                    <table class="tableDidattica">
                        <colgroup>
                            <col span="1" style="width: 10%;">
                            <col span="1" style="width: 40%;">
                            <col span="1" style="width: 40%;">
                            <col span="1" style="width: 20%;">
                        </colgroup>
                        <thead>
                        <tr>
                            <th><b>Data</b></th>
                            <th><b>Argomenti in Aula</b></th>
                            <th><b>HomeWork</b></th>
                            <th><b>File lezione</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><b>[25/01/21]</b></td>
                            <td>
                                <ul class="text-left">
                                    <li>
                                        Come funziona un sito web?
                                    </li>
                                    <li>
                                        Differenza tra blog e sito
                                    </li>
                                    <li>
                                        Tipologia di siti/blog realizzabili
                                    </li>
                                    <li>
                                        Altervista e Wordpress
                                    </li>
                                    <li>
                                        Creazione di sito/blog gratuito VS pagamento
                                    </li>
                                </ul>
                            </td>
                            <td class="text-top">
                                <ul class="text-left">
                                    <li>
                                        Progettazione del sito
                                    </li>
                                    <li>
                                        Creare la bozza del menu di navigazione
                                    </li>
                                </ul>
                            </td>
                            <td>
<!--                                <a href="/Files/Didattica/2020/FondInf/L2.tar.gz" class="btn btn-primary">Modulo 1</a>-->
                            </td>
                        </tr>
                        <tr>
                            <td><b>[15/02/21] </b></td>
                            <td class="text-top">
                                <ul class="text-left">
                                    <li>
                                        Personalizzare il tema e cambio interfaccia del sito
                                    </li>
                                    <li>
                                        La scrittura e l’impaginazione di contenuti in pagine e articoli
                                    </li>
                                    <li>
                                        Inserire contenuti multimediali (foto, video, pdf, ecc.)
                                    </li>
                                    <li>
                                        Cosa sono i Widget
                                    </li>
                                    <li>
                                        Plugin indispensabili
                                    </li>
                                    <li>
                                        Fare storytelling digitale con il blog
                                    </li>
                                </ul>
                            </td>
                            <td class="text-top">
<!--                                <div class="text-left">-->
<!--                                    Completare la realizzazione del sito/blog utilizzando le-->
<!--                                    competenze acquisite in aula ed aggiungendo tutto il necessario-->
<!--                                </div>-->
                            </td>
                            <td>
<!--                                <a href="/Files/Didattica/2020/FondInf/L2.tar.gz" class="btn btn-primary">Modulo 2</a>-->
                            </td>
                        </tr>

                        <tr>
                            <td><b>[22/03/21] </b></td>
                            <td>
                                <ul class="text-left">
                                    <li>
                                        Oltre il sito: Cenni di SEO, privacy, GDPR e sicurezza
                                    </li>
                                    <li>
                                        Social network: Pagine e profili
                                    </li>
                                    <li>
                                        Cenni di Intelligenza Artificiale
                                    </li>
                                    <li>
                                        Dimostrazione di tool che utilizzano AI nei siti web
                                    </li>
                                </ul>
                            </td>
                            <td class="text-top">
<!--                                <ul class="text-left">-->
<!--                                    <li>-->
<!--                                        Perfezionare il sito/blog con aggiunta di elementi utili al-->
<!--                                        miglioramento SEO e regolamenti sulla privacy-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        Applicazione di AI nel sito web-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <b>Extra</b>: Creare collegamenti tra sito/blog e profili (nuovi o esistenti)-->
<!--                                        social-->
<!--                                    </li>-->
<!--                                </ul>-->
                            </td>
                            <td>
<!--                                <a href="/Files/Didattica/2020/FondInf/L2.tar.gz" class="btn btn-primary">Modulo 3</a>-->
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

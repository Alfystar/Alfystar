<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate"/>
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
    <link href="./assets/favicon.ico" rel="icon">

    <link href="" rel="stylesheet">
    <?php include("./sitePart/menu.php");?>


    <title>Title page</title>

    <link href="main.css" rel="stylesheet">
</head>

<body> <!-- Add your content of header -->
<link rel="import" href="/sitePart/CommonHeader.php">
<header>
    <nav class="navbar navbar-default active">
        <div class="container">
            <?php include("./sitePart/HeaderMount.php");
            navbarDefault();
            menu("Project");
            ?>
        </div>
    </nav>
</header>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <h1 class="text-center">Moon</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas luctus at sem quis varius.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    Phasellus iaculis magna sagittis elit sagittis, at hendrerit lorem venenatis. Morbi accumsan iaculis
                    blandit. Cras ultrices hendrerit nisl.</p>

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

<div class="section-container">
    <div class="container">
        <div class="row section-container-spacer">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <h2 class="text-center">More</h2>
                <div class="section-container-spacer">
                    <p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuada pulvinar.
                        Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <img src="./assets/images/img-05.jpg" alt="" class="img-responsive reveal-content" data-action="zoom">
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container text-center">
        <div class="row section-container-spacer">
            <div class="col-xs-12 col-md-12">

                <h3>Do you like it ?</h3>
                <p>
                    <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </p>
            </div>
        </div>

    </div>
</div>

<footer class="footer-container white-text-container">
    <div class="container">
        <div class="row">


            <div class="col-xs-12">
                <h3>Mountain</h3>

                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <p><small>Website created with <a href="http://www.mashup-template.com/"
                                                          title="Create website with free html template">Mashup
                                    Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <p class="text-right">
                            <a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon"
                               title="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
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

<script>
    function includeHTML() {
        var z, i, elmnt, file, xhttp;
        /* Loop through a collection of all HTML elements: */
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            /*search for elements with a certain atrribute:*/
            file = elmnt.getAttribute("w3-include-html");
            if (file) {
                /* Make an HTTP request using the attribute value as the file name: */
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        if (this.status == 200) {elmnt.innerHTML = this.responseText;}
                        if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
                        /* Remove the attribute, and call this function once more: */
                        elmnt.removeAttribute("w3-include-html");
                        includeHTML();
                    }
                }
                xhttp.open("GET", file, true);
                xhttp.send();
                /* Exit the function: */
                return;
            }
        }
    }
</script>

<script>
    includeHTML();
</script>
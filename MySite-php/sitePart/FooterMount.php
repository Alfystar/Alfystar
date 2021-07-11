<?php

function footer()
{
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a class="navbar-brand" href="/index.html" title="logo">
                    <img src="/MySite-php/assets/Logo2 small.png" class="navbar-logo-img" alt="" height="100px">
                </a>
                <h3>Ing Emanuele Alfano</h3>
                <div class="row">
                    <div class="col-xs-4 col-sm-offset-1">
                        <?php include("iconSocialList.php") ?>
                    </div>
                    <div class="col-xs-4 col-sm-offset-8">
                        <p><small>Website created with <a href="http://www.mashup-template.com/"
                                                          title="Create website with free html template">Mashup
                                    Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

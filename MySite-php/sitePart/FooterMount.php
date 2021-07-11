<?php

function footer()
{
    ?>
    <div class="container">
        <div class="flex-conteiner col-xs-12 col-md-push-1" >
            <div class="col-xs-offset-0 center-block" style="height: auto">
                <a class="navbar-brand" href="/index.html" title="logo" style="height: 100px">
                    <img src="/MySite-php/assets/Logo2 small.png" class="navbar-logo-img" alt="" height="100px"
                    style="margin-bottom: 10px">
                </a>
            </div>
            <div class="col-xs-offset-0 center-block">
                <h3 class="text-center">Ing Emanuele Alfano</h3>
                <div class="col-xs-offset-4">
                <?php include("iconSocialList.php") ?>
                </div>
            </div>
            <div class="center-block text-center">
                <p style="padding-top: 10%">
                    <small>Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">
                            Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small>
                </p>
            </div>
        </div>
    </div>
    <?php
}

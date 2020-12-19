<?php

// First element display name,
// Second element URL link
$menuList = array(
    array("Home", "/index.php"),
    array("Project", "/project.php"),
    array("Component", "/components.php"),
);

function itemMenu($name, $link, $box)
{
    $box = boolval($box);
    if ($box) {
        echo '
        <li>
        <p>
            <a href=', $link, ' class="btn btn-default navbar-btn" title="">', $name, '</a>
        </p>
        
    </li>
        ';
    } else {
        echo '<li><a href=', $link, ' title="">', $name, '</a></li>';
    }
}

function menu($current)
{
    global $menuList;

    echo '
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
    ';
    foreach ($menuList as $item) {
        if ($current == $item[0]) {
            itemMenu($item[0], $item[1], true);
        } else {
            itemMenu($item[0], $item[1], false);
        }
    }
    echo '
        </ul>
    </div>
    ';
}


function navbarDefault()
{
    echo '
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" title="">
            <img src="assets/Logo2 small.png" class="navbar-logo-img" alt="" height="60px">
            Ing Emanuele Alfano
        </a>
    </div>
    ';
}



<?php

require_once '../config.php';


if(!isset($_GET['p'])) {
    include ROOT_PATH."/view/index.php";
}
else if(in_array($_GET['p'],ARRAY_VALID_PAGES)) {
    include ROOT_PATH."/view/".$_GET['p'].".php";
}
else {
    include ROOT_PATH."/view/404.php";
}
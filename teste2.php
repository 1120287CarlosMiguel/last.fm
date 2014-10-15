<?php
include_once './controller/lastFM.php';

$lastFM = new lastFM();

$temp=$lastFM->artistGetTopTags("cher"); //lista os top tags
print_r($temp);


?>



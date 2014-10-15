<?php
    $api_key = "1337a0720d826238352626d6366c9e34";
    //$tag = $_GET["tag"];
    $tag = "disco";
    $respostaJSON = file_get_contents("http://ws.audioscrobbler.com/2.0/?method=tag.gettoptracks&tag=$tag&api_key=$api_key&formar=json");
    
    
    echo $json;
?>


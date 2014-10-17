<?php
    $api_key = "1337a0720d826238352626d6366c9e34";
    $tag = $_GET["tag"];
    $numbTracks = $_GET["numberTracks"];
    
    $temp = explode(" ", $tag);
    $tag = "";
    foreach ($temp as $value) {
        $tag .= $value;
    }
    
    $respostaJSON = file_get_contents("http://ws.audioscrobbler.com/2.0/?method=tag.gettoptracks&tag=$tag&api_key=$api_key&format=json");
    
    $listaTrack = json_decode($respostaJSON,true);
    $i = 0;
    $resposta = "";
    
    foreach ($listaTrack["toptracks"]["track"] as $key => $value) {
        if($i < $numbTracks) {
            $name = $value["name"];
            $mbid = $value["mbid"];
            $resposta .= $name.",".$mbid."<br>";
            $i++;
        } else {
            break;
        }
    }
    
    echo "$resposta";
?>


<?php
    ini_set('display_errors', "On");
        
    //取得したいコンテンツのURL（置き換えてください）
    $target_url = "https://jlp.yahooapis.jp/MAService/V2/parse";
        
    file_get_contents($target_url);

    ?>
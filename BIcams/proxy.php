<?php
    $url = 'http://stackoverflow.com/questions/6326297/load-external-sites-content';
    $htm = file_get_contents($url);
    echo $htm;
?>
<?php

function pr($that, $exit = true) {
    echo '<pre>';
    print_r($that);
    echo '</pre>';
    
    if ($exit) {
        exit;
    }
}

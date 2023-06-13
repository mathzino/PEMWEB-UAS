<?php
function generateRandomId() {
    $microtime = microtime();
    $timestamp = str_replace([' ', '.'], '', $microtime);
    $randomId = substr($timestamp, -11);

    return $randomId;

}?>
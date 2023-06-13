<?php
function generateRandomCode($length = 10)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';

    $maxIndex = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, $maxIndex);
        $code .= $characters[$index];
    }

    return $code;
}
?>
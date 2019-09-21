<?php

function formatPrice($input) {
    $output = number_format($input, 0, '', '.');
    return $output;
}
<?php

function formatPrice($input) {
    return number_format($input, 0, '', '.');
}
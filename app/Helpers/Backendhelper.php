<?php

function make_slug($string) {
    $lowercase = strtolower($string);
    return preg_replace('/\s+/u', '-', trim($lowercase));
}

<?php

if (!function_exists('dd')) {

    function dd($value) {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
        exit();
    }

}

if (!function_exists('reponseJson')) {
    function responseJson($value) {
        header("Content-type: application/json; charset=utf-8");
        return json_encode($value);
    }
}
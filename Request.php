<?php

function getHeaders(){
    require_once 'Response.php';
    foreach ($_SERVER as $keyName => $keyValue){
        if (strpos($keyName, 'HTTP_')!==false){

            print_r($keyName . "=>" . $keyValue . "\n");
        }
    }
}
function getPath(){
    if (isset($_SERVER['PATH_INFO'])){
        print_r($_SERVER['PATH_INFO']);
    }
    else return ('No path is set');
}
function getScheme(){
    return $_SERVER['SERVER_PROTOCOL'];
}
function getPort(){
    $port=$_SERVER['SERVER_PORT'];
    return $port;
}
function getQueryParameters(){
    $query=$_GET;
    return $query;
}
function get($key){
    return $_SERVER[$key];
}
function getData(){
    return $_POST;
}
function getClientIp(){
    return $_SERVER['REMOTE_ADDR'];
}
function getCountry(){
    $coutry=unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
    return $coutry['geoplugin_countryName'];
}
function getMimeType(){
    $format=explode('/', $_SERVER['HTTP_ACCEPT']);
    return $format[1];
}
function getBaseUrl(){
    $name=$_SERVER['SERVER_NAME'];
    if (getScheme()=='http'){
        return "http://$name";
    }else if (getScheme()=='https'){
        return "https://$name";
    }
}
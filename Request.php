<?php

function getHeaders(){
    require_once 'Response.php';
    foreach ($_SERVER as $keyName => $keyValue){
        if (strpos($keyName, 'HTTP_')!==false){

            print_r($keyName . "=>" . $keyValue . "<br>");
        }
    }
}
function getPath(){
    if (isset($_SERVER['PATH_INFO'])){
        print_r($_SERVER['PATH_INFO']);
    }
    else print_r('No path is set');
}
function getScheme(){
    
}
function getPort(){

}
function getQueryParameters(){

}
function get($key){

}
function getData(){

}
function fetClientIp(){

}
function getCountry(){


}
function getMineType(){

}
function getBaseUrl(){

}
<?php
require_once 'Request.php';

print_r($_SERVER);
getHeaders();
print_r(getPath());
print_r(getQueryParameters());
print_r(get('PATH_INFO'));
echo 'hey';
print_r(getMimeType());
print_r(getCountry());
//print_r(getallheaders());
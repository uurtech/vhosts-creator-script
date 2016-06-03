<?php
$i = 0;
$infos = array();
while($f = fgets(STDIN)){
    $i++;
    $infos[] = str_replace("\n","",$f);
    if($i == 2){
        break;
    }
}
if(count($infos) > 2) die("pls.");
$string = '<VirtualHost *:80>
ServerAdmin email@email.com
DocumentRoot "C:/xampp/htdocs/'.$infos[0].'"
ServerName '.$infos[1].'
ServerAlias '.$infos[1].'
</VirtualHost>
';
$local_link = "127.0.0.1            ".$infos[1];
file_put_contents("C:/xampp/apache/conf/extra/httpd-vhost.conf",$string,FILE_APPEND);
file_put_contents("C:/Windows/System32/drivers/etc/hosts",$local_link,FILE_APPEND);
?>
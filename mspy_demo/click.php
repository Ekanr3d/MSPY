<?php
require_once '../get_ip.php';
    $ip=ip();
    
    $agent = $_COOKIE['OPID'];
    $agent = str_replace("http://mspy.go2cloud.org/SH2p7?source=","",$agent);
    
    mysql_connect('localhost','root','Gl-1114');
    mysql_selectdb('callapp_main');
    mysql_set_charset ( 'utf8');
    
    mysql_query("INSERT INTO `click_log` 
    						(`date`, `ip`, `page`, `agent`) 
    				VALUES 
    						(NOW(), '$ip', 'მთავარი', '$agent');");
    mysql_close();
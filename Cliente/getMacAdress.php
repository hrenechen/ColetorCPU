<?php
function GetMAC(){ 
    ob_start(); 
    system('getmac'); 
    $Content = ob_get_contents(); 
    ob_clean(); 
    return substr($Content, strpos($Content,'\\')-20, 17); 
} 
?>
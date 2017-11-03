<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $u=$_REQUEST['username'];
        $p=$_REQUEST['password'];
        
        $myu="admin";
        $myp="12345";
        
        
        if($u == $myu && $p == $myp)
        
        echo "success";
        
        else 
            echo "not valid";
            
        
        ?>
    </body>
</html>

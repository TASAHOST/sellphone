<?php
    include_once("../model/condb.php");
    include_once("../model/phoneM.php");
   /*  $pid = htmlspecialchars($_GET["pid"]); */
    echo $pid='1';
    

    $obj_name = new Spec();
    $rs2 = $obj_name->getphone($pid);
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
     print_r($jsonDecode);
    include("../phoneindex.php")
?> 
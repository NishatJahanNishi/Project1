<?php
    $StudentName = $_POST['name'];
    $Class = $_POST['class'];
	$Id=$_POST['id'];
	$Age=$_POST['age'];
	$StudentNameOK = 0;
    $ClassOK = 0;
	$IdOK = 0;
    $AgeOK = 0;
    if( empty($StudentName) ) echo "name field is empty</br>";
    else{
        if( !filter_var( $StudentName ) ) echo "</br>invalid name format</br>";
        else $StudentNameOK = 1;
    }
    if( empty($Class) ) echo "this field is empty</br>";
    else{
        if( !filter_var( $Class ) ) echo "</br>invalid post format</br>";
        else $ClassOK  = 1;
    }
	if( empty($Id) ) echo "this field is empty</br>";
    else{
        if( !filter_var( $Id ) ) echo "</br>invalid qualification format</br>";
        else $IdOK = 1;
    }
	if( empty($Age) ) echo "age field is empty</br>";
    else{
        if( !filter_var( $Age ) ) echo "</br>invalid age format</br>";
        else $AgeOK = 1;
    }


     if( $StudentNameOK==1 && $ClassOK==1 && $IdOK==1 && $AgeOK==1 ){
        
        //Connect SQL
        $userid ="root";
        $sqlpass="";
        $server="localhost";
        $db = "phpaddate";
        
        $conn = new mysqli($server,$userid,$sqlpass,$db); 

        if( $conn->connect_error ) die("conn failed:". $conn->connect_error);
        else echo "connected!</br>";
        $sql_cmnd = 
        " INSERT INTO tblres VALUES ('$StudentName','$Class','$Id','$Age') ";
        if($conn->query($sql_cmnd) === TRUE) echo "data inserted</br>" ;
        else echo "not inserted</br>";



    }
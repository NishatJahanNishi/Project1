<?php
    $EMAIL = $_POST['EMAIL'];
    $PASSWARD = $_POST['pass'];
	$PASSWARD1=$_POST['pass1'];
	$EMAILOK = 0;
    $PASSWARDOK = 0;
	$PASSWARD1OK = 0;

    if( empty($EMAIL) ) echo "email field is empty</br>";
    else{
        if( !filter_var( $EMAIL,FILTER_VALIDATE_EMAIL ) ) echo "</br>invalid email format</br>";
        else $EMAILOK = 1;
    }
    

    if( empty($PASSWARD) || empty($PASSWARD1) ) echo "empty password</br>";
    else{
        if( $PASSWARD != $PASSWARD1 ) "password mismatch</br>" ;
        else $PASSWARDOK = 1;
    }


    if( $PASSWARDOK==1 && $EMAILOK==1 ){
        
        //Connect SQL
        $userid ="root";
        $sqlpass="";
        $server="localhost";
        $db = "testdb";
        
        $conn = new mysqli($server,$userid,$sqlpass,$db); 

        if( $conn->connect_error ) die("conn failed:". $conn->connect_error);
        else echo "connected!</br>";

        $PASSWARD = md5($PASSWARD);
        $sql_cmnd = 
        " INSERT INTO sign VALUES ('$EMAIL','$PASSWARD') ";
        if($conn->query($sql_cmnd) === TRUE) echo "Your insertion is done.</br>" ;
        else echo "not inserted</br>";



    }





    

//?>
<?php
    $id = $_POST['id'];
    $PASSWARD = $_POST['pass'];
	$PASSWARD1=$_POST['pass1'];
	$idOK = 0;
    $PASSWARDOK = 0;
	$PASSWARD1OK = 0;

    if( empty($id) ) echo "id field is empty</br>";
    else{
        if( !filter_var( $id ) ) echo "</br>invalid id format</br>";
        else $idOK = 1;
    }
    

    if( empty($PASSWARD) || empty($PASSWARD1) ) echo "empty password</br>";
    else{
        if( $PASSWARD != $PASSWARD1 ) "password mismatch</br>" ;
        else $PASSWARDOK = 1;
    }


    if( $PASSWARDOK==1 && $idOK==1 ){
        
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
        " INSERT INTO stdsign VALUES ('$id','$PASSWARD') ";
        if($conn->query($sql_cmnd) === TRUE) echo "data inserted</br>" ;
        else echo "not inserted</br>";



    }





    

//?>
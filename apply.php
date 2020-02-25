<?php
    $Name = $_POST['name'];
    $Jobpost = $_POST['post'];
	$Qualification=$_POST['qua'];
	$Age=$_POST['age'];
	$Email=$_POST['email'];
	$NameOK = 0;
    $JobpostOK = 0;
	$QualificationOK = 0;
    $AgeOK = 0;
    $EmailOK = 0;
    if( empty($Name) ) echo "name field is empty</br>";
    else{
        if( !filter_var( $Name ) ) echo "</br>invalid name format</br>";
        else $NameOK = 1;
    }
    if( empty($Jobpost) ) echo "post field is empty</br>";
    else{
        if( !filter_var( $Jobpost ) ) echo "</br>invalid post format</br>";
        else $JobpostOK  = 1;
    }
	if( empty($Qualification) ) echo "this field is empty</br>";
    else{
        if( !filter_var( $Qualification ) ) echo "</br>invalid qualification format</br>";
        else $QualificationOK = 1;
    }
	if( empty($Age) ) echo "age field is empty</br>";
    else{
        if( !filter_var( $Age ) ) echo "</br>invalid age format</br>";
        else $AgeOK = 1;
    }

    
	if( empty($Email) ) echo "email field is empty</br>";
    else{
        if( !filter_var( $Email ) ) echo "</br>invalid  format</br>";
        else $EmailOK = 1;
    }

     if( $NameOK==1 && $JobpostOK==1 && $QualificationOK==1 && $AgeOK==1 && $EmailOK==1 ){
        
        //Connect SQL
        $userid ="root";
        $sqlpass="";
        $server="localhost";
        $db = "phpaddate";
        
        $conn = new mysqli($server,$userid,$sqlpass,$db); 

        if( $conn->connect_error ) die("conn failed:". $conn->connect_error);
        else echo "connected!</br>";
        $sql_cmnd = 
        " INSERT INTO tblapp VALUES ('$Name','$Jobpost','$Qualification','$Age','$Email') ";
        if($conn->query($sql_cmnd) === TRUE) echo "data inserted</br>" ;
        else echo "not inserted</br>";



    }





    

//?>
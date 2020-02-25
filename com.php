<?php
    $Comment = $_POST['com'];
    $CommentOK = 0;
    if( empty($Comment) ) echo "this field is empty</br>";
    else{
        if( !filter_var( $Comment ) ) echo "</br>invalid format</br>";
        else $CommentOK = 1;
    }
   
    

     if( $CommentOK==1 ){
        
        //Connect SQL
        $userid ="root";
        $sqlpass="";
        $server="localhost";
        $db = "phpaddate";
        
        $conn = new mysqli($server,$userid,$sqlpass,$db); 

        if( $conn->connect_error ) die("conn failed:". $conn->connect_error);
        else echo "connected!</br>";
        $sql_cmnd = 
        " INSERT INTO tblcm VALUES ('$Comment') ";
        if($conn->query($sql_cmnd) === TRUE) echo "Your comment is sent.</br>" ;
        else echo "not inserted</br>";



    }





    

//?>
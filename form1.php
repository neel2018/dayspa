<?php
    session_start();

    $value1 = " ";
    $value2 = " ";
    $value3 = " ";
    $value4 = " ";
    $errors = array();


    $dbhost = 'sql203.ultimatefreehost.in';
    $dbuser = 'ltm_20557858';
    $dbpass = 'neeldayana@2017';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
        die('Could not connect: ' . mysql_error());
    }
    // echo 'Connected successfully<br />';

    if (isset($_POST['submit'])){
        $value1 = mysql_real_escape_string($_POST['firstName']);
        $value2 = mysql_real_escape_string($_POST['lastName']);
        $value3 = mysql_real_escape_string($_POST['email']);
        $value4 = mysql_real_escape_string($_POST['password']);
        $value5 = mysql_real_escape_string($_POST['password1']);  

        //if any field is empty
        if (empty($value1)){
            array_push($errors, "First name is required.");
        } 
        if (empty($value2)){
            array_push($errors, "Last name is required.");
        }
        if (empty($value3)){
            array_push($errors, "Email is required.");
        }
        if (empty($value4)){
            array_push($errors, "Password is case-sensitive and required.");
        }
        if ($value4 != $value5) {
            array_push($errors, "Passwords do not match correctly.")
        }
        if (count($errors == 0)){
            $value6 = md5($value4); //password encryption before submission
            $value7 = md5($value5); //password encryption before submission
            $sql = "INSERT INTO signup"."(firstName,lastName,email,password,password1) "."VALUES "."('$value1','$value2','$value3','$value6','$value7')";  
            mysql_select_db('ltm_20557858_dayspa_db');
            $retval = mysql_query( $sql, $conn );  
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            echo "Values submitted successfully.";             
            header("location: MEMBERSHIP.php");         
        }
    }            
             
?>
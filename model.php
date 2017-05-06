<?php

//model.php

function open_database_connection() {
    $servername = "10.16.16.1";
    $username = "bench-hu1-u-109501";
    $password = "nDfMr^hnK";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    $db_found = mysqli_select_db($conn, $username);
    
    
    if (!$conn) {
       die("Connection failed : " . mysqli_error());
    }
    
    
    if (!$db_found) {
       die("Database connection failed : " . mysqli_error());
    }
    
    return $conn;
}

function close_database_connection($link) {
    $link = null;
}


function get_all_surveys() {

    $conn = open_database_connection();

    $SQL = "SELECT * FROM surveys";
    $result = mysqli_query($conn, $SQL);
    
    $surveys = array(); // create a new array
    
    
    while ( $db_field = mysqli_fetch_assoc($result) ) {
      array_push($surveys, $db_field);
    }
    close_database_connection($conn);
    
    return $surveys;
}


function get_survey_by_id($id) {
    $conn = open_database_connection();
    
    $SQL = "SELECT Question, OptionA, OptionB, OptionC FROM surveys WHERE id='$id'";
    $result = mysqli_query($conn, $SQL);


    while ($row = mysqli_fetch_array($result)) { 
        $survey= $row; 
    } 

    
    close_database_connection($conn);
    
    return $survey;
}

?>


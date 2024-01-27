<?php   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

    $conn = new mysqli($servername,$root ,"", $student);

    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO USERS (name, email, grade, password, gender) VALUES ('', '', '', '', '')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
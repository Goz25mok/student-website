<?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name =  $_POST["name"];
        $password = $_POST["password"];
        $grade = $_POST["grade"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];

        echo "name: $name<br>";
        echo "password: $password<br>";
        echo "grade: $grade<br>";
        echo "gender: $gender<br>";
        echo "email: $email<br>";

    }

?>
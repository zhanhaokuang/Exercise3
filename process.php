<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $color = $_POST['color'];
    setcookie("name", "$name", time()+600 );
    setcookie("age", "$age", time()+600 );
    setcookie("color", "$color", time()+600 );
}
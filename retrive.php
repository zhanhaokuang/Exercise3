<?php
if(isset($_COOKIE['name']))
{
    echo "Your Name: " . $_COOKIE['name'] . "<br>";
}
else
{
    echo "Name Cookie not set" . "<br>";
}
if(isset($_COOKIE['age']))
{
    echo "Your Age: " . $_COOKIE['age'] . "<br>";
}
else
{
    echo "Age Cookie not set" . "<br>";
}
if(isset($_COOKIE['color']))
{
    echo "Your Favorite Color: " . $_COOKIE['color'] . "<br>";
}
else
{
    echo "Color Cookie not set" . "<br>";
}

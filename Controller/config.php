<?php
session_start();

$conn = mysqli_connect('localhost','root','','quizbanana') or die('connection failed');

function redirect($url)
{
    echo "<script>window.location.href = '$url';</script>";
    die();
}

$data = array(
    "question" => "http://example.com/image.jpg",
    "solution" => "42"
);

?>
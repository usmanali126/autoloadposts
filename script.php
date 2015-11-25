<?php

$link=  mysqli_connect('localhost', 'root', '', 'auto_load_data');
$query="SELECT * FROM posts";
$result= mysqli_query($link, $query)or die(mysqli_error($link));
//$row=  mysqli_fetch_array($result);
<?php

$fileHomeData = "homepageData.json";
$existingHomeData = file_exists($fileHomeData) ? json_decode(file_get_contents($fileHomeData), true) : [];

$updatedHomeData = $existingHomeData;

if(isset($_GET["stuCount"])){

    $newStuCount = $_GET["stuCount"];

    if(empty($newStuCount)){
        echo("Make sure to add student count");
    }else{
       $updatedHomeData['student_count'] = $newStuCount; 
       echo("1");
    }

}

if(isset($_GET["teaCount"])){

    $newStuCount = $_GET["teaCount"];

    if(empty($newStuCount)){
        echo("Make sure to add teacher count");
    }else{
       $updatedHomeData['teacher_count'] = $newStuCount; 
       echo("2");
    }

}

if(isset($_GET["olCount"])){

    $newStuCount = $_GET["olCount"];

    if(empty($newStuCount)){
        echo("Make sure to add O/L student count");
    }else{
       $updatedHomeData['OL_count'] = $newStuCount; 
       echo("3");
    }

}

if(isset($_GET["uniCount"])){

    $newStuCount = $_GET["uniCount"];

    if(empty($newStuCount)){
        echo("Make sure to add university selected count");
    }else{
       $updatedHomeData['UNI_count'] = $newStuCount; 
       echo("4");
    }

}



if(isset($_GET["message"])){

    $message = $_GET["message"];

    if(empty($message)){
        echo("Make sure to add a Message");
    }else{
       $updatedHomeData['principle_message'] = $message; 
       echo("5");
    }

}

file_put_contents($fileHomeData, json_encode($updatedHomeData, JSON_PRETTY_PRINT));






?>
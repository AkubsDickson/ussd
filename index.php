<?php
    $msisdn = $_GET['msisdn'];
    $sequence_ID = $_GET['sequenceID'];
    $data = $_GET['data'];
    $type = 0;

  
    $mereply = "Welcome To Ashesi Mobile App 2022\n 
    1. choose a movie\n 
    2. select a music\n 
    3. thank you\n";


    if($data=='1'){
        $mereply= ' Select a movie from these options \n EndGame \n Locke and Key ';
    }


    echo $mereply.'|'.$msisdn.'|'.$sequence_id.'|'.$type;
?>


<?php
    $performance = $_POST['performance'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $student_id = $_POST['student_id'];
    
    $skill = $_POST['skill'];
    $instrument = $_POST['instrument'];
    $location = $_POST['location'];
    $room = $_POST['room'];
    $time_slot = $_POST['time_slot'];

    if (empty($_POST['first_name_2']) && empty($_POST['last_name_2']) && empty($_POST['student_id_2'])) { 
        $duet = "";
    } else {
        $first_name_2 = $_POST['first_name_2'];
        $last_name_2 = $_POST['last_name_2'];
        $student_id_2 = $_POST['student_id_2'];

        $duet = " with $first_name_2 $last_name_2 ($student_id_2),";
    }

    $myfile = fopen("/home/mcv20002/public_html/week13/data/$first_name$last_name$instrument.txt", "w") or die("bummer");
    $txt = "$skill performer $first_name $last_name ($student_id) is going to perform a $instrument $performance,$duet which will be at $time_slot am in the $location building, room $room.";

    fwrite($myfile, $txt);

    fclose($myfile);

?>
<?php
    header("location: admin.php");

    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
   
    $questionArray = Array($question1, $question2, $question3, $question4, $question5);
    
?>
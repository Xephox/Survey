<h1>Questionaire</h1>
<form method="post">
<?php 
file_get_contents("questions.php");
echo $questionArray[0];
?>
    <label for="answer1">Answer:</label><input type=text name="answer1">
<?php
echo $questionArray[1];
?>
    <label for="answer2">Answer:</label><input type=text name="answer2">
<?php
echo $questionArray[2];
?>
    <label for="answer3">Answer:</label><input type=text name="answer3">
<?php
echo $questionArray[3];
?>
    <label for="answer4">Answer:</label><input type=text name="answer4">
<?php
echo $questionArray[4];
?>
    <label for="answer5">Answer:</label><input type=text name="answer5">
    <input type="submit" name="submit" value="Submit" formaction="confirmation.php">
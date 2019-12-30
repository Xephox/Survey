<h1>Questionaire</h1>
<form method="post">
<?php
echo $questionArray[0];
?>
    <label for="question 1">Answer:</label><input type=text name="question 1">
<?php
echo $questionArray[1];
?>
    <label for="question 2">Answer:</label><input type=text name="question 2">
<?php
echo $questionArray[2];
?>
    <label for="question 3">Answer:</label><input type=text name="question 3">
<?php
echo $questionArray[3];
?>
    <label for="question 4">Answer:</label><input type=text name="question 4">
<?php
echo $questionArray[4];
?>
    <label for="question 5">Answer:</label><input type=text name="question 5">
    <input type="submit" name="submit" value="Submit" formaction="confirmation.php">
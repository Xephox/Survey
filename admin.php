<h1>Admin Area<h1>
<h2>Question Editor</h2>
<form method="post">
    <label for="q1">Question 1:</label>
    <input type="text" name="q1">
    <label for="q2">Question 2:</label>
    <input type="text" name="q2">
    <label for="q3">Question 3:</label>
    <input type="text" name="q3">
    <label for="q4">Question 4:</label>
    <input type="text" name="q4">
    <label for="q5">Question 5:</label>
    <input type="text" name="q5">
    <input type="submit" name=submit value="Submit" formaction="admin.php">

<form>
  <input type="button" value="Log out" onclick="history.go(-2)">
</form>

<?php
    $question1 = $_POST['q1'];
    $question2 = $_POST['q2'];
    $question3 = $_POST['q3'];
    $question4 = $_POST['q4'];
    $question5 = $_POST['q5'];
?>
<h2>Responses</h2>
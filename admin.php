<?php 
require_once("auth.php");
?>

<h1>Admin Area<h1>
<h2>Question Editor</h2>

<form method="post" action="questions.php">
    <label for="question1">Question 1:</label>
    <input type="text" name="question1">
    <label for="question2">Question 2:</label>
    <input type="text" name="question2">
    <label for="question3">Question 3:</label>
    <input type="text" name="question3">
    <label for="question4">Question 4:</label>
    <input type="text" name="question4">
    <label for="question5">Question 5:</label>
    <input type="text" name="question5">
    <input type="submit" name=submit value="Submit">
</form>

    <a href="logout.php"><button>Log out</button></a>
    <a href="index.php"><button>Home</button></a>

<h2>Responses</h2>
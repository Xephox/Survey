<h1>Questionaire</h1>
<form method="post">
<?php 
require_once("questions.php");

foreach ($questions as $question) {
    echo "<label for='".$question['name']."'>".$question['title'].":</label><input type=text name='".$question['name']."' required>";
}
?>

    <input type="submit" name="submit" value="Submit" formaction="confirmation.php">
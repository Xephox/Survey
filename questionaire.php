<?php
require_once("questions.php");
session_start();

if (isset($_POST["ticket_submit"])) {
    $_SESSION['ticket'] = $_POST["ticket_submit"];
} elseif (isset($_SESSION['ticket'])) {
    if (isset($responses[$_SESSION['ticket']])) {
        echo "You have already done a response";
        die();
    }
} else {
    echo "Fuck U not ticket";
    die();
}
?>

<h1>Questionaire</h1>

<form action="confirmation.php" method="post">
<?php
foreach ($questions as $id => $question) {
    echo "<label for='".$id."'>".$question.":</label><input type=text name='".$id."' required>";
}
?>
<input type="submit" name="submit" value="Submit">
</form>
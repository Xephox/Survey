<h1>Questionaire</h1>
<form method="post">

<?php 

var_dump($_POST);
require_once("responses.php");

if (isset($_POST["name"])) {
    $responses[] = [
        "title" => $_POST["new_question"],
        "name" => $_POST["name"],
    ];
    file_put_contents('responses.php', '<?php $responses = '.var_export($responses, true).';');
}
?>

<?php 
require_once("questions.php");

foreach ($questions as $id => $question) {
    echo "<label for='".$id."'>".$question.":</label><input type=text name='THE FUCKING THING".$id."' required>";
}
?>

    <input type="submit" name="submit" value="Submit">
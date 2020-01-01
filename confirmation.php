<?php
require_once("responses.php");
require_once("questions.php");
session_start();

if (isset($_POST["submit"])) {
    foreach (array_keys($questions) as $question_id) {
        $responses[$_SESSION['ticket']][$question_id] = $_POST[$question_id];
    }
    file_put_contents('responses.php', '<?php $responses = '.var_export($responses, true).';');
}

?>

<head>
    <title>Question Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
    <?php 
    foreach ($responses[$_SESSION['ticket']] as $question_id => $awnser) {
        echo "<li><em>".$questions[$question_id].":</em> ".$awnser."</li>";
    }
    ?>
    </ol>
</body>


<?php 
require_once("auth.php");
require_once("questions.php");
require_once("responses.php");

if (isset($_POST["new_question"])) {
    $questions[rand()] = $_POST["new_question"];
    file_put_contents('questions.php', '<?php $questions = '.var_export($questions, true).';');
}
?>

<h1>Admin Area<h1>
<h2>Question Editor</h2>

<form method="post" action="admin.php">

    <label for="new_question">Type Question:</label><input type=text name="new_question">
    <a href="admin.php"><button>Add question</button></a>

    <?php 
    
    foreach ($questions as $question) {
        echo "<li>".$question."</li>";
    }
    ?>

</form>

    <a href="logout.php"><button>Log out</button></a>
    <a href="index.php"><button>Home</button></a>

<h2>Responses</h2>
<?php

foreach ($responses as $ticket_id => $awnsers) {
        echo "<h4>Ticket $ticket_id</h4>";
        foreach ($awnsers as $question_id => $awnser) {
            echo $questions[$question_id]. " $awnser";
            
        }
    }
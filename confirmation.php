<head>
    <title>Question Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
    <?php 
   require_once("questions.php");
foreach ($questions as $question) {
    echo "<li><em>".$question['title'].":</em> ".$_POST[$question['name']]."</li>";
}
?>
</body>
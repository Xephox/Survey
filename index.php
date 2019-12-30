<head>
    <link href="survey.css" rel="stylesheet">
</head>
<body>
    <h1>Survey</h1>
    <form method="post" action="admin.php">
        <input type="username" name="username">
    <p>Please select a ticket number and proceed to the questionaire.</p>
    <form method="post" action="questionaire.php">
        <input type="number" name="ticket" min="1" max="99">
        <input type="submit" name="Submit">  
    </form> 
</body>
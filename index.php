<head>
    <link href="survey.css" rel="stylesheet">
</head>
<body>
    <h1>Survey</h1>
    <h2>Admin Login</h2>
    <form method="post">
        <label for="username">Username:</label><input type="text" name="username">
        <label for="password">Password:</label><input type="password" name="password">
        <input type="submit" name="login" value="Login" formaction="admin.php">

<?php
    $username = '$_POST[username]';
    $password = '$_POST[password]';
        
    session_start();
        if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) {
            echo "password accepted";
            $_SESSION['login']=true;
        }else {
            echo "incorrect login";
        }
?>

    <p>Please select a ticket number and proceed to the questionaire.</p>
    <form method="post">
        <label for="ticket">Ticket number:</label><input type="number" name="ticket" min="1" max="99">
        <input type="submit" name="submit" value="Submit" formaction="questionaire.php">  
    </form> 
</body>
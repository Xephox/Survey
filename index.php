<?php

session_start();

?>

<head>
    <link href="survey.css" rel="stylesheet">
</head>
<body>
    <h1>Survey</h1>
    <h2>Admin Login</h2>
<?php
    if(isset($_POST['login'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
            $_SESSION['login'] = true;
            header('Location: admin.php');
        } else {
            echo "Username and Password do not match.";
        }

    }
    if (!isset($_SESSION['login'])): ?>

    <form method="post">
        <label for="username">Username:</label><input type="text" name="username">
        <label for="password">Password:</label><input type="password" name="password">
        <input type="submit" name="login" value="Login">
    </form>

    <?php else: ?>

    <p>You're already logged in.</p>
    <a href="admin.php"><button>To admin</button></a>

    <?php endif; ?>

    <p>Please select a ticket number and proceed to the questionaire.</p>
    <form method="post">
        <label for="ticket">Ticket number:</label><input type="number" name="ticket" min="1" max="99" required>
        <input type="submit" name="submit" value="Submit" formaction="questionaire.php">  
    </form> 
</body>
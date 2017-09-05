<html>
<head>
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>

<body>
<form action="LoginController.php" method="post">
    <div class="container" style="margin-top: 30px; margin-bottom: 30px">
        <h1>Welcome!</h1>
        <h2>Please login to continue!</h2>

        <?php
            if(isset($_GET['error']))
            {
                echo '<label class="danger">'. $_GET['error'] . '</label> <br>';
            }
        ?>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus maxlength="50">
        <br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

    </div>
    <button class="btn btn-primary" type="submit">Sing in</button>
</form>

</body>
</html>

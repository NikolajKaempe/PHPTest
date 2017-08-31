<html>
<head>
    <title>Login</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<form action="LoginController.php" method="post">
    <h1>Welcome!</h1>
    <h2>Please login to continue!</h2>
    <div style="margin-top: 30px; margin-bottom: 30px">

        <?php
            if(isset($_GET['error']))
            {
                echo '<label class="danger">'. $_GET['error'] . '</label> <br>';
            }
        ?>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

    </div>
    <button class="btn btn-primary" type="submit">Sing in</button>
</form>

</body>
</html>

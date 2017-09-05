<html>
<head>
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="css/PrimaryStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<form action="LoginController.php" method="post">
    <div class="container" style="margin-top: 30px; margin-bottom: 30px">
        <h1 style="color: dodgerblue">Welcome!</h1>
        <h2 style="color: dodgerblue">Please login to continue!</h2>

        <?php
            if(isset($_GET['error']))
            {
                echo '<label style="margin-left: 50px"  class="label label-danger">'. $_GET['error'] . '</label> <br>';
            }
        ?>

        <label style="color: dodgerblue" for="username">Username</label>
        <input type="text" style="width: 50%; color: dodgerblue" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="password" style="color: dodgerblue" class="sr-only">Password</label>
        <input type="password" style="width: 50%; color: dodgerblue" name="password" id="password" class="form-control" placeholder="Password" required>

        <button style="margin-top: 30px; margin-bottom: 30px" class="btn btn-primary" type="submit">Sing in</button>

    </div>
</form>

</body>
</html>

<?php require_once "../databeses/config.php"?>
<?php require_once "../databeses/action.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .hasErr{
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login Admin</h2>
    <span class="hasErr"><?php echo $allErr; ?></span>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="username">
            <br>
            <span class="hasErr"><?php echo $nameErr; ?></span>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            <br>
            <span class="hasErr"><?php echo $emailErr; ?></span>
        </div>
        <button type="submit" class="btn btn-primary" name="btn_send_admin">Submit</button>
    </form>
</div>

</body>
</html>

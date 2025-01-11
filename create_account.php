<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="insert_account.php" method="post">
        <label for="email">Email Adreess</label>
        <input type="text" name="email"><br>
        <label for="">Username</label>
        <input type="text" name="username"><br>
        <label for="">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="create Account"><br>
        <div>
            Already have an account? Login <a href="index.php">here</a>
        </div>
     </form>
</body>
</html>
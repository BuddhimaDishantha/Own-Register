<?php
 include("Database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7c18d0bd17.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
       <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <h1>Register</h1>

        <div class="input-filed">
       <label for="uname">User Name</label>
        <input type="text" id="uname" name="uname" placeholder="User Name"><br>
        </div>

        <div class="input-filed">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="email@gmail.com"><br>
        </div>

        <div class="input-filed">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password"><br>
        </div>

        <input type="submit" value="Register" id="Register" name="Register">
        </form>
        
    </div>
    <br>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname=$_POST["uname"];
        $email=$_POST["email"];
        $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
        $sql="INSERT INTO login_details(User_name,email,password)
              VALUES('$uname','$email','$password')";
        try{
        mysqli_query($conn,$sql);
        header("Location:index2.html");
       }
       catch(mysqli_sql_exception){
        echo "Can not insert data to the database";
       }
    }
    mysqli_close($conn);
    ?>
</body>
</html>
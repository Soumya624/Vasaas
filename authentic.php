<?php     
    include('connection.php'); 
    $username = $_POST['email']; 
    $password = $_POST['password']; 
     
        //to prevent from mysqli injection 
/*
        $username = stripcslashes($username); 
        $password = stripcslashes($password); 
        $username = mysqli_real_escape_string($conn, $username); 
        $password = mysqli_real_escape_string($conn, $password); 
*/     
        $sql = "select *from users where Username = '$username' and Password = '$password'"; 
        $result = mysqli_query($conn, $sql); 
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result); 
         echo("<br>");
        if($count == 1){ 
            echo "<h2><center>Hello "; 
            echo($username);
            echo("!</center></h2><br>");
        } 
        else{ 
            echo "<h2><center> Login failed. Invalid username or password!</center></h2>"; 
        }    
?> 

<html>
    <body>
    <center>
        <p>Want To Logout? <a href="login.html" style="text-decoration:none;">Logout Here</a></p>
    </center>
    </body>
</html>
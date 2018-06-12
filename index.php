<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Lets Chat</title>
</head>
<body>
    
    <div id="LoginDiv">
        <form action="UserLogin.php" method="post" id="form1">
            
            <h2>Login Form</h2>
            
            <table>
                <tr>
                    <td><input type="Email" name="UserMailLogin" placeholder="Enter Your Email" required></td>
                </tr>

                <tr>
                    <td><input type="password" name="UserPasswordLogin" placeholder="Enter Your Password" required></td>
                </tr>                
                
                
                <tr>
                    <td><input type="submit" value="Login"></td>
                </tr>                
                <?php
                    if(isset($_GET['error'])){
                ?>
                <tr>
                    <td></td> <td><span style="color: red;">Check Your Email or Password</span></td>
                </tr>
                
                <?php
                    }
                
                
                ?>
                
            </table>
            
        </form>
        
        
    </div>
    
    
    
</body>
</html>
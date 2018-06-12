<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Let Chat</title>
</head>
<body>

    <div id="SignUp" class="Div">
        <form action="InsertUser.php" method="post" id="form2">
            <h2>SignUp Form</h2>
            
            <table>
                <tr>
                    <td><input type="text" name="UserName" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td><input type="email" name="UserMail" placeholder="Enter Your Email"></td>
                </tr>
                <tr>
                    <td><input type="password" name="UserPassword" placeholder="Enter Your Password"></td>
                </tr>                
                <tr>
                    <td><input type="submit" value="SignUp"></td>
                </tr>
                <?php
                
                    if(isset($_GET['success'])){
                        
                    ?>
                    <tr>
                        <td></td><td><span style="color: green;">UserInserted</span></td>
                    </tr>
                <?php
                    }        
                ?>
        
            </table>
            
            
            
        </form>
        
        
    </div>
    
    
</body>
</html>
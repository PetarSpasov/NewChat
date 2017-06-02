<!DOCKTYPE HTML>

<html>
    <head>
        <script> type="text/javascript" src="Js/jquery.js" </script>
        <title>Welcome to Chat App</title>
    </head>
    <body>
        
        <h2>LOGIN FORM</h2>
        <div id="LoginDiv">
            <form method="post" action="pages/UserLogin.php">
                <table>
				    <tr>
                    <td>Username</td><td><input type="text" name="UserName"  /></td>
                    </tr>
                    <tr>
                    <td>Password</td><td><input type="password" name="UserPasswordLogin"  /></td>
                    </tr>
                    <tr>
                        <td></td><td><input type="submit" value="LOG IN"/></td>
                    </tr>
                    
                    <?php
                        if(isset($_GET['error'])){
                    
                    ?>
                    <tr>
                        <td></td><td><scan style="color:red">ERROR LOGIN</scan></td>
                    </tr>
                    
                    <?php
                    }
                    ?>
                  
                </table>
            </form>    
        </div>
        </br></br></br>
        
        <h2>SIGN UP FORM</h2>
        <div id="SignUpDiv">
            <form method="post" action="pages/InsertUser.php">
                <table>
                    <tr>
                        <td>Your username </td><td><input type="text" name="UserName"/></td>
                    </tr>
                    <tr>
                        <td>Password :</td><td><input type="password" name="UserPassword" /></td>
                    </tr>
                    <tr>
                        <td></td><td><input type="submit" value="Sign Up"/></td>
                    </tr>
                    <?php
                    if(isset($_GET['success'])){
                    ?>
                    <tr>
                        <td></td><td><scan style="color:green">UserInserted</scan></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </form>
        </div>
        
    </body>
</html>
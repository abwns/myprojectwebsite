
<?php
include('header.php');
?>

<div class="direc">>Login Page</div>

<div class="login">
    <div class="boxLogin">
        <fieldset>
            <legend>Login:</legend>
    
            <form action="loging.php" method="post">
                <div>
                    Username: <input type="text" name="username" /> <br />
                    Password: <input type="password" name="password" /> <br />
                </div>
                
                
                <input type="submit" value="Login">
                
            </form>
            
            <a class="click-me" href="register.php">Register</a>
        </fieldset>
    </div>
</div>
<?php 
include('footer.php');
?>

<?php
include('header.php');
?>

<div class="direc">>Login Page</div>

<div class="login">
    <div class="boxLogin">
        <fieldset>
            <legend>Login:</legend>
    
            <form action="registering.php" method="post">
                <div>
                    Username: <input type="text" name="username" /> <br />
                    Email: <input type="text" name="email" /> <br />
                    Password: <input type="password" name="password" /> <br />
                </div>
                
                
                <input type="submit" value="Register">
                
            </form>
            
            
        </fieldset>
    </div>
</div>

<?php
include('footer.php');
?>
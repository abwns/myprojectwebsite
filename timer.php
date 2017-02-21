
<?php
include('header.php');
?>

<div class="direc">>Timer Page</div>

<div class="timer">
    
    <form action="saveData.php" method="post">
        
    Name of the task: <input type="text" name="taskName" /> <br />
    Number of X's: <input type="text" name="xCount" /> <br />
    <input type="checkbox" name="done" value="on"> Done?<br>


    <input type="submit" value="Save">
    </form>
</div>

<?php 
include('footer.php');
?>
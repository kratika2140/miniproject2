<?php
if($_SERVER['REQUEST_METHOD']="POST")
{
    $connection_details=mysqli_connect('localhost','root','','events');
    if(isset($_POST['save'])){
        $uname=$_POST['uname'];
        $course=$_POST['branch'];
        $umail=$_POST['email']; 
        $uroll=$_POST['roll'];
        $in_query=INSERT INTO registration('name','bran','mail','number')VALUES('$uname','$course','$umail','$uroll');
        if(mysqli_query($connection_details,$in_queery)){
            echo"<h2 style=color:Green>REGISTRATION SUCCESSFUL</h2>";
            header("url:registration.php,refresh:2");
        }
        else{
            echo"<h2 style= color:Red>REGISTRATION UNSUCCESFUL</h2>";
            header("url:registration.php,refresh:2");
        }
    }
}
?>
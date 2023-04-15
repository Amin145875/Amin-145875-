<<?php  

function check_login($con)
{

    if(isset($_SESSION['user_id']))
    {
        $id=$_SESSION['user_id'];
        $query="select * mydata where user_id='$id' litmit 1";

        $result =mysqli($con,$qury);
        if ($result &&mysqli_num_rows($result)>0)
         {
            $user_data=mysqli_fetch_assoc();
            return $user_data;
           
        }
    }
    header("location:login.php")
    die
}
